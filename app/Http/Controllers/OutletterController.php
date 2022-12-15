<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Outletter;

class OutletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('outletter.index', [
            'title' => 'Surat Keluar',
            'outletters' => Outletter::with('category')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outletter.create', [
            'title' => 'Tambah Data',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOutletterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'tujuan' => 'required'
        ]);

        $validated['random_id'] = Str::random(40);

        Outletter::create($validated);

        return redirect('outletters')->with('success', 'Data berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outletter  $outletter
     * @return \Illuminate\Http\Response
     */
    public function show(Outletter $outletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outletter  $outletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Outletter $outletter)
    {
        return view('outletter.edit', [
            'title' => 'Edit Data',
            'categories' => Category::all(),
            'outletter' => $outletter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutletterRequest  $request
     * @param  \App\Models\Outletter  $outletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outletter $outletter)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'tujuan' => 'required'
        ]);

        // $validated['random_id'] = Str::random(40);

        Outletter::where('id', $outletter->id)
            ->update($validated);

        return redirect('outletters')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outletter  $outletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outletter $outletter)
    {
        Outletter::destroy($outletter->id);

        return redirect('outletters')->with('success', 'Data berhasil dihapus');
    }
}