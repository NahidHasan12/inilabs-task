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
                            <h4 class="card-title">To-Do Curd - Add People</h4>
                            <a href="{{ route('table') }}" class="btn btn-sm btn-outline-primary">Table</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control">
                                    @error('name')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="number" class="form-label">Number</label>
                                    <input type="text" name="number" class="form-control">
                                    @error('number')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control">
                                    @error('address')
                                       <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="0">Pending</option>
                                        <option value="1">Active</option>
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
                                <div class="text-end">
                                    <button class="btn btn-sm btn-success">Submit</button>
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
