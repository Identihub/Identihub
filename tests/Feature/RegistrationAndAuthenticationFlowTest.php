<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Mail\ActivationLinkMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrationAndAuthenticationFlowTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function theUserCanRegisterAndMailIsSent()
    {
        Mail::fake();

        $data = [
            'name' => 'Sidrit',
            'email' => 'foo@bar.com',
            'password' => 'supersuper',
            'password_confirmation' => 'supersuper'
        ];

        $response = $this->post('register', $data);

        $userCount = User::all()->count();
        $user = User::first();

        $this->assertEquals(1, $userCount);
        $this->assertDatabaseHas('users', ['email' => $data['email']]);

        Mail::assertSent(ActivationLinkMail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }


    /** @test */
    public function theTheConfirmationEmailIsPlain()
    {
        Mail::fake();

        $data = [
            'name' => 'Sidrit',
            'email' => 'foo@bar.com',
            'password' => 'supersuper',
            'password_confirmation' => 'supersuper'
        ];

        $response = $this->post('register', $data);

        Mail::assertSent(ActivationLinkMail::class, function ($mail) {
            $mail->build();
            return ($mail->textView == 'mails.confirmation-link-plain');
        });
    }

    /** @test */
    public function theInactiveUserCannotLogIn()
    {
        Mail::fake();

        $registrationData = [
            'name' => 'Sidrit',
            'email' => 'foo@bar.com',
            'password' => 'supersuper',
            'password_confirmation' => 'supersuper'
        ];

        $loginData = [
            'email' => 'foo@bar.com',
            'password' => 'supersuper'
        ];


        $this->post('register', $registrationData);
        $response = $this->post('login', $loginData);

        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    /** @test */
    public function theUserCanLoginAfterActivation()
    {
        Mail::fake();

        $data = [
            'name' => 'Sidrit',
            'email' => 'foo@bar.com',
            'password' => 'supersuper',
            'password_confirmation' => 'supersuper'
        ];

        $this->post('register', $data);

        $user = User::first();

        $this->assertEquals(0, $user->active);

        $activationLink = '';
        Mail::assertSent(ActivationLinkMail::class, function ($mail) use ($user, &$activationLink) {
            $activationLink = route('activate.check', ['token' => $mail->activationLink->token]);
            return $mail->hasTo($user->email);
        });

        $response = $this->get($activationLink);

        $this->assertEquals(1, $user->fresh()->active);

        $response->assertStatus(302);
        $response->assertRedirect('/');
        $this->assertTrue(auth()->check());
    }
}
