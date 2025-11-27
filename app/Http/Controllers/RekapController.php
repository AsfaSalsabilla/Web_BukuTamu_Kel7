<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TamuExport;

class RekapController extends Controller
{
    public function index()
    {
        // Tampilkan halaman rekap kosong atau semua data terakhir 30 hari
        $data = Tamu::orderBy('id', 'DESC')->get();
        return view('operator.rekap.index', [
            'data' => null,
            'tgl1' => null,
            'tgl2' => null
        ]);
    }

    public function filter(Request $request)
    {
        $request->validate([
            'tanggal1' => 'required|date',
            'tanggal2' => 'required|date'
        ]);

        $tgl1 = $request->tanggal1;
        $tgl2 = $request->tanggal2;

        // Ambil data tamu berdasarkan range tanggal
        $data = Tamu::whereBetween('tanggal', [$tgl1, $tgl2])
            ->orderBy('id', 'DESC')
            ->get();

        return view('operator.rekap.index', [
            'data' => $data,
            'tgl1' => $tgl1,
            'tgl2' => $tgl2
        ]);
    }

    public function exportExcel(Request $request)
    {
        $tgl1 = $request->tanggal1 ?? date('Y-m-d', strtotime('-1 month'));
        $tgl2 = $request->tanggal2 ?? date('Y-m-d');

        return Excel::download(new TamuExport($tgl1, $tgl2), 'rekap_tamu.xlsx');
    }
}
