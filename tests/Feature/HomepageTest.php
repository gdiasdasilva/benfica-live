<?php

namespace Tests\Feature;

use App\Spot;
use App\Country;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        factory(Country::class, 5)->create();
        factory(Spot::class, 15)->create();
    }

    /** @test */
    public function it_shows_featured_spots()
    {
        $commonAttributes = [
            'is_approved' => true,
            'is_featured' => true
        ];

        $spot1 = create(Spot::class, $commonAttributes);
        $spot2 = create(Spot::class, $commonAttributes);

        $response = $this->get(route('home'));
        $response->assertOk()
            ->assertSee(e($spot1->name))
            ->assertSee(e($spot2->name));
    }
}
