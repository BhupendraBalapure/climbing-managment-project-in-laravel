<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\CreditCard;
use Maatwebsite\Excel\Concerns\WithHeadings;



class BasicinfoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CreditCard::all();
    }
    public function headings(): array
    {
        return [
            'Sr.No',
            'Name',
            'Mobile',           
        ];
    }
}
