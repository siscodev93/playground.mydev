@extends('layouts.app')

@section('content')

<section class='bg-white w-full h-full flex items-center justify-center'>

    <div class="container mx-4 p-8 lg:w-1/4 text-center border-2 rounded shadow-2xl">
        <h1 class='text-2xl my-4'>Account Login</h1>
        <form action="">
            <div class="input-group flex flex-col text-left my-6">
                <label for="">Username or Email:</label>
                <input type="text" class='p-2 border-2' placeholder="username">
            </div>
            <div class="input-group flex flex-col text-left my-6">
                <label for="">Password:</label>
                <input type="password" class='p-2 border-2' placeholder="password">
            </div>
            <div class="input-group flex flex-col text-left my-6">
                <input type="submit" class='p-2 border-2 bg-blue-700 text-white transition duration-300 hover:shadow-md' value="Sign In">
            </div>
        </form>

    </div>
</section>

@endsection
