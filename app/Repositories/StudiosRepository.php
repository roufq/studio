<?php
namespace App\Repositories;

use App\Models\Branches;
use App\Models\Studios;
use Illuminate\Http\Request;


class StudiosRepository extends Studios
{
    // TODO : Make you own query methods
    public static function add(Request $request){
        $data = new Studios();
        $data->name = $request->get('name');
        $data->branch_id = $request->get('branch_id');
        $data->basic_price = $request->get('basic_price');
        $data->additional_friday_price = $request->get('additional_friday_price');
        $data->additional_saturday_price = $request->get('additional_saturday_price');
        $data->additional_sunday_price = $request->get('additional_sunday_price');
        $data->save();
    }

    public static function updatedata(Request $request, $id){
        $data = Studios::findById($id);
        $data->name = $request->get('name');
        $data->branch_id = $request->get('branch_id');
        $data->basic_price = $request->get('basic_price');
        $data->additional_friday_price = $request->get('additional_friday_price');
        $data->additional_saturday_price = $request->get('additional_saturday_price');
        $data->additional_sunday_price = $request->get('additional_sunday_price');
        $data->save();
    }

    public static function deletedata($id){
        Studios::deleteById($id);
    }
}