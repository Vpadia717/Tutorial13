<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class DatabaseHandler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $v1 = DB::table('gd_events')->where('isdelete', 0)->get();
        return view('data.index')->with('v', $v1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'small_desc' => 'required',
            'detail_desc' => 'required'
        ]);

        $isdelte = 0;
        DB::table('gd_events')->insert([
            'title' => $request->input('title'),
            'small_desc' => $request->input('small_desc'),
            'detail_desc' => $request->input('detail_desc'),
            'isdelete' => $request->input('isdelete')
        ]);
        $v1 = DB::table('gd_events')->where('isdelete', 0)->get();
        return view('Data.index')->with('v', $v1);
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
        $data = DB::table('gd_events')->find($id);
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'small_desc' => 'required',
            'detail_desc' => 'required'
        ]);
        $id = $request->input('id');
        $title = $request->input('title');
        $small_desc = $request->input('small_desc');
        $detail_desc = $request->input('detail_desc');
        //echo $id;
        DB::update('update gd_events set title = ?,small_desc = ?,detail_desc = ? where id = ?', [$title, $small_desc, $detail_desc, $id]);
        $v = "Record Updated Succesfully";
        return view('message')->with('v1', $v);
        //echo "Record updated successfully.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::update('update gd_events set isdelete = 1 where id = ?', [$id]);
        $v = "Record Deleted Succesfully";
        return view('message')->with('v1', $v);
    }
}
