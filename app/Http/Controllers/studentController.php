<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = DB::table('students')->get();
        return view('insertmarks',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('students')->insert([
         
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);

        return redirect(route('insertmarks'))->with('status', 'Students Added!!');
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
        $student = DB::table('students')->find($id);
        return view('editpage', ['student'=>$student]);
        
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

        echo $id;
      DB::table('students')->where('id', $id)->update([
             
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,


        ]);

        

        return redirect(route('insertmarks'))->with('status', 'Student Data Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect(route('insertmarks'))->with('status', 'Student Data Deleted!!');
    }
}
