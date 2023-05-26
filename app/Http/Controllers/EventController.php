<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;


class EventController extends Controller
{
    public function index(Request $request)
    {
        $all_event = DB::table('tbl_event')->where('status','1')->orderby('event_id','ASC')->paginate(4); 
        return view('event')->with('all_event',$all_event); 
    }

    public function details_event($event_slug)
    {
        $details_event = DB::table('tbl_event')->where('tbl_event.event_slug', $event_slug)->get();
        return view('details_event')->with('details_event', $details_event);
    }
}