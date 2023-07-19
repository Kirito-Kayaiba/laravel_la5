<!-- cập nhật -->
<div class="container">
  <h1>Cập nhật tin</h1>
  <form action="/tin/capnhat/{{$tin->id}}" method="post" class="col-7 m-auto">
    <p>Tiêu đề: <input name="tieuDe" class="form-control" value="{{$tin->tieuDe}}"></p>
    <p>Tóm tắt: <textarea name="tomTat" class="form-control">{{$tin->tomTat}}</textarea></p>
    <p>urlHinh: <input name="urlHinh" class="form-control" value="{{$tin->urlHinh}}"></p>
    <p>idLT: <select name="idLT" class="form-control">
      <option value="1" @if($tin->idLT==1) selected @endif>Xã Hội</option>
      <option value="2" @if($tin->idLT==2) selected @endif>Du Lịch</option>
    </select></p>
    <p><button type="submit" class="bg-warning p-2">Cập nhật Tin</button></p>
    @csrf
  </form>