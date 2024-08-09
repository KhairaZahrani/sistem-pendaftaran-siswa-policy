<?php

namespace App\Policies;

use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JurusanPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Jurusan $jurusan)
    {
        return in_array($user->email, [
            'admin@gmail.com'
        ]);
    }

    public function create(User $user)
    {
        return $user->email === 'admin@gmail.com';
    }

    public function update(User $user, Jurusan $jurusan)
    {
        //
    }

    public function delete(User $user, Jurusan $jurusan)
    {
        return in_array($user->email,[
            'admin@gmail.com'
        ]);
    }

    public function restore(User $user, Jurusan $jurusan)
    {
        //
    }

    public function forceDelete(User $user, Jurusan $jurusan)
    {
        //
    }
}
