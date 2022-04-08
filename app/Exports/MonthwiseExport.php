<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
// use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Field_Executive;


class MonthwiseExport implements FromCollection,WithHeadings
{
    /**
     * 
    * @return \Illuminate\Support\Collection
    */   

    function __construct() {
            
    }

    
    public function headings(): array
    {
        return ['Login Date',
            'Customer Name',
            'Email',
            'Contact no.',
            'Occupation',
            'Monthly Income',
            'Remark',
            'Team Leader Code',
            'Executive Code',
            'Executive Name',
            'Status'
        ];
    }

    public function collection()
    {
        
        return Field_Executive::select('created_at','full_name',
        'email',
        'phone',
        'occupation',
        'income',
        'remark',
        't_l_code',
        'e_code',
        'executive_name',
        'status')
        ->get();
    }

}
