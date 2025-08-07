<?php

namespace App\Http\Controllers;

use App\Models\Formmasuk;
use App\Models\Formpulang;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pegawai;

class AdminController extends Controller
{

public function dashboard()
{
    return view('admin.dashboard');
}

public function rekapAbsen(Request $request)
{
    // Query filter (tanggal & nama)
    $tanggal = $request->input('tanggal');
    $nama = $request->input('nama');

    $dataMasuk = \App\Models\formmasuk::query();
    $dataPulang = \App\Models\formpulang::query();

    if ($tanggal) {
        $dataMasuk->whereDate('tanggal', $tanggal);
        $dataPulang->whereDate('tanggal', $tanggal);
    }

    if ($nama) {
        $dataMasuk->where('nama', 'like', "%$nama%");
        $dataPulang->where('nama', 'like', "%$nama%");
    }

    $dataMasuk = $dataMasuk->get();
    $dataPulang = $dataPulang->get();

    $totalPegawai = \App\Models\Pegawai::count();
    $absenHariIni = \App\Models\formmasuk::whereDate('tanggal', now())->count();
    $belumAbsen = $totalPegawai - $absenHariIni;

    return view('admin.rekap', compact('dataMasuk', 'dataPulang', 'totalPegawai', 'absenHariIni', 'belumAbsen'));
}
}
