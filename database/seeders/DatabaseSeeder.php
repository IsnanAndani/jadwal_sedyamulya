<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Crews::create([
            'id_crew' => '998877',
            'password' => Hash::make('4151'),
            'nama' => 'Sedya Mulya Pariwisata',
            'kategori'=>'Crew'
        ]);
        \App\Models\Crews::create([
            'id_crew' => '001',
            'password' => Hash::make('4151'),
            'nama' => 'Heru',
            'kategori'=>'Driver'
        ]);
        \App\Models\Crews::create([
            'id_crew' => '002',
            'password' => Hash::make('4151'),
            'nama' => 'Rangga',
            'kategori'=>'Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '003',
            'password' => Hash::make('4151'),
            'nama' => 'Surip',
            'kategori'=>'Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '004',
            'password' => Hash::make('4151'),
            'nama' => 'Kristian',
            'kategori'=>'Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '005',
            'password' => Hash::make('4151'),
            'nama' => 'Momon',
            'kategori'=>'Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '006',
            'password' => Hash::make('4151'),
            'nama' => 'Geger',
            'kategori'=>'Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '007',
            'password' => Hash::make('4151'),
            'nama' => 'Sugeng',
            'kategori'=>'Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '008',
            'password' => Hash::make('4151'),
            'nama' => 'Edi',
            'kategori'=>'Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '009',
            'password' => Hash::make('4151'),
            'nama' => 'Aji',
            'kategori'=>'Co Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '010',
            'password' => Hash::make('4151'),
            'nama' => 'Budi',
            'kategori'=>'Co Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '011',
            'password' => Hash::make('4151'),
            'nama' => 'Jarot',
            'kategori'=>'Co Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '012',
            'password' => Hash::make('4151'),
            'nama' => 'Partu',
            'kategori'=>'Co Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '013',
            'password' => Hash::make('4151'),
            'nama' => 'Wanto',
            'kategori'=>'Co Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '014',
            'password' => Hash::make('4151'),
            'nama' => 'Yatino',
            'kategori'=>'Co Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '015',
            'password' => Hash::make('4151'),
            'nama' => 'Ryan',
            'kategori'=>'Co Driver'

        ]);
        \App\Models\Crews::create([
            'id_crew' => '016',
            'password' => Hash::make('4151'),
            'nama' => 'Jiwo',
            'kategori'=>'Co Driver'

        ]);

        \App\Models\User::create([
            'name' => 'Isnan Andani',
            'email' => 'isnan@gmail.com',
            'password' => Hash::make('isnan'),
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
