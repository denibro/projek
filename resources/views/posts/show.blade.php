@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-4">
	<div class="row">
          <div class="col-md-12">
        	<div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Data</h3>
             </div>
             	<div class="ml-3 mt-4">
					<h3>Author : {{$post->author->name}}</h3>
					<hr>
				    <h2>Title : {{$post->title}}</h2>
				    <h3>Body : {{$post->body}}</h3>
			    </div> 
		</div>
	</div>	



@endsection