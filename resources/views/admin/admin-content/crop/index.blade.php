@extends('admin.admin-panel.main')

@section('content')
    <h4>View All Crops Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Title(BN)</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($crops as $testimonial)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $testimonial->title_en }}</td>
                <td>{{ $testimonial->title_bn }}</td>
                <td><img src="{{ asset('storage/'.$testimonial->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('crop.edit',$testimonial->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('crop.destroy',$testimonial->id) }}" method="post">
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
