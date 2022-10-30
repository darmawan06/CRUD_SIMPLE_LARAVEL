@extends('layouts.master')


@section('title',"CRUD SIMPLE - HOME")


@section('header')
	@include('components.navbar')
@endsection

@section('contents')
	<section id="tableUsers">
		<div class="container px-3 px-md-5">
            @if($messageSuccess = Session::get('success'))
			<div class="alert alert-primary" role="alert">{{$messageSuccess}}</div>
            @endif
			<div class="row d-flex">
				<table class="table text-center p-0 mt-4">
					<tr class="bg-success text-white">
						<th>No</th>
						<th>Email</th>
						<th>Password</th>
						<th>Aksi</th>
					</tr>
					@foreach ($user as $item)   
								
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$item->email}}</td>
						<td>{{$item->password}}</td>
						<td>
							<form action="{{route('users.destroy', $item->id)}}" method="POST">
								<a href="{{route('users.edit', $item->id)}}" class="btn btn-warning">Edit</a>
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</section>
@endsection

