<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

//class ReplyController extends Controller
//{
//    public function reply(Request $request)
//    {
//        $reply = new Reply;
//        $reply->fill($request->all());
//        $reply->user()->associate(Auth::user());
//        $reply->post()->associate($post);
//        $reply->save();
//
//        return redirect()->back();
//    }
//
//}
