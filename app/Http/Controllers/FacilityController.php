<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use View;
use DB;
use App\Facility;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fac = DB::table('facilities')
            ->where('facilities.deleted_at','=',NULL)
            ->get();
        return view('facility.facility',['facilities' => $fac]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('facility.addfacility');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|min:4',          
        ]);

        if ($validator->fails()) {
            return redirect('facility/create')
                        ->withErrors($validator)
                        ->withInput();
        }


        $fac = Facility::create([
            'name'  =>  $request->input('name'),
        ]);

        

        return redirect('facility');
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
        //
        $fac = DB::table('facilities')
            ->where('id','=',$id)
            ->get();

        return View::make('facility.viewfacility')
            ->with('facility', $fac);
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
        //
        $validator = Validator::make($request->all(), [           
            'name' => 'required|max:255|min:4',
        ]);

        if ($validator->fails()) {
            return redirect('facility/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        $fac = Facility::find($id);
        $fac->name = $request->input('name');
        $fac->save();               

        return redirect('facility');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fac = Facility::find($id);
        $fac->delete();
        

        return redirect('facility');
    }
}
