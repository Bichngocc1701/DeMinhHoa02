<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>EditStudentInformation</title>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center; padding-top: 50px">Edit student information</h1>
        <form class="row g-3" method="POST" action="{{ route('update', [$students->id]) }}">
            <div class="col-md-12 mt-5">
                <label for="inputId" class="form-label"><b>ID</b></label>
                <input type="text" class="form-control" id="ID" name="id" value="{!! $students->id !!}"
                    readonly>
            </div>
            <div class="col-md-12">
                <label for="inputFullname" class="form-label"><b>Full Name</b></label>
                <input type="text" class="form-control" id="Fullname" name="fullname"
                    value="{!! $students->fullname !!}">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label"><b>Address</b></label>
                <input type="text" class="form-control" id="Address" name="address"
                    value="{!! $students->address !!}">
            </div>
            <div class="col-md-12">
                <label for="inputBirthday" class="form-label"><b>Birthday</b></label>
                <input type="date" class="form-control" name="birthday" value="{!! $students->birthday !!}">
            </div>

            @csrf

            @method('PUT')
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><b>Save</b></button>
            </div>
    </div>
    </form>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>F
</body>

</html>
