<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Schedules;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function detail($id){
        $schedule = Schedules::findById($id);
        $data['studios'] = $schedule->studio();
        $data['schedule'] = $schedule;
        $data['movie'] = $schedule->movie();
        // dd($data);
        return view('detail', $data);
    }
}
