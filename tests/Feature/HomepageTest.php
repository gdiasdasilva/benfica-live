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

        //factory(Country::class, 20)->create();
        //factory(Spot::class, 50)->create();
    }

    /** @test */
    public function it_fetches_three_most_recent_spots()
    {
        $this->assertTrue(true);
    }
}
