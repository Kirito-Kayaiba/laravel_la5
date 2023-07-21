<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="col-6 m-auto">
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $err)
        <li>{{$err}}</li>
      @endforeach
      </ul>
    </div>
  @endif
  <form method="post" action="{{route('sv_store')}}" class="p-3 border border-primary">
  @csrf
    <h3 class="h4 bg-info p-2 mx-n3 text-white mt-n3">
      Nhập Thông Tin Sinh Viên
    </h3>
    <div class="form-group row">
      <label class="col-3">Mã Sinh Viên</label>
      <div class="col-9">
        <input value="{{old('masv')}}" type="text" class="form-control" name="masv">
        @error('masv')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label class="col-3">Họ Tên Sinh Viên</label>
      <div class="col-9">
        <input value="{{old('hoten')}}" type="text" class="form-control" name="hoten">
        @error('hoten')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label class="col-3">Tuổi</label>
      <div class="col-9">
        <input value="{{old('tuoi')}}" type="text" class="form-control" name="tuoi">
        @error('tuoi')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label class="col-3">Ngày Sinh</label>
      <div class="col-9">
        <input value="{{old('ngaysinh')}}" type="text" class="form-control" name="ngaysinh">
        @error('ngaysinh')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label class="col-3">CMND</label>
      <div class="col-9">
        <input value="{{old('cmnd')}}" type="text" class="form-control" name="cmnd">
        @error('cmnd')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label class="col-3">Email</label>
      <div class="col-9">
        <input value="{{old('email')}}" type="text" class="form-control" name="email">
        @error('email')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Lưu</button>
      </div>
    </div>
  </form> 
</div> 