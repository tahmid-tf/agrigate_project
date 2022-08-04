@extends('admin.admin-panel.main')

@section('content')
    <h4>View All News Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Title(BN)</th>
            <th>Content(BN)</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($news as $testimonial)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $testimonial->title_en }}</td>
                <td>{!! $testimonial->content_en !!}</td>
                <td>{{ $testimonial->title_bn }}</td>
                <td>{!! $testimonial->content_bn !!}</td>
                <td><img src="{{ asset('storage/'.$testimonial->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('news.edit',$testimonial->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('news.destroy',$testimonial->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
