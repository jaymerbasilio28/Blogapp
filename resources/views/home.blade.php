@extends('layout.main')
@section('content')
            <div class="content text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align:center">Quixpress Blog App</h1>

                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('post.create') }}">ADD NEW POST</a>
            </div>

            <div>
                @forelse($posts as $post)
                <div>
            
                    <h3>{{ $post -> title }}</h3>
                </div>
                <div>
                    {{ $post->content }}
                </div>
                <div>
                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                    <form action=" {{ route('post.destroy', $post->id)}} " method="POST">
                        @method('delete')
                        @csrf
                        <button>delete</button>
                    </form>
                </div>
            </div>
            @empty
            <h1>No post yet</h1>
            @endforelse
@endsection