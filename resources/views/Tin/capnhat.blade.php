<!-- Thêm Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        max-width: 600px;
        margin-top: 50px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        padding: 30px;
    }
    .form-label {
        font-weight: bold;
    }
    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #fff;
    }
    .btn-warning:hover {
        background-color: #ffa000;
        border-color: #ffa000;
    }
</style>

<div class="container mt-5">
    <h1 class="text-center mb-4">Cập nhật tin</h1>
    <form action="/tin/capnhat/{{$tin->id}}" method="post" class="col-md-7 m-auto">
        <div class="mb-3">
            <label for="tieuDe" class="form-label">Tiêu đề:</label>
            <input type="text" name="tieuDe" class="form-control" value="{{$tin->tieuDe}}" required>
        </div>
        <div class="mb-3">
            <label for="tomTat" class="form-label">Tóm tắt:</label>
            <textarea name="tomTat" class="form-control" rows="3" required>{{$tin->tomTat}}</textarea>
        </div>
        <div class="mb-3">
            <label for="urlHinh" class="form-label">urlHinh:</label>
            <input type="text" name="urlHinh" class="form-control" value="{{$tin->urlHinh}}" required>
        </div>
        <div class="mb-3">
            <label for="idLT" class="form-label">idLT:</label>
            <select name="idLT" class="form-select" required>
                <option value="1" @if($tin->idLT==1) selected @endif>Xã Hội</option>
                <option value="2" @if($tin->idLT==2) selected @endif>Du Lịch</option>
            </select>
        </div>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-warning px-4">Cập nhật Tin</button>
        </div>
        @csrf
    </form>
</div>


