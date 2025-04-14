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

<div class="middle-nav bg-primary py-5 mt-5 overflow-auto">
  <div class="container d-flex justify-content-between">

    <div class="blue-nav d-flex justify-content-center align-items-center gap-2">

        <div class="nav-img">
            <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="buy-comics-digital-comics">
        </div>

        <p class="fw-medium text-light m-0">DIGITAL COMICS</p>
    </div>

    <div class="blue-nav d-flex justify-content-center align-items-center gap-2">

        <div class="nav-img">
            <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="buy-comics-merchandise">

        </div>

        <p class="fw-medium text-light m-0">DC MERCHANDISE</p>
    </div>

    <div class="blue-nav d-flex justify-content-center align-items-center gap-2">

        <div class="nav-img">
            <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="buy-comics-subscriptions">
        </div>

        
        <p class="fw-medium text-light m-0">SUBSCRIPTION</p>
    </div>

    <div class="blue-nav d-flex justify-content-center align-items-center gap-2">

        <div class="nav-img">
            <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="buy-comics-shop-locator">

        </div>

        <p class="fw-medium text-light m-0">COMIC SHOP LOCATOR</p>
    </div>

    <div class="blue-nav d-flex justify-content-center align-items-center gap-2">

        <div class="nav-img">
            <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="buy-dc-power-visa">
        </div>
        <p class="fw-medium text-light m-0">DC POWER VISA</p>
        
    </div>

  </div>
</div>





@endsection