@extends('layouts.frontend.master')

@section('title','Save Ukrainian children')

@push('css')

@endpush

@section('content')
{{-- Home Banner Section --}}
@include('frontend.partial.home-banner')

<section class="my-5 pt-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('assets/frontend/images/950.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">1177</h5>
                  <p class="card-text">children were injured</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('assets/frontend/images/611.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">780</h5>
                  <p class="card-text">children were wounded</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('assets/frontend/images/353.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">397</h5>
                  <p class="card-text">children were killed</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center justify-content-between">
            <div class="col-md-6">
                <h2 class="h1">3 million children in Ukraine and more than 2.2 million children in refugee-hosting countries are now in need of humanitarian assistance</h2>
                <p>The russian invasion has already led to devastating consequences on a scale and pace not seen since World War II, UNICEF notes
                </p>
                <a href="{{route('donate.create')}}" class="btn btn-lg btn-outline-primary fw-bold rounded-1 mb-5">Donation</a>
            </div>
            <div class="col-md-5">
                <img src="{{asset('assets/frontend/images/the-girl-after-the-bombing.jpg')}}" class="img-fluid" alt="Image not found">
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">On February 24, Russia attacked Ukraine</h5>
                  <p class="card-text">along the entire length of the common border, from the territory of Belarus and the occupied Crimea</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">The UN recorded 10,308 victims</h5>
                  <p class="card-text">among the country's civilian population: 4,597 dead and 5,711 wounded</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Most people died from explosive weapons</h5>
                  <p class="card-text">with a wide area of ​​defeat - heavy artillery, rocket systems of salvo fire, missiles and airstrikes</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center justify-content-between">
            <div class="col-md-5">
                <img src="{{asset('assets/frontend/images/targeted-assistance.jpg')}}" class="img-fluid" alt="Image not found">
            </div>
            <div class="col-md-6">
                <h2 class="h1">Targeted assistance to injured children</h2>
                <p>At the expense of your donations, targeted assistance will be provided to children affected by the war, and part of the funds will be transferred to the relevant charitable funds</p>
                <a href="{{route('charity.foundations')}}" class="btn btn-outline-primary fw-bold rounded-1 mb-5">MORE</a>
            </div>
        </div>
    </div>
</section>
<section class="promo-section py-5">
    <div class="container py-5 text-white my-5">
        <div class="my-5 py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="h1">Ukrainian children are losing their homes, security and lives because of the war. The war touched every child in one way or another</h2>
                    <a href="{{route('donate.create')}}" class="btn btn-lg btn-primary fw-bold rounded-1 mt-4">Donation</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center justify-content-between">
            <div class="col-md-6">
                <h2>Orphanage, deportation and sexual violence</h2>
                <ul class="list-group list-group-flush mt-4">
                    <li class="list-group-item d-flex justify-content-between align-items-start py-3">
                      <span class="badge bg-primary mt-1 me-3 rounded-1 p-2">01</span>
                      According to the National Social Service of Ukraine, 1,735 children remain without parental care today
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start py-3">
                        <span class="badge bg-primary mt-1 me-3 rounded-1 p-2">02</span>
                        According to various sources, from 200,000 to half a million children were deported or forcibly removed from Ukraine
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start py-3">
                        <span class="badge bg-primary mt-1 me-3 rounded-1 p-2">03</span>
                        During the full-scale invasion of the russian federation, dozens, if not hundreds, of sexual violence against children are already known
                    </li>
                  </ul>
            </div>
            <div class="col-md-5">
                <img src="{{asset('assets/frontend/images/violence.jpg')}}" class="img-fluid" alt="Image not found">
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="ratio ratio-16x9">
                    <iframe src="{{asset('assets/frontend/video/Ми боремося за майбутнє наших дітей!.mp4')}}" title="YouTube video" allowfullscreen></iframe>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush