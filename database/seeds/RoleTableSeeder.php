<?php

use Illuminate\Database\Seeder;
use App\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_pegawai = new Role();
        $role_pegawai->name = 'pegawai';
        $role_pegawai->description = 'ini pegawai';
        $role_pegawai->save();

        $role_petugas = new Role ();
        $role_petugas->name = 'petugas';
        $role_petugas->description = 'ini petugas';
        $role_petugas->save();

        $role_kepalaUPT = new Role ();
        $role_kepalaUPT->name = 'kepalaUPT';
        $role_kepalaUPT->description = 'ini kepala UPT';
        $role_kepalaUPT->save();

        $role_kepalaDinas = new Role ();
        $role_kepalaDinas->name = 'kepalaDinas';
        $role_kepalaDinas->description = 'ini kepala Dinas';
        $role_kepalaDinas->save();
    }
}
