<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peran;
use App\Models\Film;
use App\Models\Cast;
use RealRashid\SweetAlert\Facedes\Alert;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $peran = Peran::all();
       return view('peran.index',compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Peran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran = new Peran;

        $request->validate([
            'Film' => 'required',
            'Cast' => 'required',
            'Nama' => 'required',
        ]);

        $peran->film = $request->film;
        $peran->cast = $request->cast;
        $peran->nama = $request->nama;
        $simpan = $peran->save();

        if($simpan) {
            Alert::success('Success', 'Data berhasil ditambah');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Data gagal ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peran = Peran::where('id',$id)->first();

        return view('peran.edit', compact('peran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'Film' => 'required',
            'Cast' => 'required',
            'Nama' => 'required',
        ]);

        $peran->film = $request->film;
        $peran->cast = $request->cast;
        $peran->nama = $request->nama;
        $simpan = $peran->save();

        $ubah = $peran->save();
        if($ubah) {
            Alert::success('Success', 'Data berhasil diubah');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Data gagal diubah');
        }

        return redirect('/peran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Peran::find($id);

        $hapus = $peran -> delete();
        if($hapus) {
            Alert::success('Success', 'Data berhasil dihapus');
            return redirect('/peran');
        } else {
            Alert::error('Failed', 'Data gagal dihapus');
        }
    }
}
