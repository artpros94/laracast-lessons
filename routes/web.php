<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;



Route::get('/', function () {

    $files = File::files(resource_path("posts"));

    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {

    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);

});


