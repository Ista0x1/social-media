<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Threads</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Threads</h1>

        @foreach ($threads as $thread)
            <div class="thread">
                <h2>{{ $thread->title }}</h2>
                <p>Posted by: {{ $thread->user->name }}</p>
                <p>{{ $thread->content }}</p>
                <p>Created at: {{ $thread->created_at }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
