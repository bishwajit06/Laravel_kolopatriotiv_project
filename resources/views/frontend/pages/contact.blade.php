@extends('layouts.frontend.master')

@section('title','Save Ukrainian children')

@push('css')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
<section>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center my-5 text-light">Contact Us</h2>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 g-4">
            <div class="col-md-5">
                <img src="{{asset('assets/frontend/images/contact.jpg')}}" class="card-img-top" alt="Image not found">
            </div>
            <div class="col-md-7">
                <h3>Fill free to contact us</h3>
                <hr>
                <form action="{{route('admin.contact.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message*</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 rounded-1">SUBMIT</button>
                </form>
            </div>
            
        </div>
    </div>
</section>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
    <script>
        @if($errors->any())
        @foreach($errors->all() as $error)
        toastr.error('{{ $error }}','Error',{
            closeButton:true,
            progressBar:true,
        });
        @endforeach
        @endif
    </script>
@endpush