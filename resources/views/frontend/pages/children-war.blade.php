@extends('layouts.frontend.master')

@section('title','Save Ukrainian children')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
@endpush

@section('content')
{{-- Page Banner Section --}}
<section>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center my-5 text-light">Children of War</h2>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="lightbox-gallery mt-5">
        <div class="container">
            <div class="row photos">
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-01.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-01.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-02.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-02.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-03.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-03.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-04.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-04.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-05.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-05.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-06.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-06.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-07.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-07.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-08.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-08.jpg')}}"></a>
                </div>
                
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-09.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-09.jpg')}}"></a>
                </div>
                
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-10.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-10.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-11.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-11.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-12.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-12.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-13.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-13.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-14.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-14.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-15.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-15.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-16.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-16.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-17.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-17.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-18.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-18.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-19.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-19.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-20.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-20.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-21.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-21.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-22.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-22.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-23.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-23.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-24.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-24.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-25.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-25.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-26.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-26.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 item">
                    <a href="{{asset('assets/frontend/images/gallery/children-of-war-27.jpg')}}" data-lightbox="photos"><img class="img-fluid" src="{{asset('assets/frontend/images/gallery/children-of-war-27.jpg')}}"></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
@endpush