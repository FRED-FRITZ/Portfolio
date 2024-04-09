<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('form_asset/css/style.css') }}">
</head>
<body>
<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('assets/img/person.jpg') }}" alt="">
    </div>
    <div class="text-center mt-4 name">
        FFA Registration
    </div>
    <form class="p-3 mt-6" method="POST" action="{{ route('register') }}">
        @csrf

        <div style="margin-bottom: 20px;">
            <label for="name" style="display: block; font-size: 16px; font-weight: bold;">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 20px;">
            <label for="email" style="display: block; font-size: 16px; font-weight: bold;">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <button type="submit" class="btn mt-3">{{ __('Register') }}</button>
    </form>
    <div class="text-center fs-6 mt-3">
        <a href="{{ route('login') }}">{{ __('Already have an account? Login') }}</a>
    </div>
</div>
</body>
</html>
