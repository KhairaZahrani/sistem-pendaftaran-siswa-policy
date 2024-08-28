<?php

namespace App\Policies;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SiswaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->email === "admin@gmail.com";
    }

    public function view(User $user, Siswa $siswa)
    {
        //
    }

    public function create(User $user)
    {
        return $user->email === "admin@gmail.com";
    }

    public function update(User $user, Siswa $siswa)
    {
        //
    }

    public function delete(User $user, Siswa $siswa)
    {
        return $user->email === "admin@gmail.com";
    }

    public function restore(User $user, Siswa $siswa)
    {
        //
    }

    public function forceDelete(User $user, Siswa $siswa)
    {
        //
    }
}
