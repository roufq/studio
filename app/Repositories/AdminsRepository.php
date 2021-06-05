<?php
namespace App\Repositories;

use App\Models\Admins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminsRepository extends Admins
{
    // TODO : Make you own query methods
    public static function adddata(Request $request){
        $data = new Admins();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = Hash::make($request->get('password'));
        $data->save();
    }

    public static function updatedata(Request $request, $id){
        $data = Admins::findById($id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = Hash::make($request->get('password'));
        $data->save();
    }
    public static function deletedata($id){
        Admins::deleteById($id);
    }
}