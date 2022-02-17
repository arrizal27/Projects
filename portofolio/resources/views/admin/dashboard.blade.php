@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Hobi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table-hobby" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Hobi</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="hobby-list">
                                    @foreach ($data as $hobi)
                                        <tr>
                                            <td>{{@$loop->iteration}}</td>
                                            <td><img src="hobby/{{@$hobi['gambar']}}" width="200" alt=""></td>
                                            <td>{{@$hobi['nama']}}</td>
                                            <td>{{@$hobi['deskripsi']}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
