<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Book::factory()->count(20)->create();

        Book::factory()->create([
            'id' => "9796650096",
            'title' => "BELAJAR SAINS DENGAN BAHAN MAKANAN SEHARI-HARI",
            'year' => 1996,
            'author' => "MURIEL MANDELL",
            'publisher' => "PENERBIT ANGKASA BANDUNG",
            'page' => 120,
            'category' => "sains",
            'quantity' => 1,
            'coverUrl' => 'https://res.cloudinary.com/hydrowind/image/upload/v1672441696/nabilalibrary/book1_jrvtpa.png',
            'description' => "viii + 120hlm",
        ]);

        Book::factory()->create([
            'id' => "9797570339",
            'title' => "Rangkuman Rumus Matematika, Fisika & Kimia SMA",
            'year' => 2005,
            'author' => "Redaksi Kawan Pustaka",
            'publisher' => "KAWAN PUSTAKA",
            'page' => 282,
            'category' => "sains",
            'quantity' => 1,
            'coverUrl' => 'https://res.cloudinary.com/hydrowind/image/upload/v1672441696/nabilalibrary/book2_ks3rl6.png',
            'description' => "VI, 282hlm, 19cm",
        ]);

        Book::factory()->create([
            'id' => "9797571162",
            'title' => "Rumus Lengkap Fisika SMA",
            'year' => 2010,
            'author' => "Drs. JOKO UNTORO",
            'publisher' => "PT WAHYUMEDIA",
            'page' => 264,
            'category' => "sains",
            'quantity' => 1,
            'coverUrl' => 'https://res.cloudinary.com/hydrowind/image/upload/v1672441692/nabilalibrary/book3_sf8y6g.png',
            'description' => "264hlm, 19cm",
        ]);
    }
}
