@extends('layouts.frontend.master')

@section('title','Save Ukrainian children')

@push('css')

@endpush

@section('content')
<section>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="text-center my-5 text-light">Children's stories</h2>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($data as $row)
                <div class="col">
                    <div class="card h-100 border-0 bg-light">
                        <img src="{{asset('storage/post/'.$row->image)}}" class="card-img-top" alt="Image not found">
                        <div class="card-body">
                            <a href="{{route('children.stories.details',$row->slug)}}" style="text-decoration: none;"><h5 class="card-title"><td>{{$row->title}}</td></h5></a>
                            <p>@foreach ($row->categories as $category)
                                {{$category->name}}
                            @endforeach / {{ $row->created_at->diffForHumans() }}</p>
                            <p class="card-text">{{substr(strip_tags($row->description), 0, 170)}}</p>
                            @foreach ($row->tags as $tag)
                                <button type="button" class="btn btn-secondary btn-sm border-1 mt-2">{{$tag->name}}</button>
                            @endforeach
                            <div class="clearfix mt-3"></div>
                            <a href="{{route('children.stories.details',$row->slug)}}" class="btn btn-primary rounded-1">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush