<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <!--bootstrap cdn js-->
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ url('js/bootstrap.js') }}"></script>

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>

    <div class="container mt-4">
        <h2 class="text-center">User Data :</h2>
        <div class="row">
            <div class="col-lg-10">
                <a href="{{ url('/') }}" class="btn btn-danger">Back</i></a>
            </div>
            <div class="col-lg-2">
                <a href="{{ url('/form') }}" class="btn btn-success">Add new user</a>
            </div>

            <table class="table table-striped mt-3 p-5">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">id</th>
                        <th scope="col" class="text-center">Title</th>
                        <th scope="col" class="text-center">Small Description</th>
                        <th scope="col" class="text-center">Detail Description</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($v as $i)
                        <tr>
                            <th scope="row">{{ $i->id }}</th>
                            <td class="text-center">{{ $i->title }}</td>
                            <td class="text-center">{{ $i->small_desc }}</td>
                            <td class="text-center">{{ $i->detail_desc }}</td>
                            <td class="text-center"><a href="formdata/edit/{{ $i->id }}"
                                    class="btn btn-primary m-1">Edit</a>
                                <a href="/destroy/{{ $i->id }}" class="btn btn-danger m-1">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
