@extends('admin.admin-panel.main')
@section('content')
    <h4>Add Partner and Photos Contents</h4>
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

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Tag</label>
                    <select class="form-control" name="tag">
                        <option value="b">Buyers</option>
                        <option value="dp">Development Partners</option>
                        <option value="i">Institution Partners</option>
                        <option value="sp">Service Photo</option>
                    </select>
                </div>


                @error('tag')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
    </div>
@endsection
