<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branches;
use App\Repositories\BranchesRepository;
use App\Repositories\SchedulesRepository;
use App\Repositories\StudiosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function index()
    {
        $data['branche'] = DB::table('branches')->get();
        return view('admin.branch.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch.create');
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
            'name' => "required|min:3",
            'umur' => "min:5",
        ]);
        BranchesRepository::add($request);
        return redirect('admin/branch');
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
        $data['branch'] = Branches::findById($id);
        return view('admin.branch.edit',$data);
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
        BranchesRepository::updatedata($request, $id);
        $data['branche'] = Branches::latest();
        return view('admin.branch.index', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studios = StudiosRepository::findAllByBranchId($id);
        foreach($studios as $studio)
        {
            SchedulesRepository::deleteByStudioId($studio->id);
            // StudiosRepository::deleteById($studio->id);
        }
        // dd('ok');
        StudiosRepository::deleteByBranchId($id);
        BranchesRepository::deleteById($id);
        return redirect('admin/branch');
    }
    
}
