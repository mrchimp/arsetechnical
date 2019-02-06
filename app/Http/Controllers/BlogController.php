<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Illuminate\Http\Request;

/**
 * View blog posts
 */
class BlogController extends Controller
{
    /**
     * Show list of blog posts
     *
     * @return View
     */
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);

        return view(
            'blog.index',
            [
                'posts' => $posts
            ]
        );
    }

    /**
     * View a single post
     *
     * @param string $slug The slug of the post
     *
     * @return View
     */
    public function post($slug)
    {
        $post = WinkPost::where('slug', $slug)
            ->firstOrFail();

        return view(
            'blog.post',
            [
                'post' => $post,
            ]
        );
    }
}
