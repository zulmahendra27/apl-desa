<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('front.dashboard.index', [
            'title' => 'Desa Geulumpang Sulu Barat',
            'description' => 'Selamat Datang di Desa Geulumpang Sulu Barat<br>Kecamatan Dewantara Kabupaten Aceh Utara Provinsi Aceh',
            'galleries' => Gallery::latest()->limit(6)->get()
        ]);
    }

    public function struktur()
    {
        return view('front.struktur.index', [
            'title' => 'Struktur Desa',
            'description' => ''
        ]);
    }

    public function visiMisi()
    {
        return view('front.visi-misi.index', [
            'title' => 'Visi dan Misi',
            'description' => ''
        ]);
    }

    public function agenda()
    {
        return view('front.agenda.index', [
            'title' => 'Agenda Desa',
            'description' => 'Kalender Agenda Kegiatan Masyarakat Desa Geulumpang Sulu Barat<br>Kecamatan Dewantara Kabupaten Aceh Utara Provinsi Aceh'
        ]);
    }

    public function galleries()
    {
        return view('front.gallery.index', [
            'title' => 'Galeri Desa',
            'description' => 'Gambar Menyangkut Desa dan Masyarakat Desa Geulumpang Sulu Barat<br>Kecamatan Dewantara Kabupaten Aceh Utara Provinsi Aceh',
            'galleries' => Gallery::latest()->get()
        ]);
    }
}