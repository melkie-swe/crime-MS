<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\ActivityLog;
use Illuminate\Support\Facades\DB;
class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('activity_log')->join('users', 'activity_log.causer_id', '=', 'users.id')
                    ->select(
                    'activity_log.id',
                    'activity_log.log_name',
                    'activity_log.description',
                    'activity_log.subject_type',
                    'activity_log.subject_id',
                    'activity_log.properties',
                    'activity_log.created_at'
                    ,'users.username')
                    // ->where('properties','LIKE',"%{$search}%")
                    // ->orWhere('users.name','LIKE',"%{$search}%")
                    ->orderBy('activity_log.created_at', 'DESC')
                    ->paginate(10);
        return view('pages.Activitylog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id){

        $details= DB::table('activity_log')->where('activity_log.id',$id)
        ->join('users', 'activity_log.causer_id', '=', 'users.id')       
        ->select(
         'users.username',       
         'activity_log.description',
         'activity_log.subject_type',
         'activity_log.properties',
         'activity_log.created_at'
 
        )->orderBy('activity_log.id', 'desc')
        ->get();
        $causer=DB::table('activity_log')->where('activity_log.id',$id)->first();
     
        return view('pages.Activitylog.detail',compact('details','causer'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
