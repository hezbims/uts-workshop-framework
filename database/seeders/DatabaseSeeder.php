<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Group;
use App\Models\Profesi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Group::create([
            'id' => 1,
           'nama' => 'Keluarga'
        ]);
        Group::create([
            'id' => 2,
            'nama' => 'Other'
        ]);
        Group::create([
            'id' => 3,
            'nama' => 'Teman'
        ]);
        Profesi::create([
            'id' => 1,
            'nama' => 'Petani'
        ]);
        Profesi::create([
            'id' => 2,
            'nama' => 'Pegawai'
        ]);
        Profesi::create([
           'id' => 3,
           'nama' => 'Guru'
        ]);


        Contact::create([
            'nomor' => '087876884620',
            'email' => 'hezbisulaiman@gmail.com',
            'nama' => 'Hezbi',
            'id_group' => 1,
            'id_profesi' => 1
        ]);

        Contact::create([
            'nomor' => '085706015892',
            'email' => 'wmaaf1311@gmail.com',
            'nama' => 'Wildand',
            'id_group' => 2,
            'id_profesi' => 2
        ]);
    }
}
