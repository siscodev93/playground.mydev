@extends('layouts.app')

@section('content')
<section class='bg-white w-full h-full flex items-center justify-center'>

    <div class="container mx-4 p-8 lg:w-1/4 text-center border-2 rounded shadow-2xl">
        <h1 class='text-2xl my-4'>Account Verification</h1>

        <p class="leading-6">Thank you for creating your account with us {{session()->get('user')->name}}, to login please verify your email</p>

    </div>
</section>

@endsection
