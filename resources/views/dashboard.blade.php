<!DOCTYPE html>
<html>
<body>
    @if(Auth::user()->role === 'admin')
    <a href="{{ route('admin.dashboard') }}">Admin Panel</a>
    @endif
    <h2>Welcome, {{ Auth::user()->name }}</h2>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
