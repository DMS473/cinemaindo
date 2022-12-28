<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'M. Daffa Muis',
            'email' => 'daffa@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);
        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);
        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);
        Post::create([
            'title' => 'Avatar The Way Of Water',
            'category_id' => 1,
            'user_id' => 1,
            'price' => 30000,
            'available' => 40,
            'image' => 'post-images/avatar.jpg',
            'slug' => 'avatar-the-way-of-water',
            'excerpt' => 'Pertarungan Alam Melawan Teknologi',
            'body' => '<p>Avatar: The Way of Water menceritakan kisah keluarga Sully 
            (Jake, Neytiri, dan anak-anak mereka) dan masalah yang mengikuti mereka. 
             Mereka harus menjalani 
            pertempuran yang mereka perjuangkan untuk tetap hidup, dan tragedi yang mereka alami.</p>'
        ]);
        Post::create([
            'title' => 'Pacific Rim',
            'category_id' => 1,
            'user_id' => 1,
            'price' => 20000,
            'available' => 20,
            'image' => 'post-images/pacific.jpg',
            'slug' => 'pacific-rim',
            'excerpt' => 'Robot Melawan Alien',
            'body' => '<p>Pacific Rim mengisahkan keadaan bumi yang terancam di masa depan karena 
            kemunculan Kaiju. Awalnya, monster raksasa ini muncul pertama kali dalam waktu singkat 
            di San Fransisco dan menghancurkan toga kota dengan membunuh puluhan ribu nyawa 
            manusia.</p>'
        ]);
        Post::create([
            'title' => 'Resident Evil 7: Biohazard',
            'category_id' => 2,
            'user_id' => 1,
            'price' => 15000,
            'available' => 10,
            'image' => 'post-images/resident.jpg',
            'slug' => 'resident-evil-7-the-movie',
            'excerpt' => 'Insiden Misterus Keluarga Baker',
            'body' => '<p>
            Resident Evil 7: Biohazard menyeret Anda ke dalam rumah mengerikan di daerah Louisiana. 
            Bintangnya adalah keluarga Baker. Sebuah insiden misterius membuat mereka kehilangan 
            kewarasan dan mulai menculik orang-orang yang tersesat. Sang tokoh utama, pria bernama Ethan Winters, 
            terjebak di sana setelah menerima pesan dari sang istri yang menghilang selama tiga tahun.    
            </p>'
        ]);   
        Post::create([
            'title' => 'Paimon The Animation',
            'category_id' => 3,
            'user_id' => 1,
            'price' => 35000,
            'available' => 20,
            'image' => 'post-images/genshin2.jpg',
            'slug' => 'paimon-the-animation',
            'excerpt' => 'Kisah Perjalanan Paimon',
            'body' => '<p>Paimon Genshin Impact adalah maskot dari game tersebut. Kamu akan ditemani 
            Paimon selama berpetualang dan karakter tersebut juga akan menjadi navigasimu selama 
            perjalanan. Terlepas dari hal tersebut, ada banyak orang yang masih belum tahu asal-usul 
            dan bagaimana Paimon muncul. Bahkan beberapa orang meragukan Paimon dan menanyakan apakah 
            Paimon jahat atau Paimon adalah seorang dewa?</p>'
        ]); 
    }
}



