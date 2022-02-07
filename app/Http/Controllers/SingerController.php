<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SingerController extends Controller
{
    public function add_singer(){
        $singer = new Singer();
        $singer->name = 'Neha Kakkar';
        $singer->save();

        $songids = [1,3,5];
        $singer->songs()->attach($songids);
      
      
    }

    public function delete_data_singer_song($id){
        $singer = Singer::find($id);
        $songids = [1];
        $singer->songs()->detach($songids);
    }

    //get singer based on song id
    public function show_singer($id)
    {
        $singer = Song::find($id)->singers;
        return $singer;
    }
}
