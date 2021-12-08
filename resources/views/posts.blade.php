<x-layout>
  

    @foreach($posts as $post)

    <article class="{{ $loop->even ? 'bColor' : '' }}">
        <a href="/posts/{{ $post->slug  }}"><h1>{{ $post->title  }}</h1></a>
        <div>
            {{ $post->excerpt  }}
        </div>
    </article>

    @endforeach

   
</x-layout>