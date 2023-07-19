<div class="container">
  <h1>danh sách tin</h1>
  @foreach ($data as $tin)
  <div class="row">
    <div class="left">
      <h4>{{$tin->tieuDe}}</h4>
      <p>{{$tin->tomTat}}</p>
    </div>
    <div class="right">cập nhật, xóa</div>
  </div><hr>
  @endforeach
</div>