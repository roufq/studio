<?php
namespace App\Repositories;

use App\Models\Admins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
class AdminsRepository extends Admins
{
    // TODO : Make you own query methods
    public static function show(){
        return DB::table('admins')->get();
    }

    public static function adddata(Request $request){
        DB::table('admins')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

    public static function updatedata(Request $request, $id){
        DB::table('admins')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
    public static function deletedata($id){
        DB::table('admins')->where('id', $id)->delete();
    }
}