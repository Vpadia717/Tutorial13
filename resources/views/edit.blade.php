<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updation Form</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <!--bootstrap cdn js-->
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ url('js/bootstrap.js') }}"></script>

</head>

<body>

    <div class="container mt-4">
        <h2 class="text-dark text-center">Updation Form</h2>
        <div class="row">

            <div class="col-lg-10 mb-3">
                <a href="{{ url('/formdata') }}" class="btn btn-success">View Data</a>
            </div>

            <div class="col-lg-12">
                <form action="{{ url('/edit') }}" method="post">
                    @csrf
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="id" name="id" placeholder="id" value="{{ $data->id }}">

                        <label for="title" class="form-label">Title</label>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $data->title }}">
                        </div>
                        <div class="mt-1 mb-1 text-danger">
                            <span>
                                @error('title')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <label for="small_desc" class="form-label">Small Description</label>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="small_desc" name="small_desc" placeholder="Small Description" value="{{ $data->small_desc }}">
                        </div>
                        <div class="mt-1 mb-1 text-danger">
                            <span>
                                @error('small_desc')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <label for="detail_desc" class="form-label">Detail Description</label>
                        <div class="mb-1">
                            <input type="text" class="form-control" id="detail_desc" name="detail_desc" placeholder="Detail Description" value="{{ $data->detail_desc }}">
                        </div>
                        <div class="mt-1 mb-1 text-danger">
                            <span>
                                @error('detail_desc')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger text-white" onclick="history.back()">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>