@extends("layouts.app")
@section("content")
    <div id="privateChat" data-chat_id="{{$chat_id}}">
        <chat-message v-bind:messages="messages"></chat-message>
        <chat-form v-bind:chat_id="privateChatId"
        v-on:send_message="sendMessage"></chat-form>
    </div>

@endsection

@section("scripts")
    <script defer src="{{asset('js/chat_scripts/privateChat.js')}}"></script>
@endsection
