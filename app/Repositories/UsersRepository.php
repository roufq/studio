<?php
namespace App\Repositories;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersRepository extends Users
{
    public static function showdata(){
        return DB::table('users')->get();
    }
    // TODO : Make you own query methods
    public static function adddata(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

    public static function updatedata(Request $request, $id){
        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
    public static function deletedata($id){
        DB::table('users')->where('id', $id)->delete();
    }
}