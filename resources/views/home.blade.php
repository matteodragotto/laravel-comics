@extends("layouts.master")

@section('title')
    Homepage
@endsection

@php
    $comics = config("comics");
@endphp

@section("main")

<div class="jumbo">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron-dc">
</div>

<div class="container pt-5 position-relative">
    <div class="row row-cols-6">
        @foreach ($comics as $comic)
        <div class="col">
            <x-card>
                <x-slot:image>{{$comic['thumb']}}</x-slot:image>
                <x-slot:title>{{strtoupper($comic['series'])}}</x-slot:title>
                <x-slot:price>{{$comic['price']}}</x-slot:price>
            </x-card>
        </div>
        @endforeach
       
    </div>
    <div class="bg-primary text-light fw-bold fs-4 py-2 px-4 position-absolute top-0 start-0 translate-middle-y">CURRENT SERIES</div>
    <div class="container text-center">
        <button class="btn btn-primary rounded-0 px-5">LOAD MORE</button>
    </div>
</div>

<div class="middle-nav">
    
</div>





@endsection