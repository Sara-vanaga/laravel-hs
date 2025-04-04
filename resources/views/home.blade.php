<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی - برنامه حسابداری</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">به برنامه حسابداری ما خوش آمدید</h1>
        <p class="text-center">این برنامه به شما کمک می‌کند تا مدیریت مالی خود را به بهترین شکل انجام دهید.</p>
        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary">ورود</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">ثبت‌نام</a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>