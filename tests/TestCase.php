<?php

namespace Tests;

use App\User;
use App\Exceptions\Handler;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $baseUser;

    protected function setUp()
    {
        parent::setUp();
        $this->disableExceptionHandling();

        $this->baseUser = [
            'name' => 'Sidrit Trandafili',
            'email' => 'forge405@gmail.com',
            'password' => 'sapiens',
            'password_confirmation' => 'sapiens'
        ];

        $this->seedTokens();

        // Storage::fake('images');
        // Mail::fake();
    }

    public function signIn($user = null)
    {
        // $user = $user ? $user : create($this->baseUser);
        $user = $user ? $user : create(User::class);
        // $this->actingAs($user);

        Passport::actingAs($user);

        return $this;
    }

    protected function disableExceptionHandling()
    {
        $this->oldExceptionHandler = $this->app->make(ExceptionHandler::class);
        $this->app->instance(ExceptionHandler::class, new class extends Handler {
            public function __construct()
            {
            }
            public function report(\Exception $e)
            {
            }
            public function render($request, \Exception $e)
            {
                throw $e;
            }
        });
    }

    protected function withExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, $this->oldExceptionHandler);
        return $this;
    }

    protected function enableExceptionHandling()
    {
        return $this->withExceptionHandling();
    }

    protected function seedTokens()
    {
        \DB::table('oauth_clients')->insert([
            'name' => 'Personal',
            'secret' => 'ZrMBHeHdo4ugHbH0fqSAkFm5nT0f2n9XUT1kvFeU',
            'redirect' => 'http://localhost',
            'personal_access_client' => 1,
            'password_client' => 0,
            'revoked' => 0
        ]);

        \DB::table('oauth_clients')->insert([
            'name' => 'Password',
            'secret' => 'roms2w1V0m0f1OuHhLn9EcFksTHQFpCImcx4TMWq',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0
        ]);
    }

    public function toObject($json)
    {
        return json_decode(json_encode($json));
    }
}
