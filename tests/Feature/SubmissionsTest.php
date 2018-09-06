<?php

namespace Tests\Feature;

use App\Spot;
use App\Country;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubmissionsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        //$this->withoutExceptionHandling();
        factory(Country::class, 10)->create();
    }

    /** @test */
    public function a_user_can_submit_a_new_spot()
    {
        $country = Country::first();
        $this->submitSpot(['country' => $country->id])->assertSessionHasNoErrors();
    }

    /** @test */
    public function a_spot_requires_a_name()
    {
        $this->submitSpot(['name' => null])
            ->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_spot_requires_a_city()
    {
        $this->submitSpot(['city' => null])
            ->assertSessionHasErrors('city');
    }

    /** @test */
    public function a_spot_requires_an_address()
    {
        $this->submitSpot(['address' => null])
            ->assertSessionHasErrors('address');
    }

    /** @test */
    public function a_spot_requires_a_valid_country()
    {
        $this->submitSpot(['country' => null])
            ->assertSessionHasErrors('country');

        $this->submitSpot(['country' => 999])
            ->assertSessionHasErrors('country');
    }

    /** @test
     * Tests if unique slugs are correctly created when
     * two submissions share the same name
     */
    public function multiple_spots_may_have_the_same_name()
    {
        $country = Country::first();
        $dataToOverride = [
            'name' => 'Example Spot',
            'country' => $country->id
        ];

        $this->submitSpot($dataToOverride);
        $this->submitSpot($dataToOverride);

        $lastSpots = Spot::orderBy('created_at', 'desc')->take(2)->get();

        $this->assertNotEquals($lastSpots->pop()->slug, $lastSpots->pop()->slug);
    }

    private function submitSpot(array $overrides = [])
    {
        $spot = make(Spot::class, $overrides);
        $spotArray = $spot->toArray();

        $spotArray['image'] = null;

        if (array_key_exists('country', $overrides)) {
            $spotArray['country'] = $overrides['country'];
        }

        return $this->call('POST', route('spots.store'), $spotArray);
    }
}
