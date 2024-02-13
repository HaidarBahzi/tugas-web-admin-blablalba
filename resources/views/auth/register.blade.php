@extends('layouts.main')

@section('content')



    <h1>REGISTER</h1>
    <!-- Email input -->

    <form action="/register" method="post" class="form-signin">
        @csrf
        <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control" name="name"/>
            <label class="form-label" for="form2Example1">Full name</label>
        </div>

        <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" name="email"/>
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="password" class="form-control" name="password"/>
            <label class="form-label" for="form2Example2">Password</label>
        </div>


        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
    </form>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Already a member? <a href="/login">Login</a></p>
    </div>
@endsection
