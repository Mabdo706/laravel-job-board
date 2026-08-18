<x-layout :title="$pageTitle">
    <h2>Blog</h2>
    @foreach ($posts as $post)
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <h2 class="text-1xl">{{ $post->author }}</h2>
        <p>{{ $post->body }}</p>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->contet }}{{ $comment->author }}</li>
            @endforeach
        </ul>
    @endforeach
</x-layout>