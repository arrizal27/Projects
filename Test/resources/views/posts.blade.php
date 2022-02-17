@extends('layout.main')

@section('title', 'My Posts - Wallpafest')

@section('content')
@php

@endphp
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">My Posts</h1>
        <a href="/addpost" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Post</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Post List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Upload</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wallpaper as $item)
                        <tr id="{{$item->id}}">
                            <td class="aidi" >{{$item->id}}</td>
                            <td><img width="100" src="storage/wallpaper/{{ $item->foto }}"></td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->desc}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <form class="formdelete" action="http://127.0.0.1:8000/api/wall/{{$item->id}}" method="post">
                                <a href="/mypost/{{$item->id}}/update" class="btn btn-success">Update</a>
                                @csrf
                                @method("DELETE")
                                <input type="hidden" id="id{{$item->id}}" name="id" value="{{$item->id}}">
                                    <input type="hidden" id="api_token" name="api_token" value="{{Auth::user()->api_token}}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e){
        var ber = "Bearer ";
        var api_key = document.getElementById("api_token").value;
        $.ajaxSetup({
            headers: {
                    'Accept':'application/json',
                    'Authorization': ber.concat(api_key)
                }
        });
        $(".formdelete").on('submit',function(e) {
            e.preventDefault();
            var $ele = $(this).parent().parent();
            var id = $(this).closest('tr').attr('id');
            var url="http://127.0.0.1:8000/api/wall/"+id;
            $.ajax({
                url: url,
                method: "DELETE",
                data: {
                    id: id
                },
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(dataResult){
                    dataResult = JSON.parse(JSON.stringify(dataResult));
                    if(dataResult.statusCode)
                    {
                        alert("Delete Success!");
                        $ele.fadeOut().remove();

                    }
                    else{
                        alert("Internal Server Error");
                    }
                }
            });
        });
    });
</script>

@endsection
