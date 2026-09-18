<x-layout title="Blog Posts">
    @php
        $userRole = auth()->user()->role;
    @endphp

    @if(session('success'))
        <div class="bg-green-50 px-6 py-8">
            {{ session('success') }}
        </div>
    @endif

    @if(session('fail'))
        <div class="bg-red-50 px-6 py-8">
            {{ session('fail') }}
        </div>
    @endif

    <!-- رأس الصفحة: العنوان على اليسار وزر Create على اليمين -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Blog</h1>
        
        @if(in_array($userRole, ['admin', 'editor']))
            <a href="/blog/create" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md shadow-sm text-sm transition duration-150">
                Create
            </a>
        @endif
    </div>

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
                    By: <strong class="text-gray-700">{{ $post->user->name }}</strong>
                </p>

                <!-- المحتوى -->
                <p class="text-gray-700 text-base">
                    {{ $post->content }}
                </p>

                <!-- زراير ال Edit,Delete -->
                <div class="mt-4 flex items-center space-x-4">
                    @if(in_array($userRole, ['admin', 'editor']))
                        <a class="text-yellow-500 hover:text-gray-500" href="/blog/{{ $post->id }}/edit">Edit</a>
                    @endif
                    
                    @if($userRole == 'admin')
                        <form method="POST" action="/blog/{{ $post->id }}" onsubmit="return confirm('Are you sure, this cannot be reversed?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-gray-500">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-layout>