@extends('main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Сотрудники</h1>
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
                    <div class="col-1 mb-3">
                        <a href="{{ route('workers.create') }}" class="btn btn-block btn-primary">Добавить</a>
                    </div>
                    <div class="col-1 mb-3">
                        <a href="{{ route('workers.home') }}" class="btn btn-block btn-primary">На главную</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Фамилия</th>
                                        <th>Имя</th>
                                        <th>Отчество</th>
                                        <th>Возраст</th>
                                        <th>Стаж работы</th>
                                        <th>Средняя зарплата</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($workers as $worker)
                                        <tr>
                                            <td>{{$worker->id}}</td>
                                            <td><a href="{{ route('workers.show', $worker->id) }}">{{$worker->first_name}}</a></td>
                                            <td>{{$worker->last_name}}</td>
                                            <td>{{$worker->patronymic}}</td>
                                            <td>{{$worker->age}}</td>
                                            <td>{{$worker->work_experience}}</td>
                                            <td>{{$worker->average_salary}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
