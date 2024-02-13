@extends('layouts.main')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{session('success')}}
        </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-failed col-lg-12" role="alert">
            {{session('loginError')}}
        </div>
    @endif


    <h1>LOGIN</h1>

    <form action="/login" method="post">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" name="email"/>
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control"/>
            <label class="form-label" for="form2Example2">Password</label>
        </div>


        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="/register">Register</a></p>
    </div>
@endsection
