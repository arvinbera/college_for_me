<?php

namespace App\Imports;

use App\Models\AllLead;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new AllLead([
            'name' => $row['name'],
            'location' => $row['location'],
            'email' => $row['email'],
            'phone' => $row['phone'],
            'academic_year' => $row['academic_year'],
            'lead_source' => $row['lead_source'],
        ]);
    }
}
