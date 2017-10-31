<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ActivationLink extends Model
{
    protected $fillable = [
        'user_id', 'token'
    ];

    protected $table = 'activation_links';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public static function isActiveLink(ActivationLink $activationLink)
    {
        $carbonDateFromActivationLink = new Carbon($activationLink->created_at);
        $carbonDateNow = Carbon::now();
        return $carbonDateNow->diffInHours($carbonDateFromActivationLink) < 1;
    }
}
