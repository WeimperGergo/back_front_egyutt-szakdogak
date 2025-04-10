<?php

namespace Database\Seeders;

use App\Models\szakdoga;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        szakdoga::create([
            'szakdoga_nev' => 'istentudja',
            'githublink' => 'https://github.com/xyzzs',
            'oldallink' => 'https://xyzzs.com',
            'tagokneve' => 'Ferenc István, Kük Lopsz'
        ]);
        szakdoga::create([
            'szakdoga_nev' => 'Gomolyfalva',
            'githublink' => 'https://github.com/Gomolyfalva',
            'oldallink' => 'https://Gomolyfalva.com',
            'tagokneve' => 'Szikla Szilárd, Lamin Jafar, Kuti Géza'
        ]);
        szakdoga::create([
            'szakdoga_nev' => 'kalapkabát',
            'githublink' => 'https://github.com/kalapkabat',
            'oldallink' => 'https://kalapkabat.com',
            'tagokneve' => 'Kal Andrea, Csoki Pál, Szin Eszter'
        ]);
        szakdoga::create([
            'szakdoga_nev' => 'tankosba',
            'githublink' => 'https://github.com/tankosba',
            'oldallink' => 'https://tankosba.com',
            'tagokneve' => 'Undo Rito, Zab Kása Ernő, Solt Imre'
        ]);
        
    }
}
