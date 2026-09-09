<x-layout title="View Post">

    <div class="max-w-4xl mx-auto my-24 p-6 bg-white rounded-lg shadow-md">
        <!-- العنوان -->
        <h1 class="text-3xl font-bold text-gray-900 mb-2">
            {{ $post->title }}
        </h1>

        <!-- الكاتب والحالة -->
        <div class="flex items-center gap-4 text-sm text-gray-600 mb-6">
            <span>By: <strong class="text-gray-800">{{ $post->author }}</strong></span>
            <span>•</span>
            <span class="px-2 py-1 rounded text-xs font-semibold {{ $post->published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                {{ $post->published ? 'Published' : 'Draft' }}
            </span>
        </div>

        <hr class="border-gray-200 mb-6">

        <!-- المحتوى (Content) -->
        <div class="text-gray-700 text-lg leading-relaxed mb-8">
            {{ $post->content }}
        </div>

        <div class="mb-8">
            <a href="/blog" class="text-indigo-600 hover:text-indigo-800 font-medium">← Back to Posts</a>
        </div>

        <hr class="border-gray-200 my-8">

        <!-- قسم التعليقات (Comments Section) -->
        <div class="space-y-6">
            <h2 class="text-2xl font-bold text-gray-900">Comments</h2>

            {{-- رسالة النجاح عند إضافة تعليق --}}
            @if(session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            {{-- قائمة التعليقات السابقة --}}
            <div class="space-y-4">
                @forelse($post->comments as $comment)
                    <div class="p-4 border border-gray-100 rounded-lg bg-gray-50 shadow-sm">
                        <div class="text-sm text-gray-600 mb-1">
                            By: <strong class="text-gray-800">{{ $comment->author }}</strong>
                        </div>
                        <p class="text-gray-700 leading-relaxed">{{ $comment->content }}</p>
                    </div>
                @empty
                    <p class="text-gray-500 italic">No comments yet. Be the first to comment!</p>
                @endforelse
            </div>

            <!-- نموذج إضافة تعليق (Add Comment Form) -->
            <div class="mt-8 pt-6 border-t border-gray-100">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Add a Comment</h3>

                <form action="/comments" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Author / Name</label>
                        <input type="text" name="author" id="author" value="{{ old('author') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 @error('author') border-red-500 @enderror">
                        @error('author')
                            <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                        <textarea name="content" id="content" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="px-5 py-2.5 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 transition duration-150">
                            Submit Comment
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layout>