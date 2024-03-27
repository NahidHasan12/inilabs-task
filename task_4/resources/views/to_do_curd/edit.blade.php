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
                            <h4 class="card-title">To-Do Curd - Edit People</h4>
                            <a href="{{ route('table') }}" class="btn btn-sm btn-outline-danger">Back to List</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update',$data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-2">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" value="{{ $data->name }}" name="name" class="form-control">
                                    @error('name')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="number" class="form-label">Number</label>
                                    <input type="text" value="{{ $data->number }}" name="number" class="form-control">
                                    @error('number')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" value="{{ $data->address }}" name="address" class="form-control">
                                    @error('address')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option {{ $data->status == 0 ? 'selected' : '' }} value="0">Pending</option>
                                        <option {{ $data->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                    </select>
                                    @error('status')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @error('image')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <img width="100px" height="80px" src="{{ asset('image/'.$data->image) }}" alt="{{ $data->image }}">
                                </div>
                                <div class="text-end">
                                    <button class="btn btn-sm btn-success">Save & Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
