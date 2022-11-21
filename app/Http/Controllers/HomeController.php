<?php

namespace App\Http\Controllers;

use App\Models\Utility;
use App\Models\Visitor;
use App\Models\Meet;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this_year = Carbon::now()->format('Y');
        $daily = Visitor::where('created_at', 'LIKE', $this_year.'%')->get();
        // ->groupBy(function($date){
        //         return Carbon::parse($date->created_at)->format('d');
        //     });
        $visitor = Visitor::where('created_at', 'LIKE', $this_year.'%')->get();

        
        $kepsek = Visitor::where('meet_id', 1)->where('created_at', 'LIKE', $this_year.'%')->count();
        $tu = Visitor::where('meet_id', 2)->where('created_at', 'LIKE', $this_year.'%')->count();
        $bp = Visitor::where('meet_id', 3)->where('created_at', 'LIKE', $this_year.'%')->count();
        $staff_m = Visitor::where('meet_id', 4)->where('created_at', 'LIKE', $this_year.'%')->count();
        $staff_tu = Visitor::where('meet_id', 5)->where('created_at', 'LIKE', $this_year.'%')->count();
        $guru = Visitor::where('meet_id', 6)->where('created_at', 'LIKE', $this_year.'%')->count();
        $guru_piket = Visitor::where('meet_id', 7)->where('created_at', 'LIKE', $this_year.'%')->count();
        $dll = Visitor::where('meet_id', 8)->where('created_at', 'LIKE', $this_year.'%')->count();
        
        // foreach($kepsek as $meet){
        //     $meet->kepsek = Meet::where('id', $meet->id )->first();
        //     // dd($meet->kepsek->meet_with);
        // }
        foreach( $daily as $d)
        dd($d);

        // foreach($daily as $d)
        for ($i=1; $i <= 12; $i++){
            $monthVisitor[(int)$i]=0;
        }
        
        foreach ($visitor as $v){
            $month = explode('-', carbon::parse($v->created_at)->format('Y-m-d'))[1];
            $monthVisitor[(int) $month]+=1;
        }
        return view('main', compact('daily', 'visitor', 'kepsek', 'tu', 'bp', 'staff_m', 'staff_tu', 'guru', 'guru_piket', 'dll'))
        ->with('monthVisitor', $monthVisitor);
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
        //
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
    }
}
