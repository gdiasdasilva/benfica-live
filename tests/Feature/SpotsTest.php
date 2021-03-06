<?php

namespace Tests\Feature;

use App\Spot;
use App\Country;
use Tests\TestCase;
use App\Mail\SpotSubmitted;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SpotsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        Mail::fake();
        Storage::fake('local');

        factory(Country::class, 10)->create();
    }

    /** @test */
    public function an_approved_spot_can_be_visited_with_its_slug_in_path()
    {
        $spot = create(Spot::class, [
            'is_approved' => true
        ]);

        $response = $this->get(route('spots.show', [
            'countrySlug' => $spot->country->slug_pt,
            'spotSlug' => $spot->slug,
        ]));

        $response->assertOk()
            ->assertSee(e($spot->name))
            ->assertSee(e($spot->country->name_pt));
    }

    /** @test */
    public function a_not_approved_spot_cannot_be_visited()
    {
        $spot = create(Spot::class, [
            'is_approved' => false
        ]);

        $response = $this->get(route('spots.show', [
            'countrySlug' => $spot->country->slug_pt,
            'spotSlug' => $spot->slug,
        ]));

        $response->assertStatus(404)
            ->assertDontSee(e($spot->name))
            ->assertDontSee(e($spot->country->name_pt));
    }

    /** @test */
    public function a_spot_with_images_has_a_way_to_see_them()
    {
        $spot = create(Spot::class, [
            'is_approved' => true
        ]);

        $response = $this->get(route('spots.show', [
            'countrySlug' => $spot->country->slug_pt,
            'spotSlug' => $spot->slug,
        ]));

        $response->assertOk()
            ->assertSee(e($spot->name))
            ->assertSee('Ver imagens')
            ->assertSee(e($spot->country->name_pt));
    }

    /** @test */
    public function a_spot_without_images_has_no_way_to_see_them()
    {
        $spot = create(Spot::class, [
            'is_approved' => true,
            'image' => null
        ]);

        $response = $this->get(route('spots.show', [
            'countrySlug' => $spot->country->slug_pt,
            'spotSlug' => $spot->slug,
        ]));

        $response->assertOk()
            ->assertSee(e($spot->name))
            ->assertSee(e($spot->country->name_pt))
            ->assertDontSee('Ver imagens');
    }

    /** @test */
    public function a_user_can_submit_a_new_spot()
    {
        $country = Country::first();
        $this->submitSpot(['country' => $country->id])->assertSessionHasNoErrors();
        $this->checkEmailSent(1);
    }

    /** @test */
    public function a_spot_may_have_an_image_below_2mb_uploaded()
    {
        $country = Country::first();

        $testFile = UploadedFile::fake()->image('test-file.jpg')->size(300);

        $this->submitSpot([
            'country' => $country->id,
            'image' => $testFile,
        ])->assertSessionHasNoErrors();

        Storage::disk('local')->assertExists('spots/' . $testFile->hashName());

        $this->checkEmailSent(1);
    }

    /** @test */
    public function a_spot_image_must_have_less_than_2mb()
    {
        $country = Country::first();

        $testFile = UploadedFile::fake()->image('test-file.jpg')->size(3000);

        $this->submitSpot([
            'country' => $country->id,
            'image' => $testFile,
        ])->assertSessionHasErrors('image');

        Storage::disk('local')->assertMissing('spots/' . $testFile->hashName());
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
        $this->checkEmailSent(2);
    }

    /**
     * Function to submit a new spot to the correct endpoint
     *
     * @param array $overrides
     * @return \Illuminate\Foundation\Testing\TestResponse
     */
    private function submitSpot(array $overrides = [])
    {
        $spot = make(Spot::class, $overrides);
        $spotArray = $spot->toArray();

        if (array_key_exists('image', $overrides)) {
            $spotArray['image'] = $overrides['image'];
        } else {
            $spotArray['image'] = null;
        }

        if (array_key_exists('country', $overrides)) {
            $spotArray['country'] = $overrides['country'];
        }

        return $this->call('POST', route('spots.store'), $spotArray);
    }

    /**
     * Test that an e-mail for SpotSubmitted was sent $times times.
     *
     * @param int $times
     */
    private function checkEmailSent(int $times)
    {
        Mail::assertSent(SpotSubmitted::class, $times);
    }

}
