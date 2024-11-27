<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminCalendarController extends Controller
{
    public function index(){
        $events = Event::all();
        foreach($events as $event){
            $calendarEvent[] = [
                'title' => $event->event_name,
                'start' => $event->event_time
            ];
        }
        return view('pages.auth.adminCalendar', ['event' => $calendarEvent]);
    }
}
