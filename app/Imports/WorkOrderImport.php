<?php

namespace App\Imports;

use App\WorkOrder;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class WorkOrderImport implements ToModel
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new WorkOrder([
            //
            'wo_number' => $row[0],
            'wo_description' => $row[1],
            'employee_id' => $row[2],
            'price' => $row[3],
            'status' => $row[4]
        ]);
    }
}
