<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Date;

class UserObserver
{
    const SEC_IN_DAY = 86400;
    const DAY_IN_YEAR = 365;

    public function creating(User $user): void
    {
        $user->age = floor((time() - strtotime($user->birthdate)) / self::SEC_IN_DAY / self::DAY_IN_YEAR);
    }

    public function retrieved(User $user): void
    {
        $user->name = $user->first_name . ' ' . $user->last_name;
    }

    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
