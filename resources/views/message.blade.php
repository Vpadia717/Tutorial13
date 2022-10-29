<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <!--bootstrap cdn js-->
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ url('js/bootstrap.js') }}"></script>

</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center"><?= $v1 ?></h2>
        <div class="row">
            <div class="d-flex justify-content-center">
                <a href="{{ url('/formdata') }}" class="btn btn-warning text-white">View Data</a>
            </div>
        </div>
    </div>
</body>

</html>
