<?php

namespace App\Exports;

use App\Models\Lomba;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Color;

class LombaExport implements FromCollection, WithHeadings, WithMapping, WithStyles, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lomba::with('bidang', 'hadiah')->get();
    }

    /**
    * @return array
    */
    public function headings(): array
    {
        return [
            'ID Lomba',
            'Nama Lomba',
            'Deskripsi',
            'Penyelenggara',
            'Tanggal Lomba',
            'Lokasi',
            'Kategori Peserta',
            'Bidang Lomba',
            'Link Pendaftaran',
            'Status',
            'Jumlah Hadiah',
            'Gambar',
            'Created At',
            'Updated At'
        ];
    }

    /**
    * @var Lomba $lomba
    */
    public function map($lomba): array
    {
        return [
            $lomba->id_lomba,
            $lomba->nama_lomba,
            strip_tags($lomba->deskripsi),
            $lomba->penyelenggara,
            \Carbon\Carbon::parse($lomba->tanggal_lomba)->format('d-m-Y'),
            $lomba->lokasi,
            $lomba->kategori_peserta,
            $lomba->bidang ? $lomba->bidang->nama_bidang : '',
            $lomba->link_pendaftaran,
            $lomba->status,
            $lomba->hadiah ? $lomba->hadiah->count() : 0,
            $lomba->gambar_lomba,
            $lomba->created_at ? $lomba->created_at->format('d-m-Y H:i:s') : '',
            $lomba->updated_at ? $lomba->updated_at->format('d-m-Y H:i:s') : ''
        ];
    }

    /**
    * @param Worksheet $sheet
    */
    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => 'FFFFFF']
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => ['rgb' => '0284C7']
                ]
            ]
        ];
    }
}
