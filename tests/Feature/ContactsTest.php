<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function setUp()
    {
        parent::setUp();
        Mail::fake();
    }

    /** @test */
    public function a_user_can_submit_a_new_valid_contact()
    {
        $messageData = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'message' => $this->faker->text(1000)
        ];

        $response = $this->followingRedirects()->call('POST', route('contacts.store'), $messageData);

        $response->assertSessionHasNoErrors();
        $response->assertOk()->assertSee(e($messageData['name']));
        $this->checkEmailSent(1);
    }

    /** @test */
    public function a_contact_requires_a_name()
    {
        $response = $this->call('POST', route('contacts.store'), []);
        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_contact_requires_an_email()
    {
        $response = $this->call('POST', route('contacts.store'), []);
        $response->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_contact_requires_a_message_below_2000_characters()
    {
        $response = $this->call('POST', route('contacts.store'), [
            'message' => $this->faker->text(2500)
        ]);

        $response->assertSessionHasErrors('message');
    }

    /**
     * Test that an e-mail for SpotSubmitted was sent $times times.
     *
     * @param int $times
     */
    private function checkEmailSent(int $times)
    {
        Mail::assertSent(ContactSubmitted::class, $times);
    }
}
