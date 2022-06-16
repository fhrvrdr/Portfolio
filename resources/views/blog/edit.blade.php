<html>
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
@include('layouts.navigation')

<main>
    <div class="py-12">
        <div>

            <section class="max-w-5xl p-6 mx-auto bg-white rounded-md shadow-md ">
                <h2 class="text-lg font-semibold text-gray-700 capitalize ">Create New Post</h2>

                <form action="{{route('blog.update' ,$post->slug)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-1 gap-6 mt-4">
                        <div>
                            <label class="text-gray-700 " for="title">Title</label>
                            <input name="title" id="title" type="text" value="{{$post->title}}"
                                   class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-700 " for="content">Content</label>
                            <textarea cols="5" name="content" id="editor" class="bg-gray-500">
                                {{$post->content}}
                            </textarea>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Update
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>

</main>
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#editor')).catch((error) => {
        console.error(error);
    });
</script>
</body>
</html>

