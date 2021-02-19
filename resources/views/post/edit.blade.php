@extends('layout.main')
@section('content')
    <div>
        <h3>Edit Blog post #{{$post->id}}</h3>
        <div>
        <a href="{{ route('home')}}">Go back home</a>
        </div>
    </div>
    <div>
        <div>
            <div>   
                <form action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label>Title</label>    
                        <input type="text" name="title" class="form-control title" value="{{ $post->title }}" required><br>
                        <label>Blog Content</label><br>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" required>{{ $post-> content}}</textarea><br>
                        <button>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection