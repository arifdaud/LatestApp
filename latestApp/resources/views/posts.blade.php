<x-layout>
@foreach ($posts as $post)
    <article class="{{ $loop->even ? 'foobar' : ''}}">
        <h1>
            <a href ="/posts/{{ $post->slug }}">
              <!-- using .blade -->
              {{ $post->title }}
            <!-- normal -->           
        </a>            
        </h1>
        <div>
        {{ $post->excerpt }}        
        </div>
    </article>
    @endforeach
</x-layout>
