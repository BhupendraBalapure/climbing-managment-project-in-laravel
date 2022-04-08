<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\CCStepTWO;
use App\Models\CreditCard;

use Maatwebsite\Excel\Concerns\WithHeadings;



class CreditExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
  
     public function collection()
    {
        return CCStepTWO::select('name','mobile','img_name','email','dob','pan','income_source','company_name','loan','city','pincode','homeaddress','homepincode')->get();
    }

    public function headings(): array
    {
        return [
            // 'Sr.No',
            'Name',
            'Mobile',
            'Credit Card Name',
            'Email',
            'DOB',
            'Pan',
            'Source of Income',
            'Company Name',
            'Loan',
            // 'Monthly Income',
            'City',
            'Pincode',
            'Residential Address',
            'Residential Pincode'
            // 'created_at',
            // 'updated_at'            
        ];
    }
}
