<?php

namespace App\Policies;

use App\Models\Admin;

class StoreSetupPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function storeSetup(User $user):bool{
        dd( $user);
        // return $user->isSuperAdmin == '1' 
        //                     ? Response::allow()
        //                     : Response::deny('You are not a super admin');
    }
}
