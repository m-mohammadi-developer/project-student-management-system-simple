@extends('student.struct.main')



@section('body')

    
    @include('student.navbar')

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
                        @include('student.students-list')
                    </section>
                </div>
            </div>
        </div>

    @elseif($layout == 'create')

        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('student.students-list')
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
                    @include('student.students-list')
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>

    @elseif($layout == 'edit')

        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('student.students-list')
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

@endsection

