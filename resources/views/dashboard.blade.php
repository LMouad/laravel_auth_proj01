<!DOCTYPE html>
<html>
<body>
    <h2>Welcome, {{ Auth::user()->name }}</h2>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
