@extends('layouts.frontend.master')

@section('title','Save Ukrainian children')

@push('css')

@endpush

@section('content')
{{-- Page Banner Section --}}
<section>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center my-5 text-light">Charity Foundations</h2>
            </div>
        </div>
    </div>
</section>
<section class="my-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center mb-5">The main charitable funds to which your donations will be distributed:</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-5">
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('assets/frontend/images/logo/dity-help-logo.png')}}" class="card-img-top" alt="Image not found">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('assets/frontend/images/logo/golosy-ditej-logo.png')}}" class="card-img-top" alt="Image not found">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('assets/frontend/images/logo/klub-dobrodijiv-logo.png')}}" class="card-img-top" alt="Image not found">
              </div>
            </div>
            <div class="col">
                <div class="card h-100">
                  <img src="{{asset('assets/frontend/images/logo/ridni-logo.png')}}" class="card-img-top" alt="Image not found">
                </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="{{asset('assets/frontend/images/logo/tabletochki-logo.png')}}" class="card-img-top" alt="Image not found">
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="{{asset('assets/frontend/images/logo/tvoya-opora-logo.png')}}" class="card-img-top" alt="Image not found">
            </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush