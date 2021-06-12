<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Schedules;
use App\Movie;
use App\Repositories\SchedulesRepository;
use App\Studio;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function index(){
        $data['movies'] = Movies::latest();
        // dd($moviedetail);
        return redirect('list',$data);
    }
    public function detail($id){
        $schedule = Schedules::findById($id);
        $data['studios'] = $schedule->studio();
        $data['schedule'] = $schedule;
        $data['movie'] = $schedule->movie();
        // dd($data);
        return view('detail', $data);
    }
}
