<?php
namespace App\Repositories;

use App\Models\Schedules;
use Illuminate\Http\Request;


class SchedulesRepository extends Schedules
{
    // TODO : Make you own query methods
    public static function add(Request $request){
        $data = new Schedules();
        $data->movie_id = $request->get('movie_id');
        $data->studio_id = $request->get('studio_id');
        $data->start = $request->get('start');
        $data->end = $request->get('end');
        $data->price = $request->get('price');
        $data->save();
    } 

    public static function updatedata(Request $request, $id){
        $data = Schedules::findById($id);
        $data->movie_id = $request->get('movie_id');
        $data->studio_id = $request->get('studio_id');
        $data->start = $request->get('start');
        $data->end = $request->get('end');
        $data->price = $request->get('price');
        $data->save();
    }

    public static function deletedata($id){
        $data = Schedules::deleteById($id);
    }
}