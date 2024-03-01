<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comments;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query('page');
        $posts = Blog::where([
            ['status', '=', 'published'],
            ['visibility', '=', 'public'],
        ])->paginate(5);

        $posts->sortByDesc('id');
        return view("home.blog", ['articles' => $posts, 'page' => $page]);
    }

    public function article($slug)
    {
        $article = Blog::where([
            ['slug', '=', $slug],
            ['status', '=', 'published'],
            ['visibility', '=', 'public'],
        ])->first();

        if (!$article) {
            abort(404);
        }

        $comments = Comments::where([
            ['article_id', '=', $article->article_id],
            ['status', '=', 'approved'],
        ])->orderByDesc('id')->take(5)->get();

        return view("home.blog_single", ['article' => $article, 'comments' => $comments]);
    }

    public function newComment(Request $request, $blog_id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required | max:255'
        ]);


        $createComment = Comments::createNewComment($request->all(), $blog_id);


        if (!$createComment) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
