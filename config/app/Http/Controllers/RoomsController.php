<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extands Controller
{
    //
    public function checkAvailableRooms()
    {
        return view('rooms/checkAvailableRooms');
    }
}

?>