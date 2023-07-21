<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thêm Tin</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
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
        .btn-submit {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-submit:hover {
            background-color: #ffa000;
            border-color: #ffa000;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="/tin/them" method="post">
        <div class="mb-3">
            <label for="tieuDe" class="form-label">Tiêu đề:</label>
            <input type="text" name="tieuDe" class="form-control" id="tieuDe" required>
        </div>
        <div class="mb-3">
            <label for="tomTat" class="form-label">Tóm tắt:</label>
            <textarea name="tomTat" class="form-control" id="tomTat" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="urlHinh" class="form-label">urlHinh:</label>
            <input type="text" name="urlHinh" class="form-control" id="urlHinh" required>
        </div>
        <div class="mb-3">
            <label for="idLT" class="form-label">idLT:</label>
            <select name="idLT" class="form-select" id="idLT" required>
                <option value="1">Xã Hội</option>
                <option value="2">Du Lịch</option>
            </select>
        </div>
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-submit">Thêm Tin</button>
        </div>
        @csrf
    </form>
</div>

<!-- Link to Bootstrap JS (Optional - only if you need to use Bootstrap JavaScript components) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
