@extends('admin.admin-panel.main')
@section('content')
    <h4>Add Banner Contents</h4>
    <hr>

    <div>
        <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title (BN)</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_bn"
                           class="form-control @error('title_bn') is-invalid @enderror">
                </div>


                @error('title_bn')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_en"
                           class="form-control @error('title_en') is-invalid @enderror">
                </div>

                @error('title_en')
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

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Enter Content (BN)</label>--}}
{{--                    <textarea name="content_bn" id="" cols="30" rows="10"--}}
{{--                              class="@error('content_bn') is-invalid @enderror form-control"--}}
{{--                              placeholder="Enter achievement content"></textarea>--}}
{{--                </div>--}}

{{--                @error('content_bn')--}}
{{--                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
{{--                @enderror--}}


{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Enter Content</label>--}}
{{--                    <textarea name="content_en" id="" cols="30" rows="10"--}}
{{--                              class="@error('content_en') is-invalid @enderror form-control"--}}
{{--                              placeholder="Enter achievement content"></textarea>--}}
{{--                </div>--}}

{{--                @error('content_en')--}}
{{--                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
{{--                @enderror--}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Banner tag</label>
                    <select class="form-control" name="banner">
                        <option value="home">Home</option>
                        <option value="solution_for_farmer">Solution for farmer</option>

                        <option value="source_from_us">Source from us</option>
                        <option value="work_with_us">Work with us</option>
                        <option value="grow_with_us">Grow with us</option>

                        <option value="processing_and_trade">Processing and Trade</option>


                        <option value="agrigate_center">Agrigate Center</option>
                        <option value="about">About</option>
                        <option value="app">App</option>
                        <option value="team">Team</option>
                        <option value="financial_inclusion">Financial Inclusion</option>
                        <option value="career">Career</option>
                        <option value="news">News</option>
                    </select>
                </div>


                @error('banner')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </form>
    </div>
@endsection
