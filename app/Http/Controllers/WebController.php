<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drama;
use App\Post;

class WebController extends Controller
{
    public function index()
    {
      $recently_dramas = Drama::orderBy('created_at','DESC')->take(3)->get();
      $dramas = Drama::all();
      $popular_dramas = [];
      foreach ($dramas as $drama) {
        $scores = Post::where('drama_id', $drama->id)->pluck('score')->toArray();
        if (count($scores) > 0) {
          $popular_dramas[] = [
            "id" => $drama->id,
            "title" => $drama->title,
            "content" => $drama->content,
            "score" => array_sum($scores) / count($scores)
          ];
        }
      }
      usort($popular_dramas, function ($a, $b) {
        return $a['score'] > $b['score'] ? -1 : 1;
      });
      return view('web.index', compact('recently_dramas', 'popular_dramas'));

    }
}
