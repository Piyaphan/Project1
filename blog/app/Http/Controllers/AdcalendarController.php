<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdcalendarController extends Controller
{
	 function adcalendar(){
      return view('admin/calendar/adcalendar');
    }
}
