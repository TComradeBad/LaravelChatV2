<?php

namespace App\Http\Controllers;

use App\Events\PrivateMessageSent;
use App\PrivateChat;
use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        /** @var User $user */
        $user = \Auth::user();
        $chats = $user->chats()->get(["*"]);
        return view("chat/chatlist", ["chats" => $chats]);
    }

    public function showPrivateChat($id)
    {
        return view("chat/privateChat");
    }

    public function createChat(Request $request)
    {
        $data = $request->all();
        /** @var User $user */
        $user = \Auth::user();
        $user->chats()->create(["name" => $data["chat_name"]]);
        return redirect("/user_chats");
    }

    public function startUpChat()
    {
        broadcast(new PrivateMessageSent(1,"hello"))->toOthers();
        return response()->json(["status"=>"ok"]);
    }

}
