<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FV - Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
          integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-100">
<nav class="px-6 py-4 flex justify-start text-xl font-medium text-black hover:text-blue-800 ml-5">
    <a href="{{ route('blog.index') }}">← Blog</a>
</nav>
<div class="max-w-5xl mx-auto overflow-hidden bg-white rounded-lg shadow-md mt-10 mb-10 p-3">

    <div class="w-full text-center font-serif px-4 my-4 text-gray-600">
        {{ $post->created_at->toFormattedDateString() }}
    </div>
    <div class="w-full text-center text-4xl font-serif px-4 my-4">
        {{ $post->title }}
    </div>
    <hr class="mx-4"/>
    <div class="my-5 w-full flex justify-center">
        <img class="object-cover" src="https://picsum.photos/600/300">
    </div>

    <div class="px-10 mb-6 mt-10 font-serif font-light">

        <div class="prose prose-lg">
            {!! $post->content !!}

        </div>


    </div>

    <hr class="mx-4"/>
    <div class="mt-8 mb-2 w-full">
        <div class="flex items-center ">
            <div class="flex items-center ml-auto mr-10 ">
                <img class="object-cover h-15 rounded-full"
                     src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60"
                     alt="Avatar">
                <div class="mx-2 font-serif grid grid-cols-1">
                    <div class="text-center">{{ $post->user->name }}</div>
                    <div>Backend Developer</div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
