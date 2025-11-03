<!DOCTYPE html>
<html>
<body>
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>
        @error('password')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </form>
    <a href="{{ route('register.form') }}">Create account</a>
</body>
</html>
