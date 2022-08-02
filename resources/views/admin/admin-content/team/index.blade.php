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
            <th>Position</th>
            <th>Position (BN)</th>
            <th>FB link</th>
            <th>Linkedin link</th>
            <th>Gmail link</th>
            <th>Tag</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($teams as $testimonial)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $testimonial->title_en }}</td>
                <td>{{ $testimonial->title_bn }}</td>
                <td><img src="{{ asset('storage/'.$testimonial->image) }}" alt="" style="width: 100px"></td>
                <td>{{ $testimonial->position_en }}</td>
                <td>{{ $testimonial->position_bn }}</td>
                <td>{{ $testimonial->fb }}</td>
                <td>{{ $testimonial->ln }}</td>
                <td>{{ $testimonial->g }}</td>
                <td>{{ $testimonial->tag }}</td>
                <td><a href="{{ route('team.edit',$testimonial->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('team.destroy',$testimonial->id) }}" method="post">
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
