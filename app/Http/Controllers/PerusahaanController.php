<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Perusahaan::all();
        view()->share([
            'data' => $data
        ]);

        return view('perusahaan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Perusahaan();
        $request->validate([
            'nama' => 'required',
            'daerah' => 'required',
            'deskripsi' => 'required'
        ]);

        $data->nama = $request->nama;
        $data->daerah = $request->daerah;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect()->route('admin.perusahaan')
            ->with('toast_success', 'Data Berhasl ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Perusahaan $perusahaan)
    {
        $data = Perusahaan::find($id);
        view()->share([
            'data' => $data
        ]);

        return view('edit-perusahaan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Perusahaan $perusahaan)
    {
        $data = Perusahaan::find($id);
        $request->validate([
            'nama' => 'required',
            'daerah' => 'required',
            'deskripsi' => 'required'
        ]);

        $data->nama = $request->nama;
        $data->daerah = $request->daerah;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect()->route('admin.perusahaan')
            ->with('toast_success', 'Data Berhasl diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Perusahaan $perusahaan)
    {
        $data = Perusahaan::find($id)->delete();
        return redirect()->route('admin.perusahaan')
            ->with('toast_success', 'Data Berhasl dihapus!');
    }
}
