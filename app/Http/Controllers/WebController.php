<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Drama;

class WebController extends Controller
{
    public function index()
    {
      $dramas = Drama::all();

      $result = [];

      foreach ($dramas as $drama) {
        $scores = Post::where('drama_id', $drama->id)->pluck('score')->toArray();
        if (count($scores) > 0) {
          $result[] = [
            "id" => $drama->id, 
            "score" => array_sum($scores) / count($scores)
          ];
        }
      }

      usort($result, function ($a, $b) {
        return $a['score'] > $b['score'] ? -1 : 1;
      });  

      return view('web.index', compact('result'));
    }
}
