@extends('adminlte.master')

@section('content')
      <div class="ml-3 mt-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Membuat Pertanyaan Baru</h3>
             </div>
              <form role="form" action="/posts" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">title Pertanyaan</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ old('title','') }}">
                    @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>
                  <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text" class="form-control" id="body" placeholder="Enter body" name="body" value="{{ old('body','') }}">
                    @error('body')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div>
              </form>      
        </div>    
      </div>
		
@endsection