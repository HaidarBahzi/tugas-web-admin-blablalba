<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kelas.all', [
            "title" => "List Kelas",
            "kelas" => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create', [
            "title" => "Tambah Kelas",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "nama_kelas" => 'required|max:255'
        ]);

        $result = Kelas::create($validateData);

        if ($result) {
            return redirect('/kelas/all')->with('success', 'Data kelas berhasil ditambahkan!');
        } else {
            return redirect('/kelas/all')->with('error', 'Gagal membuat data kelas. Silakan coba lagi.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $id)
    {
        return view('kelas.edit', [
            "title" => "Edit Kelas",
            "kelas" => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        $validateData = $request->validate([
            "nama_kelas" => 'required|max:255'
        ]);

        $result = Kelas::where('id',$kelas->id)->update($validateData);

        if ($result) {
            return redirect('/dashboard/kelas/all')->with('success', 'Data kelas berhasil diupdate!');
        } else {
            return redirect('/dashboard/kelas/all')->with('error', 'Gagal update data kelas. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Kelas::destroy($id);
        return redirect('/dashboard/kelas/all');
    }
}
