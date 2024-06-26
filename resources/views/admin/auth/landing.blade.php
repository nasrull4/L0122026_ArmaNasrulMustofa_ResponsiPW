<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container d-flex vh-100">
        <div class="row align-self-center w-100">
            <div class="col-12 text-center">
                <h1>Welcome to Landing Page</h1>
                <a href="{{ route('admin.login') }}" class="btn btn-primary btn-lg m-3">Login</a>
                <a href="{{ route('admin.register') }}" class="btn btn-secondary btn-lg m-3">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
