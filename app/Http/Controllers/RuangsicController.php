<?php

namespace App\Http\Controllers;

use App\Models\ruangsic;
use Illuminate\Http\Request;

class RuangsicController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'waktustart' => 'required',
            'waktuend' => 'required',
            'kegiatan' => 'required',
            'sector' => 'required',
            'petugas' => 'required',
            'tempat' => 'required',
        ]);

        ruangsic::create([
            'tanggal' => $request->tanggal,
            'waktustart' => $request->waktustart,
            'waktuend' => $request->waktuend,
            'kegiatan' => $request->kegiatan,
            'sector' => $request->sector,
            'petugas' => $request->petugas,
            'tempat' => $request->tempat,
            'keterangan' => $request->Keterangan,
        ]);

        return redirect()->back()->with('success', 'Peminjaman berhasil dikirim!');

}
}