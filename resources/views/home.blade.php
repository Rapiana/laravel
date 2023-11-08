<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.mi
n.css">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis |
                D-IV Keamanan Sistem Informasi</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary">Selamat Datang!</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri
                    Bengkalis</h4>
                <h6 class="mt-3">
                    <a href="{{ route('auth.login') }}" class="btn btn-primary" role="button">Masuk</a>
                    <a href="{{ route('auth.register') }}" class="btn btn-primary" role="button">Daftar</a>
                </h6><br><br>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bund
le.min.js"></script>
</body>

</html>