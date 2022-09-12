<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App;
use DB;

use App\Report;
use App\Combocol;

class ColumnController extends Controller
{
    //
    public function index(Request $request)
    {
        $this->authorize(User::class, 'index');
        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.users.index');
    }

    public function newCustomCol()
    {
        return view('report.newcustomcol');
    }

    public function massUpdate() 
    {
        $reportdata = DB::select('select * from report');
        return view('report.massupdate',['reportdata'=>$reportdata]);
    }

    public function autoupdateview()
    {
        $reportdata = DB::select('select * from report');
        return view('report.autoupdateview',['reportdata'=>$reportdata]);
    }

    public function reorderview()
    {
        $reportdata = DB::select('select * from report');
        return view('report.reorderview',['reportdata'=>$reportdata]);
    }

    public function hideview()
    {
        $reportdata = DB::select('select * from report');
        return view('report.hidecolview',['reportdata'=>$reportdata]);
    }
    

    public function massdispcombo(Request $request) 
    {
        $colname = $request->sendData;
        // $isCombo = DB::select("select * from report where ? LIKE '%?%'", array('name', $colname));
        $isCombo = DB::table('report')->select('*')
            ->where('name', '=', $colname)
            ->get();
        return response()->json($isCombo);
    }

    public function massUpdateCol(Request $request) 
    {
        $dataFlag = false;
        $columnname = "";
        $newvalue = "";
        $data = json_decode($request->sendData);
        if ($data) {
            foreach ($data as $key) {
                $columnname = $key->customcolumnname;
                $newvalue = $key->customvalue;
                
                DB::update('update report set name = ? where name = ?',[$newvalue,$columnname]);
            }
            $dataFlag = true;
        }
        
        $data2 = json_decode($request->sendData2);
        if ($data2) {
            foreach ($data2 as $key) {
                $valuecode = $key->valuecode;
                $valuedescription = $key->valuedescription;

                DB::update('update combocols set valcode = ? where name = ?',[$valuecode,$columnname]);
                DB::update('update combocols set valdesc = ? where name = ?',[$valuedescription,$columnname]);
            }
            DB::update('update combocols set name = ? where name = ?',[$newvalue,$columnname]);
        }
        
        return response()->json($dataFlag);
    }


}
