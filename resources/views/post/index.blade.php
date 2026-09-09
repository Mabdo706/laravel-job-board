<x-layout title="Blog Posts">
    @if(session('success'))
        <div class="bg-green-50 px-6 py-8">
            {{ session('succsess') }}
        </div>
    @endif

    <div class="space-y-6">
        @foreach($posts as $post)
            <div class="p-4 bg-white rounded-lg shadow border border-gray-200">
                <!-- العنوان -->
                <h2 class="text-xl font-bold text-gray-900 mb-1">
                    <a href="/blog/{{ $post->id }}" class="hover:text-blue-600">
                        {{ $post->title }}
                    </a>
                </h2>

                <!-- الكاتب -->
                <p class="text-sm text-gray-500 mb-3">
                    By: <strong class="text-gray-700">{{ $post->author }}</strong>
                </p>

                <!-- المحتوى -->
                <p class="text-gray-700 text-base">
                    {{ $post->content }}
                </p>

                <!-- زراير ال Edit,Delete -->
                <a class="text-yellow-500 hover:text-gray-500" href="/blog/{{ $post->id }}/edit">Edit</a>
                <br>
                <form method="POST" action="/blog/{{ $post->id }}" onsubmit="return confirm('Are you sure, this cannot be reserved?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-gray-500">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</x-layout>