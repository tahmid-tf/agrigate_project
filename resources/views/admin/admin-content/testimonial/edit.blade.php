@extends('admin.admin-panel.main')

@section('content')
    <h4>Edit Photo Contents</h4>
    <hr>

    <div>
        <form action="{{ route('testimonial.update',$testimonial->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ $testimonial->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    <textarea name="content" id="" cols="30" rows="10"
                              class="@error('content') is-invalid @enderror form-control"
                              placeholder="Enter achievement content">{{ $testimonial->content }}</textarea>
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
