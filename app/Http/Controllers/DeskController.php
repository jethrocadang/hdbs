<?php

namespace App\Http\Controllers;
use App\Models\Desk;

use Illuminate\Http\Request;

class DeskController extends Controller
{
    //

    public function index(){
        $desks = Desk::all();
        return view("desks.index", compact("desks"));
    }


    //Disable desks (Status)
    public function disableDesk($id)
    {
        $desk = Desk::findOrFail($id);

        $desk->update(['is_available' => false]);

        return redirect()->route('desks.index')->with('success', 'Desk disabled successfully!');
    }

    //Desk Type (by hour, full 8hour)
    public function setTimeSetting($id, $timeSetting)
    {
        $desk = Desk::findOrFail($id);

        // Validate the $timeSetting to ensure it's a valid option
        if (!in_array($timeSetting, ['by_hour', 'full_8_hours'])) {
            return redirect()->route('desks.index')->with('error', 'Invalid time setting.');
        }

        // Update the desk with the chosen time setting
        $desk->update(['desk_type' => $timeSetting]);

        return redirect()->route('desks.index')->with('success', 'Time setting updated successfully!');
    }

}
