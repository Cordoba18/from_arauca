<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Support\Facades\DB;

class ParticipantsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    public function collection()
    {
        $data = DB::select("SELECT p.id, p.name, p.nit, p.phone,p.address, c.city  FROM participants p INNER JOIN citys c ON p.id_city = c.id");

        return collect($data);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'NIT',
            'Tèlefono',
            'Direcciòn',
            'Ciudad',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:F' . ($event->sheet->getHighestRow()))
                    ->getBorders()
                    ->getAllBorders()
                    ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_NONE);

                $event->sheet->getStyle('A1:F' . ($event->sheet->getHighestRow()))
                    ->getBorders()
                    ->getOutline()
                    ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
                $event->sheet->getStyle('A1:F1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ],
                ]);
            },
        ];
    }
}
