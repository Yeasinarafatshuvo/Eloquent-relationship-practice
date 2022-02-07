<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;
class SongController extends Controller
{
    public function add_song(){
        $song = new Song();
        $song->title = 'joy bangla banglar joy';
        $song->save();
    }

    //Get song based on singer id
    public function show_song($id)
    {
        $song = Singer::find($id)->songs;
        return  $song;
    }
}
