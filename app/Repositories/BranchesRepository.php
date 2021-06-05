<?php
namespace App\Repositories;
use Illuminate\Http\Request;
use App\Models\Branches;
use App\Models\Schedules;
use App\Models\Studios;

class BranchesRepository extends Branches
{
    // TODO : Make you own query methods
    public static function add(Request $request){
        $data = new Branches();
        $data->name = $request->get('name');
        $data->save();
    }

    public static function updatedata(Request $request, $id){
        $data = Branches::findById($id);
        $data->name = $request->get('name');
        $data->save();
    }

    public static function deletedata($id){
        $data = Branches::deleteById($id);
        Studios::deleteById($id);
        Schedules::deleteById($id);
    }
}