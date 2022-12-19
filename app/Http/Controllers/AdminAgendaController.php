<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminAgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.agenda.index', [
            'title' => 'Agenda',
            'agendas' => Agenda::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agenda.create', [
            'title' => 'Tambah Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgendaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'tempat' => 'required',
            'waktu' => 'required|date'
        ]);

        $validated['random_id'] = Str::random(35);

        Agenda::create($validated);

        return redirect('/dashboard/agenda')->with('success', 'Agenda berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', [
            'title' => 'Edit Data',
            'agenda' => $agenda
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgendaRequest  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        $validated = $request->validate([
            'name' => 'required',
            'tempat' => 'required',
            'waktu' => 'required|date'
        ]);

        Agenda::where('id', $agenda->id)
            ->update($validated);

        return redirect('/dashboard/agenda')->with('success', 'Agenda berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        Agenda::destroy($agenda->id);

        return redirect('/dashboard/agenda')->with('success', 'Agenda berhasil dihapus');
    }
}
