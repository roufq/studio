<?php
namespace App\Repositories;
use Illuminate\Http\Request;

use App\Models\Movies;
use App\Models\Schedules;
use Illuminate\Support\Facades\DB;

class MoviesRepository extends Movies
{
    // TODO : Make you own query methods
    public static function savedata(Request $request){
        DB::table('movies')->insert([
            'name' => $request->name,
            'minute_length' => $request->minute_length,
            'picture_url' => $request->file('picture_url')->store('picture', 'public'),
        ]);
    }

    public static function editdata(Request $request, $id){
         DB::table('movies')->where('id', $id)->update([
            'name' => $request->name,
            'minute_length' => $request->minute_length,
            'picture_url' => $request->file('picture_url')->store('picture', 'public'),
         ]);
    }

    public static function deletedata($id){
     DB::table('movies')->where('id',$id)->delete();
     $data = Schedules::deleteById($id);
    }
    public static function show($idSchedul){
        return DB::table('movies')->where('minute_length', $idSchedul)->get();
    } 
}