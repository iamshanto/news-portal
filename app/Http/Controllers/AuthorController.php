<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function createNews(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id,id,'.$request->get('category_id'),
        ]);
        $news = new News();
        $news->fill($request->all());
        $news->author_id = Auth::user()->id;
        $news->save();

        return $news;
    }
}
