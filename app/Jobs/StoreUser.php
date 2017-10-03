<?php

namespace App\Jobs;

use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class StoreUser implements ShouldQueue
{
    private $data;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var boolean
     */
    private $identified;

    /**
     * Create a new job instance.
     *
     * @param $data
     * @param bool $active
     * @param bool $identified
     */
    public function __construct($data, $active, $identified)
    {
        $this->data = $data;
        $this->active = $active;
        $this->identified = $identified;
    }

    /**
     * Execute the job.
     *
     * @return User
     */
    public function handle()
    {
        $user = new User();
        $user->name = $this->data['name'];
        $user->email = $this->data['email'];
        $user->password = bcrypt($this->data['password']);
        $user->active = $this->active;
        $user->identified = $this->identified;
        $user->save();
        return $user;
    }
}
