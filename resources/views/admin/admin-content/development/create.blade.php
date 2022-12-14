@extends('admin.admin-panel.main')
@section('content')
    <h4>Add Development Contents</h4>
    <hr>

    <div>
        <form action="{{ route('buyer.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>


                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
    </div>
@endsection
