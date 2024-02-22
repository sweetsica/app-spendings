@extends('front-end.template.master')
@section('css')
    <link href="{{asset('assets/plugins/footable/css/footable.bootstrap.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('assets/plugins/custombox/custombox.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('title')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right align-item-center mt-2">
                    <a style="color: white" href="#custom-modal-add-category" data-animation="blur" data-plugin="custommodal" data-overlayColor="#38414a">
                        <button class="btn px-4 align-self-center report-btn btn-success">
                            Thêm mới
                        </button>
                    </a>
                </div>
                <h4 class="page-title mb-2"><i class="mdi mdi-table mr-2"></i>Footable</h4>
                <div class="">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Spending</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Footable</li>
                    </ol>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h4 class="mt-0">Hello ! {{session('user_name')}}</h4>
                                <p class="text-muted">Good morning ! Have a nice day.</p>
                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="dripicons-user-group font-24 text-secondary"></i>
                                                </div>
                                                <span class="badge badge-danger">Sessions</span>
                                                <h3 class="font-weight-bold">24k</h3>
                                                <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>New Sessions Today</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="dripicons-cart  font-20 text-secondary"></i>
                                                </div>
                                                <span class="badge badge-info">Avg.Sessions</span>
                                                <h3 class="font-weight-bold">00:18</h3>
                                                <p class="mb-0 text-muted text-truncate"><span class="text-danger"><i class="mdi mdi-trending-down"></i>1.5%</span> Weekly Avg.Sessions</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center">
                                <img src="assets/images/dash.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->
        {{--history--}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body new-user order-list">
                        <h4 class="header-title mt-0 mb-3">Danh mục chi tiêu:</h4>
                        <div class="table-responsive">
                            <table id="footable-1" class="table footable footable-1 breakpoint-lg" data-sorting="true" style="">
                                <thead class="thead-light">
                                <tr>
                                    <th data-name="id" data-breakpoints="xs" data-type="number" class="border-top-0">#</th>
                                    <th data-name="source" class="border-top-0">Tên</th>
                                </tr><!--end tr-->
                                </thead>
                                <tbody>
                                @foreach($data['categories'] as $category)
                                    <tr>
                                        <th>{{$category->id}}</th>
                                        <th>{{$category->name}}</th>
                                    </tr><!--end tr-->
                                @endforeach
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        {{--end-history--}}
    </div><!-- container -->

    {{--    modal out--}}
    <div id="custom-modal-add-category" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.modal.close();">
            <span>&times;</span><span class="sr-only">Đóng</span>
        </button>
        <h4 class="custom-modal-title">Thêm danh mục chi tiêu</h4>
        <div class="custom-modal-text">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{route('category.store')}}" class="form-horizontal well" role="form">
                                @csrf
                                <input type="hidden" name="user_id" value="{{session('user_id')}}">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">Tên danh mục:</label>
                                    <input class="col-sm-10" type="text" name="name">
                                </div>

                                <div class="form-group row" style="float:right!important;">
                                    <input type="submit" class="btn-danger px-5 py-2" value="Thêm mới">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--end custom modal-->
    {{--    end modal out--}}

@endsection


@section('js')
    <script src="{{asset('assets/js/style.js')}}"></script>
    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('assets/plugins/footable/js/footable.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.footable.init.js')}}"></script>

    <script src="{{asset('assets/plugins/custombox/custombox.min.js')}}"></script>
    <script src="{{asset('assets/plugins/custombox/custombox.legacy.min.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.modal-animation.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
@endsection
