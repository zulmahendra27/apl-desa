<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Gallery;
use App\Models\Inletter;
use App\Models\Outletter;
use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private function profile($where)
    {
        return Profile::where($where)->get();
    }

    public function index()
    {
        return view('front.dashboard.index', [
            'title' => 'Desa Geulumpang Sulu Barat',
            'description' => 'Selamat Datang di Desa Geulumpang Sulu Barat<br>Kecamatan Dewantara Kabupaten Aceh Utara Provinsi Aceh',
            'galleries' => Gallery::latest()->limit(6)->get()
        ]);
    }

    public function sejarah()
    {
        return view('front.sejarah.index', [
            'title' => 'Sejarah Desa',
            'description' => '',
            'profiles' => $this->profile(['key' => 'sejarah'])
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
            'description' => '',
            'profiles' => $this->profile(['key' => 'visi-dan-misi'])
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

    public function adminDashboard()
    {
        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
            'inletter_count' => Inletter::count(),
            'outletter_count' => Outletter::count(),
            'agenda_count' => Agenda::count(),
            'gallery_count' => Gallery::count()
        ]);
    }
}
