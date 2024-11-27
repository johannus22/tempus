<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function index(){
        $events = Event::all();
        foreach($events as $event){
            $calendarEvent[] = [
                'id' => $event->id,
                'title' => $event->event_name,
                'start' => $event->event_time
            ];
        }
        return view('pages.calendar', ['event' => $calendarEvent]);
    }
}
