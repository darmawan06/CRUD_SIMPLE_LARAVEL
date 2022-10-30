
@extends('layouts.master')


@section('title',"CRUD SIMPLE - EDIT")

@section('header')
	@include('components.navbar')
@endsection

@section('contents')
    <section id="formCreateUser">
        <div class="container">
            <div class="row d-flex">
                <div class="col-6 mx-auto py-4 bg-primary">
                    <form action="{{route('users.update', $user->id)}}" method="POST" class="row d-flex flex-column">
                        @csrf
                        @method("PUT")

                        <div class="col-6 m-auto d-flex flex-column">
                            <h5 class="text-center text-white font-bold">UPDATE DATA DULU SINI</h5>
                        </div>
                        <div class="col-6 m-auto d-flex flex-column">
                            <label class="text-white">Email</label>
                            <input type="email" name="email" required value="{{$user->email}}" />
                        </div>
                
                        <div class="col-6 m-auto d-flex flex-column">
                            <label class="text-white">Password</label>
                            <input type="password" name="password" required value="{{$user->password}}" />
                        </div>
                
                        <div class="col-6 m-auto d-flex flex-column py-4">
                            <button type="submit" class="btn bg-white">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

@endsection


