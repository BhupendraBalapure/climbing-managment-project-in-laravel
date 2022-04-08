<?php

namespace App\Exports;
use App\Models\PersonalLoan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class personalExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PersonalLoan::all();
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
