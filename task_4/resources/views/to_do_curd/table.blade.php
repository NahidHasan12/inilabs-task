<html>
    <head>
        <title>TOdo Curd</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto mt-5">

                    @if(session()->has('success'))
                        <div style="font-size:15px" class="badge d-block bg-success">{{ session()->get('success') }}</div>
                    @elseif (session()->has('error'))
                        <div style="font-size:15px" class="badge d-block bg-dange">{{ session()->get('error') }}</div>
                    @endif

                    <div class="card border border-danger mt-1">
                        <div class="card-header border border-danger d-flex justify-content-between">
                            <h4 class="card-title">To-Do Curd - List People</h4>
                            <a href="{{ route('add_people') }}" class="btn btn-sm btn-outline-primary">Add People</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key=>$item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->number }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @elseif ($item->status == 0)
                                                    <span class="badge bg-danger">Pending</span>
                                                @endif
                                            </td>
                                            <td><img width="50px" height="45px" src="{{ asset('image/'.$item->image) }}" alt="{{ $item->image }}">
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ route('edit',$item->id) }}" class="btn btn-sm btn-outline-success m-1">edit</a>
                                                <a href="{{ route('delete',$item->id) }}" class="btn btn-sm btn-outline-danger m-1">delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-danger">No Data Found On Database</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
