<?php

namespace App\Exports;

use App\Models\Tamu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TamuExport implements FromCollection, WithHeadings
{
    protected $tgl1;
    protected $tgl2;

    public function __construct($tgl1, $tgl2)
    {
        $this->tgl1 = $tgl1;
        $this->tgl2 = $tgl2;
    }

    public function collection()
    {
        return Tamu::whereBetween('tanggal', [$this->tgl1, $this->tgl2])
                    ->orderBy('id', 'DESC')
                    ->get(['id', 'nama', 'alamat', 'tujuan', 'nope', 'tanggal', 'kode_unik']);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Alamat',
            'Tujuan',
            'No. HP',
            'Tanggal',
            'kode_unik'
        ];
    }
}
