<?php
namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Branches;
use Illuminate\Support\Facades\DB;

class BranchesRepository extends Branches
{
    // TODO : Make you own query methods
    public static function branch(){
        return DB::table('studios')
            ->join('branches', 'branches.id','=', 'studios.branch_id' )
            ->select('branches.name as branch_name', 'studios.*')
            ->get();
    }
    public static function add(Request $request){
       DB::table('branches')->insert([
            'name' => $request->name,
       ]);
    }

    public static function updatedata(Request $request, $id){
        DB::table('branches')->where('id', $id)->update([
            'name' => $request->name,
        ]);
    }

    public static function deleteById($id){
        DB::table('branches')->where('id', $id)->delete();
    }
}