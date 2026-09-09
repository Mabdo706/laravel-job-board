<x-layout title="$pageTitle">
    <form method="POST" action="/blog/{{ $post->id }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $post->id }}" />

        <div class="space-y-12">
            <!-- تم حذف border-b و pb-12 من هنا -->
            <div>
                <h1 class="text-base/7 font-bold text-gray-900">Edit Post</h1>
                <p class="mt-1 text-sm/6 text-gray-600">Use this form to update post data for the blog.</p>

                <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Title -->
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">
                            Title
                        </label>
                        <div class="mt-2">
                            <input
                                id="title"
                                type="text"
                                name="title"
                                value="{{ old('title', $post->title) }}"
                                autocomplete="given-name"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 {{ $errors->has('title') ? 'outline-red-500 focus:outline-red-600' : 'outline-gray-300 focus:outline-indigo-600' }} sm:text-sm/6"
                            />
                        </div>
                        @error('title')
                        <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    

                    <!-- author -->
                    <div class="sm:col-span-3">
                        <label for="author" class="block text-sm/6 font-medium text-gray-900">
                            author
                        </label>

                        <div class="mt-2">
                            <input
                                id="author"
                                type="text"
                                name="author"
                                value="{{ old('author', $post->author) }}"
                                autocomplete="family-name"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 {{ $errors->has('author') ? 'outline-red-500 focus:outline-red-600' : 'outline-gray-300 focus:outline-indigo-600' }} sm:text-sm/6"
                            />
                        </div>
                        @error('author')
                        <span class="mt-4 text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    

                    <!-- Content -->
                    <div class="col-span-full">
                        <label for="content" class="block text-sm/6 font-medium text-gray-900">
                            Content
                        </label>

                        <div class="mt-2">
                            <textarea
                                id="content"
                                name="content"
                                rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 {{ $errors->has('content') ? 'outline-red-500 focus:outline-red-600' : 'outline-gray-300 focus:outline-indigo-600' }} sm:text-sm/6">{{ old('content', $post->content) }}</textarea>
                        </div>

                        <p class="mt-1 text-sm/6 text-gray-600">
                            Write a few sentences about the article.
                        </p>
                        @error('content')
                        <span class="mt-4 text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Is Published -->
        <div class="mt-6">
            <div class="flex items-center gap-x-3">
                <input 
                    id="is_published" 
                    name="published" 
                    type="checkbox" 
                    value="1"   {{ old('published') || (!old() && $post->published)  ? 'checked' : ''}}  
                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600 accent-indigo-600 cursor-pointer"
                >
                <div class="text-sm leading-6">
                    <label for="is_published" class="font-medium text-gray-900 cursor-pointer">Is Published?</label>
                    <p id="is-published-description" class="text-gray-500">Do you want it published or saved as draft.</p>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-4">
            <a href="/blog" class="text-sm font-semibold leading-6 text-gray-900 hover:text-gray-600">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save
            </button>
        </div>
    </form>
</x-layout>