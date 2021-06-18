<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use DB;

class MachineController extends Controller
{
    //
    function list()
    {
     $data = DB::table('device')
       ->join('machine', 'machine.deviceid', '=', 'device.id')
       ->select('device.name','machine.name', 'machine.function','device.release')
       ->get();
     return $data;
    }
}
