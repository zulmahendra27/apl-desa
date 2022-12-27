<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('front.gallery.index', [
            'title' => 'Galeri Kegiatan',
            'description' => 'Berisi foto-foto kegiatan yang dilaksanakan di Desa',
            'galleries' => Gallery::latest()->get()
        ]);
    }
}
