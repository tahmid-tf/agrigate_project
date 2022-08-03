@extends('admin.admin-panel.main')

@section('content')
    <h4>View All Development Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($buyers as $testimonial)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td><img src="{{ asset('storage/'.$testimonial->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('buyer.edit',$testimonial->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('buyer.destroy',$testimonial->id) }}" method="post">
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
