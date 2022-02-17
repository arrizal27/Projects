@extends('layout.main')

@section('title', 'Wallpafest - Add Post')

@section('content')
@php
    $top = "Add Post";
    $idform = "addform";
    $eid = "";
    $met ="";
    $dis = "";
    if(isset($wallpaper)){
        foreach ($wallpaper as $item) {
            $top = "Edit Post";
            $idform = "editform";
            $eid = $item->id;
            $met = '@method("PUT")';
            $dis = "disabled";
        }

    }
@endphp
    <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$top}}</h1>
    </div>
    <!-- Content Row -->
    <div class="col-xl-12 col-lg-7">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                           <div class="myform form ">
                              <form action="http://127.0.0.1:8000/api/wall/{{$eid}}" id="{{$idform}}" method="post" enctype="multipart/form-data">
                               <input type="hidden" id="api_token" name="api_token" value="{{Auth::user()->api_token}}">
                                <?php
                                    if(isset($item->id)){
                                        ?>
                                         @method('PUT')
                                         <?php
                                    }
                                    ?>
                                 <div class="form-group">
                                   <div class="custom-file">
                                     <input type="file" class="custom-file-input" id="foto" value="{{@$item->foto}}" name="foto" required="" multipe {{$dis}}>
                                     <label class="custom-file-label text-left" for="customFile">Choose Image</label>
                                   </div>
                                   </div>
                                 </div>
                                 <div class="form-group">
                                    <input type="text" name="judul"  class="form-control my-input" id="judul" value="{{@$item->judul}}" required="" placeholder="Title" >
                                 </div>
                                 <div class="form-group">
                                   <input type="text" class="form-control" id="desc" rows="3" placeholder="Description" value="{{@$item->desc}}" name="desc" required="" >
                                 </div>
                                 <div class="text-center ">
                                    <button class="text-center btn btn-primary" id="submit" type="submit">Submit</button>
                                    {{-- <button type="submit" name="submit" class=" btn btn-block send-button tx-tfm">Submit</button> --}}
                                 </div>
                              </form>
                           </div>
                        </div>
                </div>
                <div class="text-center">
                    <a class="text-center" rel="nofollow" href="/detail">
                        {{-- <button class="text-center btn btn-primary">Details &rarr;</button> --}}
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var api_key = document.getElementById("api_token").value;
        $.ajaxSetup({
            headers: {
                    'Accept':'application/json',
                    'Authorization': api_key
                }
        });
        $("#addform").on('submit',function(e) {
            e.preventDefault();
            var url="http://127.0.0.1:8000/api/wall";
            let formData = new FormData(this);
            var judul = $("#judul");
            $.ajax({
                url: url,
                method: "POST",
                data: formData,
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(dataResult){
                    dataResult = JSON.parse(JSON.stringify(dataResult));
                    if(dataResult.statusCode)
                    {
                        alert("Upload Success!");
                        location.href = "http://127.0.0.1:8000/home";
                    }
                    else{
                        alert("Internal Server Error");
                    }
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var ber = "Bearer ";
        var api_key = document.getElementById("api_token").value;
        $.ajaxSetup({
            headers: {
                    'Accept':'application/json',
                    'Authorization': api_key
                }
        });
        $("#editform").on('submit',function(e) {
            e.preventDefault();
            var url="http://127.0.0.1:8000/api/wall/{{$eid}}";
            let formData = new FormData(this);
            var judul = $("#judul").val();
            var desc = $("#desc").val();
            $.ajax({
                url: url,
                method: "PUT",
                data: {
                    api_token: api_key,
                    judul: judul,
                    desc: desc
                },
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(dataResult){
                    dataResult = JSON.parse(JSON.stringify(dataResult));
                    if(dataResult.statusCode)
                    {
                        alert("Upload Success!");
                        location.href = "http://127.0.0.1:8000/home";
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
