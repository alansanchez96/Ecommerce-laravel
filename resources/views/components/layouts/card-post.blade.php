@props(['post'])
<article class="mb-8 bg-stone-200 overflow-hidden shadow-lg rounded-xl">
    <img class="w-full h-72 " src="{{ Storage::url($post->image->url) }}">

    <div class="px-6 py-4">
        <h2 class="font-bold text-xl mb-2">
            <a href="{{ route('post.show', $post->slug) }}">
                {{ $post->title }}
            </a>
        </h2>

        <div class="text-gray-700 text-base">
            {{ $post->extract }}
        </div>
    </div>

    <div class="px-6 pt-3 pb-5">
        @foreach ($post->tags as $tag)
            <a href="#"
                class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{ $tag->name }}</a>
        @endforeach
    </div>
</article>
