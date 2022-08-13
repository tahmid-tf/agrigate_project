@extends('admin.admin-panel.main')

@section('content')
    <h4>Edit Banner Contents</h4>
    <hr>

    <div>
        <form action="{{ route('banner.update',$banner->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title (BN)</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_bn"
                           class="form-control @error('title_bn') is-invalid @enderror" value="{{ $banner->title_bn }}">
                </div>

                @error('title_bn')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_en"
                           class="form-control @error('title_en') is-invalid @enderror" value="{{ $banner->title_en }}">
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
{{--                              placeholder="Enter achievement content">{{ $banner->content_bn }}</textarea>--}}
{{--                </div>--}}

{{--                @error('content_bn')--}}
{{--                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
{{--                @enderror--}}


{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Enter Content</label>--}}
{{--                    <textarea name="content_en" id="" cols="30" rows="10"--}}
{{--                              class="@error('content_en') is-invalid @enderror form-control"--}}
{{--                              placeholder="Enter achievement content">{{ $banner->content_en }}</textarea>--}}
{{--                </div>--}}

{{--                @error('content_en')--}}
{{--                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
{{--                @enderror--}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Banner tag</label>
                    <select class="form-control" name="banner">
                        <option value="home" @if($banner->banner == 'home') selected @endif>Home</option>
                        <option value="solution_for_farmer"
                                @if($banner->banner == 'solution_for_farmer') selected @endif>Solution for farmer
                        </option>

                        <option value="source_from_us"  @if($banner->banner == 'source_from_us') selected @endif>Source from us</option>
                        <option value="work_with_us"  @if($banner->banner == 'work_with_us') selected @endif>Work with us</option>
                        <option value="grow_with_us"  @if($banner->banner == 'grow_with_us') selected @endif>Grow with us</option>

                        <option value="processing_and_trade" @if($banner->banner == 'processing_and_trade') selected @endif>Processing and Trade</option>


                        <option value="agrigate_center" @if($banner->banner == 'agrigate_center') selected @endif>
                            Agrigate Center
                        </option>
                        <option value="about" @if($banner->banner == 'about') selected @endif>About</option>
                        <option value="app" @if($banner->banner == 'app') selected @endif>App</option>
                        <option value="team" @if($banner->banner == 'team') selected @endif>Team</option>
                        <option value="financial_inclusion"
                                @if($banner->banner == 'financial_inclusion') selected @endif>Financial Inclusion
                        </option>
                        <option value="career" @if($banner->banner == 'career') selected @endif>Career</option>
                        <option value="news" @if($banner->banner == 'news') selected @endif>News</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
