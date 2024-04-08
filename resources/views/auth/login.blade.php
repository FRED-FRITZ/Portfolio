
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href="{{ asset('form_asset/css/style.css') }}">

<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('assets/img/person.jpg') }}" alt="">
    </div>
    <div class="text-center mt-4 name">
        FFA
    </div>
    <form class="p-3 mt-6" method="POST" action="{{ route('login') }}">
        @csrf

        <div style="margin-bottom: 20px;">
            <label for="email" style="display: block; font-size: 16px; font-weight: bold;">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        @error('password')
            <span style="color: red; font-size: 14px;">{{ $message }}</span>
        @enderror

        <button type="submit" class="btn mt-3">{{ __('Login') }}</button>
    </form>
    @if (Route::has('password.request'))
        <div class="text-center fs-6">
            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        </div>
    @endif
    <div class="text-center fs-6 mt-3">
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
</div>

