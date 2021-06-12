<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Schedules;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $data['schedule'] = Schedules::latest();
        $data['schedule'] = Schedule::all();
        return view('user.schedul.index', $data);
    }
}
