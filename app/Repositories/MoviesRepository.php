<?php
namespace App\Repositories;
use Illuminate\Http\Request;

use App\Models\Movies;
use App\Models\Schedules;

class MoviesRepository extends Movies
{
    // TODO : Make you own query methods
    public static function savedata(Request $request){
        $data = new Movies();
        $data->name = $request->get('name');
        $data->minute_length = $request->get('minute_length');
        $file = $request->file('picture_url')->store('picture', 'public');
        $data->picture_url = $file;
        $data->save();
    }
 
    public static function editdata(Request $request, $id){
         $movie = Movies::findById($id);
         $movie->name = $request->get('name');
         $movie->minute_length = $request->get('minute_length');
         $movie->picture_url = $request->file('picture_url')->store('picture', 'public');
         $movie->save();
    }
 
    public static function deletedata($id){
     $data = Movies::deleteById($id);
     Schedules::deleteById($id);
    }
}