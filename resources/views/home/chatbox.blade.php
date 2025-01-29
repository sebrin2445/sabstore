<x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaging System</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .chat-container {
            width: 100%;
            max-width: 450px;
            height: 600px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            background-color: #007bff;
            color: #ffffff;
            padding: 16px;
            font-size: 1.25rem;
            font-weight: 500;
            text-align: center;
        }

        .chat-body {
            flex: 1;
            padding: 16px;
            overflow-y: auto;
            background-color: #f9fafb;
        }

        .message {
            margin-bottom: 12px;
            max-width: 75%;
            padding: 12px 16px;
            font-size: 0.9rem;
            border-radius: 20px;
            line-height: 1.4;
        }

        .message.sent {
            background-color: #007bff;
            color: #ffffff;
            margin-left: auto;
            border-bottom-right-radius: 2px;
        }

        .message.received {
            background-color: #e4e6eb;
            color: #333333;
            margin-right: auto;
            border-bottom-left-radius: 2px;
        }

        .chat-footer {
            border-top: 1px solid #ddd;
            padding: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .chat-footer input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 24px;
            font-size: 0.95rem;
            outline: none;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .chat-footer button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 16px;
            font-size: 0.95rem;
            border-radius: 24px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .chat-footer button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 500px) {
            .chat-container {
                max-width: 100%;
                height: 100vh;
                border-radius: 0;
            }

            .chat-header {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <!-- Chat Header -->
        <div class="chat-header">
            Chat with {{ $recipient->name }}
        </div>

        <!-- Chat Body -->
        <div class="chat-body" id="chatBody">
            @foreach($messages as $message)
                <div class="message {{ $message->user_id === Auth::id() ? 'sent' : 'received' }}">
                    {{ $message->message }}
                </div>
            @endforeach
        </div>

        <!-- Chat Footer -->
        <div class="chat-footer">
            <form action="{{ route('send.message') }}" method="POST" style="width: 100%; display: flex; gap: 8px;">
                @csrf
                <input type="hidden" name="recipient_id" value="{{ $recipient->id }}">
                <input type="text" name="message" placeholder="Type a message..." required>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>
</x-app-layout>