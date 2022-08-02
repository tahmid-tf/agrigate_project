@extends('admin.admin-panel.main')

@section('content')
    <h4>Edit Photo Contents</h4>
    <hr>

    <div>
        <form action="{{ route('buyer.update',$buyer->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
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
                        <option value="b" @if($buyer->tag == 'b') selected @endif>Buyers</option>
                        <option value="dp" @if($buyer->tag == 'dp') selected @endif>Development Partners</option>
                        <option value="i" @if($buyer->tag == 'i') selected @endif>Institution Partners</option>
                        <option value="sp" @if($buyer->tag == 'sp') selected @endif>Service Photo</option>
                    </select>
                </div>



                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
