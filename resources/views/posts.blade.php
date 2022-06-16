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


<div class=" h-screen">
    <x-blog.navbar/>

    @foreach ($posts as $post)
        <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md mt-10 mb-5">
            <img class="object-cover w-full h-64"
                 src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                 alt="Article">

            <div class="p-6">
                <div>
                    <a href="{{ route('blog.show', $post->slug) }}"
                       class="block mt-2 text-2xl font-semibold text-gray-800 transition-colors duration-200 transform hover:text-gray-600 hover:underline">{{ $post->title }}</a>
                    <p class="mt-2 text-sm text-gray-600 ">
                        {!!  \Illuminate\Support\Str::limit($post->content, 150, '...') !!}</p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img class="object-cover h-10 rounded-full"
                                 src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60"
                                 alt="Avatar">
                            <a href="#" class="mx-2 font-semibold text-gray-700 ">{{ $post->user->name }}</a>
                        </div>
                        <span
                                class="mt-1 text-xs text-gray-600 ml-auto">{{ $post->created_at->toFormattedDateString()}}</span>
                    </div>

                </div>
            </div>
        </div>
@endforeach

{{ $posts->links() }}

</body>

</html>
