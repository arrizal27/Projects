@extends('layout.main')

@section('title', 'Wallpafest')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    </div>
    @foreach ($wallpaper as $item)
    <!-- Content Row -->
    <div class="col-xl-12 col-lg-7 text-center">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{$item->judul}}</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 30rem;"
                        src="storage/wallpaper/{{ $item->foto }}" alt="...">
                </div>
                <div class="text-center">
                    <a class="text-center" rel="nofollow" href="/detail/{{$item->id}}">
                        <button class="text-center btn btn-primary">Details &rarr;</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


