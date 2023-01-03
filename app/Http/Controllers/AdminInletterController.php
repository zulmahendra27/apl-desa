<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inletter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminInletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inletter.index', [
            'title' => 'Surat Masuk',
            'inletters' => Inletter::with('category')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inletter.create', [
            'title' => 'Tambah Data',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInletterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'pengirim' => 'required',
            'file' => 'required|file|max:1024|mimes:pdf,docx,doc,jpg,png'
        ], [
            'file.mimes' => 'File must be a pdf, docx, doc, jpg or png file',
        ]);

        $validated['random_id'] = Str::random(40);
        $validated['file'] = $request->file('file')->store('inletters');

        Inletter::create($validated);

        return redirect('/dashboard/inletters')->with('success', 'Data berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inletter  $inletter
     * @return \Illuminate\Http\Response
     */
    public function show(Inletter $inletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inletter  $inletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Inletter $inletter)
    {
        return view('admin.inletter.edit', [
            'title' => 'Edit Data',
            'categories' => Category::all(),
            'inletter' => $inletter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInletterRequest  $request
     * @param  \App\Models\Inletter  $inletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inletter $inletter)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'nomor' => 'required',
            'tanggal' => 'required|date',
            'perihal' => 'required',
            'pengirim' => 'required',
            'file' => 'file|max:1024|mimes:pdf,docx,doc,jpg,png'
        ], [
            'file.mimes' => 'File must be a pdf, docx, doc, jpg or png file',
        ]);

        // $validated['random_id'] = Str::random(40);
        if ($request->file('file')) {
            if ($request->old_file) {
                Storage::delete($request->old_file);
            }

            $validated['file'] = $request->file('file')->store('inletters');
        }

        Inletter::where('id', $inletter->id)
            ->update($validated);

        return redirect('/dashboard/inletters')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inletter  $inletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inletter $inletter)
    {
        if ($inletter->file) {
            Storage::delete($inletter->file);
        }

        Inletter::destroy($inletter->id);

        return redirect('/dashboard/inletters')->with('success', 'Data berhasil dihapus');
    }
}
