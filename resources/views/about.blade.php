@extends('layouts.header')

@section('content')
<div class="container mx-auto p-5">
    <div class="">
        <div class="">
            <h1 class="text-3xl font-bold">{{ $user['name'] }}</h1>
            <div>
            <img src="{{ $user['image'] }}" alt="{{ $user['name'] }}" class="w-32 h-32 rounded-full mr-6"> 
            {{-- <p class="text-gray-600 mt-2">{{ $user['description'] }}</p> --}}
            </div>
        </div>
        <div>
            <h2 class="text-2xl font-semibold mb-4">About me</h2>
            <ul class="list-disc pl-5 text-gray-700">
                <li>{{ $user['description'] }}</li>
            </ul>
        </div>
        <div>
            <h2 class="text-2xl font-semibold mb-4">Skills</h2>
            <ul class="list-disc pl-5 text-gray-700 flex flex-col">
                @foreach ($user['skills'] as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <h2 class="text-2xl font-semibold mb-4">Experience</h2>
            <ul class="list-disc pl-5 text-gray-700 flex flex-col">
                @foreach ($user['experience'] as $exp)
                    <li>{{ $exp }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <h2 class="text-2xl font-semibold mb-4">Education</h2>
            <ul class="list-disc pl-5 text-gray-700 flex flex-col">
                @foreach ($user['education'] as $edu)
                    <li>{{ $edu }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
