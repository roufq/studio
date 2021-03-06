<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Branche;
use App\Models\Branches;
use App\Models\Studios;
use App\Repositories\BranchesRepository;
use App\Repositories\SchedulesRepository;
use App\Repositories\StudiosRepository;
use Illuminate\Http\Request;
use App\Studio;
class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['studio'] = BranchesRepository::show();
        $data['studio'] = BranchesRepository::branch();
        // $data['studio'] = Studio::all();
        // dd($data);
        return view('admin.studio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['branch'] = Branches::latest(); 
        return view('admin.studio.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'min:4',
            'basic_price' => 'required|integer|min:10000',
            'additional_friday_price' => 'required|integer|min:5000',
            'additional_saturday_price' => 'required|integer|min:5000',
            'additional_sunday_price' => 'required|integer|min:5000',
        ]);
        StudiosRepository::add($request);
        return redirect('admin/studio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['branch'] = Branche::get();
        $data['studio'] = Studios::findById($id);
        return view('admin.studio.edit',$data);
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
        StudiosRepository::updatedata($request, $id);
        return redirect('admin/studio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SchedulesRepository::deleteByStudioId($id);
        StudiosRepository::deletedata($id);
        return redirect('admin/studio');
    }
    public function studio($id){
        $studio = Studio::FindOrFail($id);
        return $studio; 
    }
}
