@extends('layouts.admin')
@section('title','Add Data')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Data</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Hobi</h6>
        </div>
        <div class="card-body">
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control"name="nama" placeholder="Nama Hobi">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputFile" name="gambar" aria-descraccept="image/*">
                      <label class="custom-file-label" for="inputFile">Choose file</label>
                    </div>
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
