@extends('layouts.frontend.master')

@section('title','Save Ukrainian children')

@push('css')

@endpush

@section('content')
<section>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center my-5 text-light">About Us</h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="{{asset('assets/frontend/images/kolopatriotiv-logo.png')}}" class="img-fluid my-5" alt="Image not found">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>The "Kolo Patriotiv" project was founded in 2008. Its main goal is to unite Ukrainians around the ideas of independence, freedom and the European future of our country. Initially, the project developed as a social network. Today it is an information resource.</p>

                <p>Ukraine begins with you - it is with this slogan that we urge Ukrainians not to be indifferent and to do everything for the independence of our country. And now - for the sake of victory over the ancient enemy, who is once again trying to destroy our nation.</p>
                    
                <p>Our goal now is to fight on the information front with fakes of Russian propaganda and to facilitate our victory over the occupier as soon as possible!</p>
                    
                <p>Our media holding includes two more projects:</p>
                <img src="{{asset('assets/frontend/images/kinochart-logo.png')}}" class="img-fluid my-5" alt="Image not found">
                <p>Index of Ukrainian cinema.</p>
                <p>The project was created to support the Ukrainian film industry and aims to become the largest database of the Ukrainian film industry.</p>
                <img src="{{asset('assets/frontend/images/tezy-pro-muzyku-logo1.png')}}" class="img-fluid my-5" alt="Image not found">
                <p>Project about the development of Ukrainian show business.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush