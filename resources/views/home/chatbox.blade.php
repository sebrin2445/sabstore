 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Box</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* CSS styles as before */
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">Chat with {{ $recipient->name }}</div>
        <div class="chat-body" id="chatBody">
            @foreach($messages as $message)
                <div class="message {{ $message->user_id === Auth::id() ? 'sent' : 'received' }}">
                    {{ $message->message }}
                </div>
            @endforeach
        </div> 
        </div>
        <div class="chat-footer">
            <form action="{{ route('send.message') }}" method="POST">
                @csrf
                <input type="hidden" name="recipient_id" value="{{ $recipient->id }}">
                <input type="text" name="message" placeholder="Type a message..." required>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>
