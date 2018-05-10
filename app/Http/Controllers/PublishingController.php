<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Post;
use App\Type;

class PublishingController extends Controller
{
    public function index()
    {
        $data['posts'] = Post::with('type')->get();
        $data['mail'] = Mail::with('type')->get();
        return response()->json($data);
    }

    public function type()
    {
        $data['type'] = Type::with(['posts', 'mails'])->get();
        return response()->json($data);
    }

    public function joinsameserver()
    {
        $data['post'] = Post::join('laramultidb2.types as db2type', 'posts.type_code', '=', 'db2type.code')->get();
        return response()->json($data);
    }
}
