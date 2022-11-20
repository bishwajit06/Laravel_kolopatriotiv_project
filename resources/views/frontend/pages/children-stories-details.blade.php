@extends('layouts.frontend.master')

@section('title','Save Ukrainian children')

@push('css')

@endpush

@section('content')
<section>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center my-5 text-light">Children's stories Details</h2>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 g-4">
            <div class="col">
                <div class="card h-100 border-0 bg-light">
                    <img src="{{asset('storage/post/'.$post->image)}}" class="card-img-top" alt="Image not found">
                    <div class="card-body">
                        <h5 class="card-title"><td>{{$post->title}}</td></h5>
                        <p>@foreach ($post->categories as $category)
                            {{$category->name}}
                        @endforeach / {{ $post->created_at->diffForHumans() }}</p>
                        <p class="card-text">{!!  $post->description !!}</p>
                        @foreach ($post->tags as $tag)
                            <button type="button" class="btn btn-secondary btn-sm border-1 mt-2">{{$tag->name}}</button>
                        @endforeach
                        <div class="clearfix mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush