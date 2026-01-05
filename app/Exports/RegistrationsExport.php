<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;

class RegistrationsExport implements FromCollection, WithHeadings, WithEvents, ShouldAutoSize
{
    public function collection()
    {
        return Registration::select(
            'account_registration_id',
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            'no_hp',
            'no_hp_orangtua',
            'email',
            'alamat_domisili',
            'asal_sekolah',
            'kelas_jenjang',
            'jurusan_1',
            'jurusan_2',
            'jurusan_3',
            'jurusan_4',
            'jurusan_5',
            'universitas_1',
            'universitas_2',
            'universitas_3',
            'universitas_4',
            'universitas_5'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Account Registration ID',
            'Nama Lengkap',
            'Tempat Lahir',
            'Tanggal Lahir',
            'No HP',
            'No HP Orang Tua',
            'Email',
            'Alamat Domisili',
            'Asal Sekolah',
            'Kelas/Jenjang',
            'Jurusan 1',
            'Jurusan 2',
            'Jurusan 3',
            'Jurusan 4',
            'Jurusan 5',
            'Universitas 1',
            'Universitas 2',
            'Universitas 3',
            'Universitas 4',
            'Universitas 5',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();

                // 1️⃣ Header tebal dan center
                $sheet->getStyle('A1:' . $highestColumn . '1')->getFont()->setBold(true);
                $sheet->getStyle('A1:' . $highestColumn . '1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

                // 2️⃣ Wrap text untuk alamat_domisili dan email
                $sheet->getStyle('H2:H' . $highestRow)->getAlignment()->setWrapText(true);
                $sheet->getStyle('G2:G' . $highestRow)->getAlignment()->setWrapText(true);

                // 3️⃣ Auto filter
                $sheet->setAutoFilter('A1:' . $highestColumn . $highestRow);

                // 4️⃣ Tanggal rapi (tanggal_lahir dan created_at)
                for ($row = 2; $row <= $highestRow; $row++) {
                    $sheet->getStyle('D' . $row)
                        ->getNumberFormat()
                        ->setFormatCode('yyyy-mm-dd');
                }
            },
        ];
    }
}
