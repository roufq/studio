<?php
namespace App\Repositories;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersRepository extends Users
{
    // TODO : Make you own query methods
    public static function adddata(Request $request){
        $data = new Users();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = Hash::make($request->get('password'));
        $data->save();
    }

    public static function updatedata(Request $request, $id){
        $data = Users::findById($id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = Hash::make($request->get('password'));
        $data->save();
    }
    public static function deletedata($id){
        Users::deleteById($id);
    }
}