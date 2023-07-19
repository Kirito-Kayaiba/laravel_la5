<div class="container">
  <h1>Danh Sách tin</h1>
  @foreach ($data as $tin)
    <div class="row">
      <div class="col-md-12">
        <h2>{{$tin->tieuDe}}</h2>
        <h3>{{$tin->tomTat}}</h3>
        <img src="{{$tin->urlHinh}}" alt="" width="200px">
        <div class="right">
          <a href="/tin/capnhat/{{$tin->id}}">Cập nhật</a> | <a href="/tin/xoa/{{$tin->id}}">Xóa</a> | <a href="/tin/them">Thêm</a>
        </div>
      </div>
    </div>
    <hr>
  @endforeach
</div>