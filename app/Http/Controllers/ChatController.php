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
        return view("chat/privateChat", ["chat_id" => $id]);
    }

    public function createChat(Request $request)
    {
        $data = $request->all();
        /** @var User $user */
        $user = \Auth::user();
        $user->chats()->create(["name" => $data["chat_name"]]);
        return redirect("/user_chats");
    }

    public function message(Request $request)
    {
        $data = $request->json()->all();
        broadcast(new PrivateMessageSent($data["chat_id"], $data["message"],\Auth::user()))->toOthers();
    }


}
