<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $reportdata = DB::select('select * from report');
        return view('admin.dashboard.index',['reportdata'=>$reportdata]);
    }
}
