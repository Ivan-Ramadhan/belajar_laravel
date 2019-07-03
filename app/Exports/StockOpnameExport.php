<?php

namespace App\Exports;

use App\StockOpname;
use Maatwebsite\Excel\Concerns\FromCollection;

class StockOpnameExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StockOpname::all();
    }
}
