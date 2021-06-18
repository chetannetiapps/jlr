<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
        // function used to list the devices
    function lists($id =null){
    	return $id?Device::find($id):Device::all();
    }

    function add(Request $req){

    	$device = new Device;
    	$device->name = $req->name;
    	$device->release = $req->release;
    	$result = $device->save();

    	if($result)
    		return ["Results" => "Inserted Successfully"];
    	else
    		return ["Results" => "Inserted Failed"];

    }

    function update(Request $req){

    	$device = Device::find($req->id);
    	$device->name = $req->name;
    	$device->release = $req->release;
    	$result = $device->save();

    	if($result)
    		return ["Results" => "Updated Successfully"];
    	else
    		return ["Results" => "Updated Failed"];
    }

    function search($name){
    	return Device::where('name', 'like', '%' . $name . '%')->get();
    }

    function delete($id){
    	$device = Device::find($id);
    	$result = $device->delete();

    	if($result)
    		return ["Results" => "Deleted Successfully"];
    	else
    		return ["Results" => "Deletion Failed"];
    }
}
