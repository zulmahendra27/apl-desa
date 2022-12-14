<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Outletter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminOutletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.outletter.index', [
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
        return view('admin.outletter.create', [
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
            'tujuan' => 'required',
            'file' => 'required|file|max:1024|mimes:pdf,docx,doc,jpg,png'
        ], [
            'file.mimes' => 'File must be a pdf, docx, doc, jpg or png file',
        ]);

        $validated['random_id'] = Str::random(40);
        $validated['file'] = $request->file('file')->store('outletters');

        Outletter::create($validated);

        return redirect('/dashboard/outletters')->with('success', 'Data berhasil ditambah.');
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
        return view('admin.outletter.edit', [
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
            'tujuan' => 'required',
            'file' => 'file|max:1024|mimes:pdf,docx,doc,jpg,png'
        ], [
            'file.mimes' => 'File must be a pdf, docx, doc, jpg or png file',
        ]);

        // $validated['random_id'] = Str::random(40);
        if ($request->file('file')) {
            if ($request->old_file) {
                Storage::delete($request->old_file);
            }

            $validated['file'] = $request->file('file')->store('outletters');
        }

        Outletter::where('id', $outletter->id)
            ->update($validated);

        return redirect('/dashboard/outletters')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outletter  $outletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outletter $outletter)
    {
        if ($outletter->file) {
            Storage::delete($outletter->file);
        }

        Outletter::destroy($outletter->id);

        return redirect('/dashboard/outletters')->with('success', 'Data berhasil dihapus');
    }
}
