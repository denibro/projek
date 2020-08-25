@extends('adminlte.master')

@section('content')
  <div class="ml-3 mt-4">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">Tabel Pertanyaan</h2>
              </div>
              <!-- /.card-header -->
              <div class="mt-2">
                @if(session('success'))
                  <div class="alert alert-success">
                    {{ session('success')}}
                  </div>
                @elseif(session('berhasil'))
                  <div class="alert alert-danger">
                    {{ session('berhasil')}}
                  </div>
                @endif
              </div>
              <div class="card-body">

                <a href="/posts/create" class="btn btn-primary mb-2 btn btn-sm">Buat Pertanyaan</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr align="center">
                      <th style="width: 10px">No</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($posts as $key => $post)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{ $post->title}}</td>
                      <td>{{ $post->body}}</td>
                      <td style="display:flex">
                        <a href="/posts/{{$post->id}}" class="btn btn-secondary btn btn-sm">Show</a>&nbsp;&nbsp;
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning btn btn-sm">Edit</a>&nbsp;&nbsp;
                        <form action="/posts/{{$post->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" value="Delete" class="btn btn-danger btn btn-sm">
                        </form>
                        
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4" align="center">Tidak ada Data</td>
                    </tr>
                    @endforelse
                  </tbody>
 
                </table>
              </div>

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    </div>        
  </div>
  
@endsection