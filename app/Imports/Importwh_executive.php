<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use App\Models\Wh_executive;

class Importwh_executive implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Wh_executive([
            'customer_name'     => $row['customer_name'],
            'contact_number'    => $row['contact_number'],
            'location'    => $row['location'],
            'company_name'    => $row['company_name'],
            'code'    => $row['code']

        ]);
    }
}
