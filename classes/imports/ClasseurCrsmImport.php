<?php namespace Waka\Crsm\Classes\Imports;


use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ClasseurCrsmImport implements WithMultipleSheets 
{
    public function sheets(): array
    {
        trace_log("sheets");
        return [
            'secteurs' => new SectorImport(),
            'clients' => new ClientImport(),
            'contacts' => new ContactImport(),
        ];
    }
}