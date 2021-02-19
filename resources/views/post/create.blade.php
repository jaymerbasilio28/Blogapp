@extends('layout.main')
@section('content')
    <div>
        <div>
            <div>   
                <form action="{{ route('post.store')}}" method="POST">
                    @csrf
                    <div>
                        <label>Title</label>    
                        <input type="text" name="title" class="form-control title" required><br>
                        <label>Blog Content</label><br>
                        <textarea name="content" id="content" cols="30" rows="10" required></textarea><br>
                        <input type="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection