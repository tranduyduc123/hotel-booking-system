<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return view('backend.Room',compact('rooms'));
    }
}
