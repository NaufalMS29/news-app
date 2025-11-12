<?php

namespace Database\Seeders;

use App\Models\Komentar;
use App\Models\News;
use App\Models\User;
use App\Models\Wartawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // 1. Buat Wartawan
        $all_wartawan = Wartawan::factory(2)->create();
        // 2. Buat 4 Berita (Masing-masing berita dimiliki oleh wartawan)
        foreach ($all_wartawan as $wartawan) {
            $all_berita = News::factory(count: 4)->create([
                'wartawan_id' => $wartawan->id,
            ]);
            // 3. Buat 20 Komentar total dari masing-masing berita 5 komentar
            foreach ($all_berita as $berita) {
                Komentar::factory(5)->create([
                    'news_id' => $berita->id,
                ]);
            }
        }
    }
}
