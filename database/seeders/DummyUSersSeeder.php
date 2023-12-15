<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Warga;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $userData = [
    //         [
    //             'name' => 'Mas Pengurus',
    //             'username' => 'Mamat',
    //             'familycardnumber' => '221921902',
    //             'email' => 'pengurus@gmail.com',
    //             'role' => 'Pengurus',
    //             'password' =>bcrypt('123123123')
    //         ],

    //         [
    //             'name' => 'Mas Warga',
    //             'username' => 'Arhub',
    //             'familycardnumber' => '211008021',
    //             'email' => 'arhub@gmail.com',
    //             'role' => 'Warga',
    //             'password' =>bcrypt('123123123')
    //         ],

    //         [
    //             'name' => 'Mas Petugas',
    //             'username' => 'Hendri',
    //             'familycardnumber' => '221022341',
    //             'email' => 'petugas@gmail.com',
    //             'role' => 'Petugas',
    //             'password' =>bcrypt('123123123')
    //         ],

    //         [
    //             'name' => 'Mas UMKM',
    //             'username' => 'Asep',
    //             'familycardnumber' => '211320909',
    //             'email' => 'umkm@gmail.com',
    //             'role' => 'UMKM',
    //             'password' =>bcrypt('123123123')
    //         ],
    //     ];

    //     foreach($userData as $key => $val){
    //         User::create($val);
    //     }
    // }
    // public function run(): void
    // {
    //     $wargaData = [
    //         [
    //             'nik' => '211334524',
    //             'nama' => 'Arhab Yasar Sundana',
    //             'pekerjaan' => 'Pelajar',
    //             'tanggal_lahir' => '2005-12-30',
    //             'tempat_lahir' => 'Bandung',
    //         ],
    //         [
    //             'nik' => '211312506',
    //             'nama' => 'Joni Sundawa',
    //             'pekerjaan' => 'Wiraswasta',
    //             'tanggal_lahir' => '1966-04-22',
    //             'tempat_lahir' => 'Purwakarta',
    //         ],
    //         [
    //             'nik' => '211212908',
    //             'nama' => 'Dini Subardini',
    //             'pekerjaan' => 'Wiraswasta',
    //             'tanggal_lahir' => '1969-10-21',
    //             'tempat_lahir' => 'Bandung',
    //         ],
    //     ];

    //     foreach($wargaData as $key => $val){
    //         Warga::create($val);
    //     }
    // }
}
