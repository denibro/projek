@extends('adminlte.master')

@section('content')
      <div class="ml-3 mt-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan</h3>
             </div>
              <form role="form" action="/posts/{{$post->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">title Pertanyaan</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ old('title', $post->title) }}">
                   </div>
                  <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text" class="form-control" id="body" placeholder="Enter body" name="body" value="{{ old('body', $post->body) }}">
                  </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
              </form>      
        </div>    
      </div>
		
@endsection