@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Data</h3>
             </div>
             	<div class="ml-3 mt-4">
				    <h1>Title : {{$post->title}}</h1>
				    <br>
				    <h3>Body : {{$post->body}}</h3>
			    </div> 
		</div>
	</div>	



@endsection