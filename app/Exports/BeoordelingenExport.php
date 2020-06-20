<?php

namespace App\Exports;

use \DB;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class BeoordelingenExport implements FromCollection
{
    public function collection()
    {
        $beoordelingen = \DB::select('select * FROM beoordeling_form');

        return $collection = collect($beoordelingen);
    }
}
