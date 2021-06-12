<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use App\Models\Schedules;
use App\Models\Studios;
use App\Movie;
use App\Repositories\MoviesRepository;
use App\Repositories\SchedulesRepository;
use App\Schedule;
use App\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['schedule'] = Schedules::latest();
        $data['schedule'] = SchedulesRepository::getAll();
        // dd($data);
        return view('admin.schedule.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['movie'] = Movies::latest();
        $data['studio'] = Studios::latest();
        return view('admin.schedule.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SchedulesRepository::add($request);
        return redirect('admin/schedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedules::findById($id);
        $data['studio'] = Studio::get();
        $data['studios'] = $schedule->studio();
        $data['schedule'] = $schedule;
        $data['movie'] = $schedule->movie();
        $data['movies'] = Movie::get();
        // dd($data);
        return view('admin.schedule.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SchedulesRepository::updatedata($request, $id);
        
        return redirect('admin/schedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SchedulesRepository::deleteById($id);
        return redirect('admin/schedule');
    }
}
