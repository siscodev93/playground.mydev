@extends('layouts.app')

@section('content')

<header class='bg-slate-400 w-full h-full flex items-center bg-hero-bg bg-cover bg-center'>

    <div class="container mx-4 p-8 lg:w-1/2">
        <h1 class="text-4xl my-6">Playground, An All You Can Code Project</h1>
        <p class='w-full'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat blanditiis non sed doloremque accusamus? Veritatis distinctio, asperiores dolor aliquam, at qui quisquam eum dolorum iusto est illum mollitia facilis vitae.</p>
        <div class="flex flex-row my-6 space-x-4">
            <a href="#" class='border-slate-800 border rounded-lg px-6 py-2'>Get Started</a>
            <a href="#" class='border-slate-800 bg-slate-800 text-white border rounded-lg px-6 py-2'>Learn More</a>
        </div>
    </div>
</header>

@endsection
