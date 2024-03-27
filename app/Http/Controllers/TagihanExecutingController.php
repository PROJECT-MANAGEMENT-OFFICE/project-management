<?php

namespace App\Http\Controllers;

use App\Models\TagihanExecuting;
use Illuminate\Http\Request;

class TagihanExecutingController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $tagihanExecuting = TagihanExecuting::all();
            return view('executing.procurementExecuting.procurementExecuting', compact(['tagihanExecuting']));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        return view('executing.procurementExecuting.addtagihan');
    }

    public function store(Request $request)
    {
        TagihanExecuting::create([
            'vendor' => $request->vendor,
            'deskripsi' => $request->deskripsi,
            'curr' => $request->curr,
            'nilai_tagihan' => $request->nilai_tagihan,
            // Menghapus $request->except(['_token']) karena tidak diperlukan di sini
        ]);

        return redirect('/procurementExecuting')->with('success', 'Tagihan executing berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $tagihanExecuting = TagihanExecuting::find($id);
        $tagihanExecuting->delete();
        return redirect('/procurementExecuting');
    }

    public function show($id)
    {
        // Mengambil data tagihan dengan ID yang diberikan
        $tagihanExecuting = TagihanExecuting::find($id);
        return view('executing.procurementExecuting.edittagihan', compact('tagihanExecuting'));
    }

    public function update(Request $request, $id)
    {
        $tagihanExecuting = TagihanExecuting::find($id);

        if (!$tagihanExecuting) {
            return redirect('/procurementExecuting')->with('error', 'Data tagihan tidak ditemukan.');
        }

        $tagihanExecuting->update([
            'vendor' => $request->vendor,
            'deskripsi' => $request->deskripsi,
            'curr' => $request->curr,
            'nilai_tagihan' => $request->nilai_tagihan,
        ]);

        return redirect('/procurementExecuting')->with('success', 'Tagihan executing berhasil diperbarui.');
    }
}
