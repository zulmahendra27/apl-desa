<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile.index', [
            'title' => 'Profile Desa',
            'profiles' => Profile::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create', [
            'title' => 'Tambah Data Profil'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'key' => 'required',
            'content' => 'required'
        ]);

        Profile::create($validated);

        return redirect('/dashboard/profile')->with('success', 'Profil berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('admin.profile.edit', [
            'title' => 'Edit Profil Desa',
            'profile' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $rules = [
            'name' => 'required',
            'content' => 'required'
        ];

        if ($request->key != $profile->key) {
            $rules['key'] = 'required';
        }

        $validated = $request->validate($rules);

        Profile::where('id', $profile->id)
            ->update($validated);

        return redirect('/dashboard/profile')->with('success', 'Profil Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        Profile::destroy($profile->id);
        return redirect('/dashboard/profile')->with('success', 'Data Profil Berhasil Dihapus');
    }

    public function checkKey(Request $request)
    {
        $key = SlugService::createSlug(Profile::class, 'key', $request->name);

        return response()->json(['key' => $key]);
    }
}
