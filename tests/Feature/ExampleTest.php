<?php

namespace Tests\Feature;

use App\Spot;
use App\Country;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        factory(Country::class, 20)->create();
        factory(Spot::class, 10)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
