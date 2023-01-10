<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agenda;
use App\Models\Category;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('password')
        ]);

        Category::create([
            'name' => 'Undangan',
            'slug' => 'undangan'
        ]);

        Category::create([
            'name' => 'Perintah',
            'slug' => 'perintah'
        ]);

        Agenda::create([
            'random_id' => 'y98ajsknuUHuhwsdoIOhs9-',
            'name' => 'Undangan Rapat',
            'tempat' => 'Gedung Serbaguna',
            'waktu' => '2022-12-27 09:00:00'
        ]);

        Agenda::create([
            'random_id' => 'jnKLAHJh9Hujksd8oUOH8u70J-1',
            'name' => 'Gotong Royong',
            'tempat' => 'Kantor Desa',
            'waktu' => '2022-12-25 07:30:00'
        ]);

        Profile::create([
            'key' => 'visi-dan-misi',
            'name' => 'Visi dan Misi',
            'content' => '<h1><strong>Visi</strong></h1><blockquote><strong>Terwujudnya kebahagiaan, kemakmuran dan kesejahteraan gampong Geulumpang sulu barat dalam bingkai syariat islam</strong></blockquote><div><br></div><h1><strong>Misi</strong></h1><ol><li>Mewujudkan masyarakat yang beriman, bertaqwa dan berakhlakul karimah.</li><li>Mewujudkan sumber daya manusia yang berilmu pengetahuan, sehat lahir dan bathin.</li><li>Mewujudkan kesejahteraan masyarakat.</li><li>Mewujudkan prasarana masyarakat yang memadai.</li><li>Mewujudkan ketahanan pangan gampong.&nbsp;</li></ol>'
        ]);

        Profile::create([
            'key' => 'sejarah',
            'name' => 'Sejarah',
            'content' => '<div>Kabupaten Aceh Utara adalah sebuah <a href="https://id.wikipedia.org/wiki/Kabupaten">kabupaten</a> yang terletak di provinsi <a href="https://id.wikipedia.org/wiki/Aceh">Aceh</a>, <a href="https://id.wikipedia.org/wiki/Indonesia">Indonesia</a>. Ibu kota kabupaten ini dipindahkan dari <a href="https://id.wikipedia.org/wiki/Lhokseumawe">Lhokseumawe</a> ke <a href="https://id.wikipedia.org/wiki/Lhoksukon,_Aceh_Utara">Lhoksukon</a>, menyusul dijadikannya <a href="https://id.wikipedia.org/wiki/Lhokseumawe">Lhokseumawe</a> sebagai kota otonom. Kabupaten ini tergolong sebagai kawasan industri terbesar di provinsi ini dan juga tergolong industri terbesar di luar pulau <a href="https://id.wikipedia.org/wiki/Jawa">Jawa</a>, khususnya dengan dibukanya industri pengolahan gas alam cair PT Arun LNG di <a href="https://id.wikipedia.org/wiki/Lhokseumawe">Lhokseumawe</a> pada tahun <a href="https://id.wikipedia.org/wiki/1974">1974</a>. Di daerah wilayah ini juga terdapat pabrik-pabrik besar lainnya: Pabrik Kertas Kraft Aceh, pabrik Pupuk AAF (Aceh Asean Fertilizer) dan pabrik <a href="https://id.wikipedia.org/wiki/Pupuk_Iskandar_Muda">Pupuk Iskandar Muda</a> (PIM).<br><br></div><div>Gampong Gelumpang Sulu Barat masuk kedalam salah satu kemukiman yang di atur dalam peraturan daerah Qanun Kabupaten Aceh Utara Nomor 5 Tahun 2006 “Tentang Pegukuhan, penyesuaian dan Pembentukan Kemukiman dalam Kabupaten Aceh Utara. Terdapat pada Pasal 7 Kemukiman Dalam Kecamatan Dewantara Bagian Kedua yaitu kemukiman Cot Murong. Pasal 9 Kemukiman Cot Murong sebagaimana dimaksud dalam Pasal 7 huruf b meliputi wilayah:<br><br></div><ol><li>Gampong Ulee Pulo</li><li>Gampong Ulee Reuleung</li><li>Gampong Geulumpang Sulu Timur</li><li>Gampong Geulumpang Sulu Barat</li><li>Gampong Bluka Teubai</li><li>Gampong Lancang Barat</li></ol><div><br></div><div>Pusat Pemerintahan Kemukiman Cot Murong sebagaimana dimaksud pada ayat (1) berkedudukan di Gampong Geulumpang Sulu Barat.<br><br></div>'
        ]);
    }
}