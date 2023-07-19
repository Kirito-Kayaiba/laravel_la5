<h1>Tin mới nhất</h1>
@foreach($data as $tm)
  <h3>tiêu đề: {{$tm->tieuDe}}</h3>
  <p>Ngày đăng:{{$tm->ngayDang}}</p>
@endforeach