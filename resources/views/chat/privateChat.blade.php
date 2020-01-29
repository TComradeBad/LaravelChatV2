@extends("layouts.app")
@section("content")
    <div id="privateChat">
        <chat-form></chat-form>
    </div>

@endsection

@section("scripts")
    <script defer src="{{asset('js/chat_scripts/privateChat.js')}}"></script>
@endsection
