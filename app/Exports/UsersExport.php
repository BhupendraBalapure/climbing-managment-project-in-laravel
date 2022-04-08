<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\BusinessLoan;


class UsersExport implements FromCollection ,WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BusinessLoan::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'Email',
            'Mobile',
            'DOB',
            'pan',
            'Source of Income',
            'Company Name',
            'Loan',
            'Income',
            'City',
            'pincode',
            'created_at',
            'updated_at'            
        ];
    }
}
