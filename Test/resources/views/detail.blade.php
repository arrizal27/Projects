@extends('layout.main')

@section('title', 'Detail Wallpaper')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail</h1>

                    </div>

                    <!-- Content Row -->


                        <div class="col-xl-12 col-lg-7 text-center">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                @foreach ($wallpaper as $item)
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">{{$item->judul}}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 30rem;"
                                        src="../storage/wallpaper/{{ $item->foto }}" alt="...">
                                    </div>
                                    <p>{{$item->desc}}</p>
                                    <p>Upload by : {{$item->user->name}}</p>
                                    <p>{{$item->created_at}}</p>
                                        <a href=" ../storage/wallpaper/{{$item->foto}}"  class="btn btn-primary" download="">
                                            Download
                                        </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
