<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<div class="container">
    <h1 class="text-center mt-4 mb-5">Danh Sách Tin</h1>
    <a href="/tin/them" class="btn btn-outline-success">Thêm</a>
    @foreach ($data as $tin)
        <div class="card mb-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$tin->urlHinh}}" alt="{{$tin->tieuDe}}" class="img-fluid rounded-start" style="max-height: 200px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{$tin->tieuDe}}</h2>
                        <h3 class="card-text">{{$tin->tomTat}}</h3>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-end">
                        <a href="/tin/capnhat/{{$tin->id}}" class="btn btn-outline-primary me-2">Cập nhật</a>
                        <a href="/tin/xoa/{{$tin->id}}" class="btn btn-outline-danger me-2">Xóa</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

