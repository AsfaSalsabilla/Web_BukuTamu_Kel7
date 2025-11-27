<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TamuController extends Controller
{
    public function index(Request $request)
    {
        $tgl = Carbon::today()->toDateString();

        // Statistik
        $stat = [
            'hari_ini'      => Tamu::whereDate('tanggal', $tgl)->count(),
            'kemarin'       => Tamu::whereDate('tanggal', Carbon::yesterday())->count(),
            'minggu_ini'    => Tamu::whereBetween('tanggal', [Carbon::today()->subDays(6), Carbon::today()])->count(),
            'bulan_ini'     => Tamu::whereMonth('tanggal', Carbon::now()->month)->count(),
            'keseluruhan'   => Tamu::count(),
        ];

        // Data harian
        $query = Tamu::whereDate('tanggal', now());

        // Filter pencarian
        if ($request->filled('keyword')) {
        $keyword = $request->keyword;
        $query->where(function($q) use ($keyword) {
            $q->where('nama', 'like', "%$keyword%")
              ->orWhere('nope', 'like', "%$keyword%")
              ->orWhere('kode_unik', 'like', "%$keyword%");
        });
    }

        // Data harian
        $data = $query->orderBy('id', 'desc')->paginate(5)->withQueryString();
        
        return view('operator.tamu.index', compact('stat', 'data', 'tgl'));
    }

    public function create()
    {
        return view('tamu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required',
            'nope' => 'required'
        ]);

        $kode = $this->generateUniqueCode();

        Tamu::create([
            'tanggal' => Carbon::today(),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tujuan' => $request->tujuan,
            'nope' => $request->nope,
            'kode_unik' => $kode,
        ]);

        return redirect()
        ->route('tamu.success')
        ->with('kode_unik', $kode);
    }

    public function storeOperator(Request $request)
    {
        $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'tujuan' => 'required',
        'nope' => 'required'
    ]);

    $kode = $this->generateUniqueCode();

    Tamu::create([
        'tanggal' => Carbon::today(),
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'tujuan' => $request->tujuan,
        'nope' => $request->nope,
        'kode_unik' => $kode,
    ]);

    // Redirect ke halaman index operator tamu dengan pesan sukses
    return redirect()->route('operator.tamu.index')->with('success', 'Data berhasil ditambahkan');
}


    public function edit($id)
    {
        $tamu = Tamu::findOrFail($id);
        return view('operator.tamu.edit', compact('tamu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required',
            'nope' => 'required'
        ]);

        $tamu = Tamu::findOrFail($id);
        $tamu->update([
           'nama'   => $request->nama,
           'alamat' => $request->alamat,
           'tujuan' => $request->tujuan,
           'nope'   => $request->nope,
        ]);

        return redirect()->route('operator.tamu.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Tamu::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    private function generateUniqueCode()
    {
        do {
            $kode = strtoupper(str()->random(6));
        } while (Tamu::where('kode_unik', $kode)->exists());

        return $kode;
    }

    /* public function searchForm()
    {
        return view('operator.cari');
    }

    public function searchByKodeUnik(Request $request)
    {
        $request->validate([
            'kode_unik' => 'required'
        ]);

        $tamu = Tamu::where('kode_unik', strtoupper($request->kode_unik))->first();

        if (!$tamu) {
            return redirect()->back()->with('error', 'Kode unik tidak ditemukan.');
        }

        return view('operator.cari', compact('tamu'));
    }*/
}


