@extends('main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление работника</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('workers.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                <label>Фамилия</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Фамилия"
                                       value="{{ old('last_name') }}">
                                @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <label>Имя</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Имя"
                                       value="{{ old('first_name') }}">
                                @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <label>Отчество</label>
                                <input type="text" class="form-control" name="patronymic" placeholder="Отчество"
                                       value="{{ old('patronymic') }}">
                                @error('patronymic')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <label>Возраст</label>
                                <input type="text" class="form-control" name="age" placeholder="Возраст"
                                       value="{{ old('age') }}">
                                @error('age')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <label>Стаж работы</label>
                                <input type="text" class="form-control" name="work_experience" placeholder="Стаж работы"
                                       value="{{ old('work_experience') }}">
                                @error('work_experience')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <label>Фото в base64</label>
                                <input type="text" class="form-control" name="photo" placeholder="Фото в base64"
                                       value="{{ old('photo') }}">
                                @error('photo')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <label>Средняя зарплата в руб.</label>
                                <input type="text" class="form-control" name="average_salary" placeholder="Средняя зарплата в руб."
                                       value="{{ old('average_salary') }}">
                                @error('average_salary')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
