<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Combocol;
use App\Computecol;

class ReportController extends Controller
{
    //
    public function insertData(Request $request) {
        $dataflag = false;
        $data = json_decode($request->sendData);
        $data_cnt = count($data);
        for ($i = 0; $i < $data_cnt; $i++) {
            $input_data = $data[$i];
            $columnname = $input_data->columnname;
            $description = $input_data->description;
            $type = $input_data->type;
            $size = $input_data->size;
            $decimalsize = $input_data->decimalsize;
            $manualediting = $input_data->manualediting;
            $massupdate = $input_data->massupdate;
            
            $report = new Report;
            $report->name = $columnname;
            $report->description = $description;
            $report->type = $type;
            $report->size = $size;
            $report->decsize = $decimalsize;
            $report->manedit = $manualediting;
            $report->masudt = $massupdate;

            $report->save();
            $dataflag = true;
        }

        $data2 = json_decode($request->sendData2);
        foreach ($data2 as $key) {
            $columnname = $key->columnname;
            $valuecode = $key->valuecode;
            $valuedescription = $key->valuedescription;
            
            $report = new Combocol;
            $report->name = $columnname;
            $report->valcode = $valuecode;
            $report->valdesc = $valuedescription;

            $report->save();
        }
        

        $data3 = json_decode($request->sendData3);
        foreach ($data3 as $key2) {
            $columnname = $key2->columnname;
            $formula = $key2->formula;
            
            $report = new Computecol;
            $report->name = $columnname;

            $report->col1 = 1;
            $report->col2 = 1;

            $report->operator = $formula;

            $report->save();
        }
        
        // $name = $data[0]['column name'];
        // $description = $data[0]['description'];
        return response()->json($dataflag);
    }
}
