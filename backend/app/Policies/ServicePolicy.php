<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ServicePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function admin(User $user){
        $role = Role::where('name', 'admin')->value('id');
        if ($user->role_id == $role){
            return true;
        }
    }
    public function create(User $user)
    {
        $role = Role::where('name', 'admin')->value('id');
        if ($user->role_id == $role){
            return Response::allow('Вам разрешено');
        }
        return Response::deny('Вам запрещено.');
        
    }
}
