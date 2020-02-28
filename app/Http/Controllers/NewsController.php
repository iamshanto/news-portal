<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function __construct()
    {
        $requestPerMinute = Auth::user()->is_paid ? 100 : 10;
        $this->middleware("throttle:{$requestPerMinute},1");
    }

    public function latest(Request $request)
    {
        /** @var NewsRepository $newsRepo */
        $newsRepo = app(NewsRepository::class);
        $news = $newsRepo->getAll($request->all(), Auth::user()->is_paid);

        return $news;
    }
}
