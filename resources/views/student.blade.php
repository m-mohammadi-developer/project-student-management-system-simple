<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Student management system For my Self</title>
</head>

<body>

    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Sdtudent Management System</h1>
        </div>
    </div>

    

    @if ($layout == 'index')

        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-7">
                        @include('studentslist')
                    </section>
                </div>
            </div>
        </div>

    @elseif($layout == 'create')

        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title">Enter Student Information and Save It.</div>
                            <hr>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="firstName" type="text" class="form-control"
                                        placeholder="Enter the first name">
                                </div>


                                <div class="form-group">
                                    <label>second Name</label>
                                    <input name="secondName" type="text" class="form-control"
                                        placeholder="Enter second name">
                                </div>

                                <div class="form-group">
                                    <label>Age</label>
                                    <input name="age" type="integer" class="form-control" placeholder="Enter the Age">
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input name="speciality" type="text" class="form-control"
                                        placeholder="Enter Sepeciality">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">

                            </form>
                        </div>

                    </div>

                </section>
            </div>
        </div>

    @elseif($layout == 'show')

        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>

    @elseif($layout == 'edit')

        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card-title">Update Student Information and Save It.</div>
                            <hr>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <form action="{{ route('update', ['id' => $student->id]) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input name="cne" type="text" class="form-control" value="{{ $student->cne }}"
                                        placeholder="Enter cne">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="firstName" type="text" class="form-control"
                                        value="{{ $student->firstName }}" placeholder="Enter the first name">
                                </div>


                                <div class="form-group">
                                    <label>second Name</label>
                                    <input name="secondName" type="text" class="form-control"
                                        value="{{ $student->secondName }}" placeholder="Enter second name">
                                </div>

                                <div class="form-group">
                                    <label>Age</label>
                                    <input name="age" type="text" class="form-control" value="{{ $student->age }}"
                                        placeholder="Enter the Age">
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input name="speciality" type="text" class="form-control"
                                        value="{{ $student->speciality }}" placeholder="Enter Sepeciality">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">

                            </form>

                        </div>

                    </div>



                </section>
            </div>
        </div>

    @endif




    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
