<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid mb-5 justify-items-end ">
                        <a href="{{ route('blog.create') }}"
                            class="bg-green-600 hover:bg-green-500 px-3 pb-2 pt-1 text-white  shadow-sm rounded-lg my-auto">Create
                            New
                            Blog</a>
                    </div>
                    <table class="border-collapse border border-slate-500 table-fixed mx-auto">
                        <thead>
                            <tr>
                                <th class="border border-slate-600 px-4">Tag</th>
                                <th class="border border-slate-600 px-4">Title</th>
                                <th class="border border-slate-600 px-4">Content</th>
                                <th class="border border-slate-600 px-4">User</th>
                                <th class="border border-slate-600 px-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>

                                    <td class="border border-slate-700 px-4">{{ $post->slug }}</td>
                                    <td class="border border-slate-700 px-4">{{ $post->title }}</td>
                                    <td class="border border-slate-700 px-4">
                                        {{ \Illuminate\Support\Str::limit($post->content, 150, '...') }}</td>
                                    <td class="border border-slate-700 px-4">{{ $post->user->name }}</td>

                                    <td class="border border-slate-700 px-4 text-xl">
                                        <a href="{{ route('blog.edit', $post->slug) }}"><i
                                                class="fa fa-pencil px-1 text-blue-700" aria-hidden="true"></i></a>
                                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"><i class="fa fa-trash px-1 text-red-700 "
                                                    aria-hidden="true"></i></button>
                                        </form>

                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pt-5">
                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
