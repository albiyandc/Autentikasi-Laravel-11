<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Toko Holo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            width: 100%;
            max-width: 500px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            overflow: hidden;
            flex-direction: column;
        }
        .banner-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .login-form {
            padding: 30px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="banner-wrapper">
        <img src="{{ asset('image/anomali-merah.png') }}" alt="Banner Login">
    </div>

    <div class="login-form">
        <h3 class="text-center mb-4">Login Toko Holo</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
            </div>
            <button type="submit" name=""class="btn btn-primary w-100">Masuk</button>
        </form>
    </div>
</div>
        @if ($errors->any())
    <div class="alert alert-danger md-6" style="max-width: 500px">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
</body>
</html>
