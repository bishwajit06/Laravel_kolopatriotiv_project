@extends('layouts.backend.master')

@section('title','Admin | Dashboard')

@push('css')
<link rel="stylesheet" href="{{asset('assets/backend/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}" required>
                  </div>
                  <div class="form-group">
                    <label>Select Category</label>
                    <select class="select2bs4" multiple="multiple" name="categories[]" data-placeholder="Select Category"
                            style="width: 100%;">
                         @foreach($categories as $category)
                            <option
                                @foreach($post->categories as $postCategory)
                                    {{ $postCategory->id == $category->id ? 'selected' : '' }}
                                @endforeach
                                value="{{ $category->id }}">{{ $category->name }}
                              </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Tag</label>
                    <select class="select2bs4" multiple="multiple" name="tags[]" data-placeholder="Select Tag"
                            style="width: 100%;">
                      @foreach($tags as $tag)
                        <option
                          @foreach($post->tags as $postTag)
                          {{ $postTag->id == $tag->id ? 'selected' : '' }}
                          @endforeach
                          value="{{ $tag->id }}">{{ $tag->name }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload Image</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea id="summernote" class="form-control" rows="8" name="description" placeholder="Enter ...">{{ $post->description }}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@push('js')
<script src="{{asset('assets/backend/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
  
      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endpush