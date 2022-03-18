<x-layout>
    <x-slot name="title">
        Dream List
    </x-slot>

    <h1>
        <span>Dream List</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
    <ul>
        @forelse($posts as $post)
            <li>
                <a href="{{ route('posts.show',$post) }}">
                {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse
    </ul>
</x-layout>
