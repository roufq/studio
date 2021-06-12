<?php
namespace App\Repositories;

use App\Models\Schedules;
use App\Models\Studios;
use App\Movie;
use App\Schedule;
use App\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SchedulesRepository extends Schedules
{
    // TODO : Make you own query methods
    public static function getAll(){
        return DB::table('schedules')
            ->join('movies', 'movies.id', '=' , 'schedules.movie_id')
            ->join('studios', 'studios.id', '=' , 'schedules.studio_id')
            ->select('movies.name as movie_name' , 'studios.name as studio_name' , 'schedules.*')
            ->get();
    }
    public static function add(Request $request){
        DB::table('schedules')->insert([
            'movie_id' => $request->movie_id,
            'studio_id' => $request->studio_id,
            'start' => $request->start,
            'end' => $request->end,
            'price' => $request->price,
        ]);
    }
    
    public static function editdata($id){
        $data['movie'] = Movie::get();
        $data['studio'] = Studio::get();
        $data['studios'] = Studios::latest();
        $data['schedul'] = Schedule::get();
        $data['schedule'] = Schedules::findById($id);
    }

    public static function updatedata(Request $request, $id){
        DB::table('schedules')->where('id', $id)->update([
            'movie_id' => $request->movie_id,
            'studio_id' => $request->studio_id,
            'start' => $request->start,
            'end' => $request->end,
            'price' => $request->price,
        ]);
    }

    public static function deletedata($id){
        DB::table('schedules')->where('id', $id)->delete();
    }

    public static function deleteByStudioId($studioId){
        return DB::table('schedules')->where('studio_id', $studioId)->delete();
    } 
    public static function deleteByMovieId($movieId){
        return DB::table('schedules')->where('movie_id', $movieId)->delete();
    }
    public static function detail($id){
        return DB::table('schedules')
        ->join('movies', 'movies.id', '=', 'schedules.movie_id') -> join('studios', 'studios.id', '=', 'schedules.studio_id') 
        ->select(
                'movies.name as movie_name',
                'movies.picture_url',
                'movies.minute_length',
                'studios.name as studio_name',
                'schedules.*'
            ) -> get($id);
    }

}