@extends('front-end.template.master')
@section('css')
    <link href="{{asset('assets/plugins/footable/css/footable.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/search-input.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/custombox/custombox.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('title')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
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
                        <h4 class="header-title mt-0 mb-3">Lịch sử giao dịch:</h4>
                        <div class="table-responsive">
                            <table id="footable-1" class="table footable footable-1 breakpoint-lg" data-sorting="true" style="">
                                <thead class="thead-light">
                                <tr>
                                    <th data-name="id" data-breakpoints="xs" data-type="number" class="border-top-0">#</th>
                                    <th data-name="source" class="border-top-0">Nguồn tiền</th>
                                    <th data-name="amount" class="border-top-0">Số tiền</th>
                                    <th data-name="note" class="border-top-0">Ghi chú</th>
                                    <th data-name="type" class="border-top-0">+/-</th>
                                    <th data-name="category" class="border-top-0">Danh mục</th>
                                </tr><!--end tr-->
                                </thead>
                                <tbody>
                                @foreach($data['user'] as $transaction)
                                    <tr class="{{ $transaction->type== 0 ? 'table-success' : 'table-danger' }}">
                                        <th>{{$transaction->id}}</th>
                                        <th>{{$transaction->source->name}}</th>
                                        <th class="currency">{{$transaction->amount}}</th>
                                        <th>{{$transaction->note}}</th>
                                        <th>{{$transaction->type==0 ? 'Vào' : "Ra"}}</th>
                                        <th>{{$transaction->category !=null ? $transaction->category->name : ''}}</th>
                                    </tr><!--end tr-->
                                @endforeach
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                        @if($data['users'])
                            <h4 class="header-title mt-0 mb-3">Lịch sử giao dịch người dùng:</h4>
                            <div class="table-responsive">
                                <table id="footable-1" class="table footable footable-1 breakpoint-lg" data-sorting="true" style="">
                                    <thead class="thead-light">
                                    <tr>
                                        <th data-name="id" data-breakpoints="xs" data-type="number" class="border-top-0">#</th>
                                        <th data-name="source" class="border-top-0">Nguồn tiền</th>
                                        <th data-name="amount" class="border-top-0">Số tiền</th>
                                        <th data-name="note" class="border-top-0">Ghi chú</th>
                                        <th data-name="type" class="border-top-0">+/-</th>
                                        <th data-name="category" class="border-top-0">Danh mục</th>
                                    </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                    @foreach($data['users'] as $transaction)
                                        <tr class="{{ $transaction->type== 0 ? 'table-success' : 'table-danger' }}">
                                            <th>{{$transaction->id}}</th>
                                            <th>{{$transaction->source->name}}</th>
                                            <th class="currency">{{$transaction->amount}}</th>
                                            <th>{{$transaction->note}}</th>
                                            <th>{{$transaction->type==0 ? 'Vào' : "Ra"}}</th>
                                            <th>{{$transaction->category !=null ? $transaction->category->name : ''}}</th>
                                        </tr><!--end tr-->
                                    @endforeach
                                    </tbody>
                                </table> <!--end table-->
                            </div><!--end /div-->
                        @endif
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        {{--end-history--}}
    </div><!-- container -->
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
    <script src="{{asset('assets/js/search-input.js')}}"></script>
@endsection
