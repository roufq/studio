<?php
namespace App\Repositories;

use App\Models\Studios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudiosRepository extends Studios
{
    public static function show(){
        return  DB::table('studios')
            ->join('branches', 'studios.branch_id','=', 'studios.id')
            ->get();
    }
    // TODO : Make you own query methods
    public static function add(Request $request){
        DB::table('studios')->insert([
            'name' => $request->name,
            'branch_id' => $request->branch_id,
            'basic_price' => $request->basic_price,
            'additional_friday_price' => $request->additional_friday_price,
            'additional_saturday_price' => $request->additional_saturday_price,
            'additional_sunday_price' => $request->additional_sunday_price,
        ]);
    }

    public static function updatedata(Request $request, $id){
        DB::table('studios')->where('id', $id)->update([
            'name' => $request->name,
            'branch_id' => $request->branch_id,
            'additional_friday_price' => $request->additional_friday_price,
            'additional_saturday_price' => $request->additional_saturday_price,
            'additional_sunday_price' => $request->additional_sunday_price,
        ]);
    }

    public static function deletedata($id){
        DB::table('studios')->where('id', $id)->delete();
    }

    public static function findAllByBranchId($branchId){
        return DB::table('studios')->where('branch_id', $branchId)->get();
    }

    public static function deleteByBranchId($branch_id){
        DB::table('studios')->where('branch_id', $branch_id)->delete();
    }
}