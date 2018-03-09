<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_pegawai = Role::where('name', 'pegawai')->first();
        $role_petugas =  Role::where('name', 'petugas')->first();
        $role_kepalaUPT =  Role::where('name', 'kepalaUPT')->first();
        $role_kepalaDinas =  Role::where('name', 'kepalaDinas')->first();

        $pegawai = new User();
        $pegawai->name = 'pegawai';
        $pegawai->email = 'pegawai@example.com';
        $pegawai->password = bcrypt('secret');
        $pegawai->save();
        $pegawai->roles()->attach($role_pegawai);

        $petugas = new User();
        $petugas->name = 'petugas';
        $petugas->email = 'petugas@example.com';
        $petugas->password = bcrypt('secret');
        $petugas->save();
        $petugas->roles()->attach($role_petugas);

        $kepalaUPT = new User();
        $kepalaUPT->name = 'kepalaUPT';
        $kepalaUPT->email = 'kepalaUPT@example.com';
        $kepalaUPT->password = bcrypt('secret');
        $kepalaUPT->save();
        $kepalaUPT->roles()->attach($role_kepalaUPT);

        $kepalaDinas = new User();
        $kepalaDinas->name = 'kepalaDinas';
        $kepalaDinas->email = 'kepalaDinas@example.com';
        $kepalaDinas->password = bcrypt('secret');
        $kepalaDinas->save();
        $kepalaDinas->roles()->attach($role_kepalaDinas);


    }
}
