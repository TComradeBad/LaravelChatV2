@extends("layouts.app")
@section("content")
    <div id="chat_create_form">
        <form method="post" action="/create_chat">
            @csrf
            <div class="form-group">
                <label for="chat_name">Chat name</label>
                <input id="chat_name" name="chat_name" type="text">
                <button type="submit" class="btn-success">Create</button>
            </div>


        </form>
        <br>
    </div>
    <div id="chats_table">
        <table class="table table-bordered">
            <th>Name</th>
            @foreach($chats as $chat)
                @if($chat != null)
                    <tr>
                        <td class="">
                            {{$chat->name}}
                        </td>
                        <td>
                            <a href="{{url("/private_chat/".$chat->id)}}"><button class="btn-success">Enter</button></a>
                        </td>
                    </tr>

                @endif
            @endforeach
        </table>
    </div>
@endsection
