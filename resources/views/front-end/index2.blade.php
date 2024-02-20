<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Theo dõi chi tiêu</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="narrow-jumbotron.css" rel="stylesheet">
    <script src="chrome-extension://ajdpfmkffanmkhejnopjppegokpogffp/assets/prompt.js"></script>
</head>

<body>
<ol class="breadcrumb" style="border: 1px dashed rgb(66, 133, 244);">
    <li class="breadcrumb-item active"><a href="#">Home</a></li>
    <li class="breadcrumb-item active"><a href="#">Library</a></li>
    <li class="breadcrumb-item active">Data 3</li>
</ol>

<div class="container">
    <p>@Sweetsica 2024</p>
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills float-right">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tài khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thống kê</a>
                </li>
            </ul>
        </nav>
        <h3 class="text-muted">App Spendings</h3>
    </div>

    <div class="jumbotron">
        <h1 class="display-3">Danh sách tài khoản</h1>
    </div>


    <table class="table" style="">
        <thead>
        <tr>
            <th>#</th>
            <th>Tài khoản</th>
            <th>Số dư</th>
            <th>Cập nhật cuối</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data['sources'] as $source)
            <tr>
                <th scope="row">{{$source->id}}</th>
                <td>{{$source->name}}</td>
                <td>{{$source->total}}</td>
                <td>{{$source->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="jumbotron row marketing">
        <p class="col-lg-6">
            <a class="btn btn-lg btn-success" href="#" role="button">Rút</a>
        </p>
        <p class="col-lg-6">
            <a class="btn btn-lg btn-success" href="#" role="button">Nạp</a>
        </p>
    </div>

    <div class="jumbotron">
        <p class="lead">Giao dịch gần đây </p>
    </div>
    <footer class="footer">
        <div class="row marketing">
            <div class="col-lg-4 col-lg-offet-3">
                <table class="table" style="">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nguồn tiền</th>
                            <th>Số tiền</th>
                            <th>Ghi chú</th>
                            <th>+/-</th>
                            <th>Danh mục</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data['transactions'] as $transaction)
                        <tr>
                            <th>{{$transaction->id}}</th>
                            <th>{{$transaction->source->name}}</th>
                            <th>{{$transaction->amount}}</th>
                            <th>{{$transaction->note}}</th>
                            <th>{{$transaction->type=1 ? 'Ra' : "Vào"}}</th>
                            <th>{{$transaction->category->name}}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </footer>


</div>
<div class="container"><p>@Sweetsica 2024</p>
    <div class="row marketing">

    </div>
</div> <!-- /container -->


<script id="chartjs-script" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script>                $(document).ready(function () {
        $(".chartjs").each(function () {
            ctx = $("canvas", this).get(0).getContext("2d");
            config = JSON.parse(this.dataset.chart);
            chartjs = new Chart(ctx, config);
        });
    });              </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</html>
