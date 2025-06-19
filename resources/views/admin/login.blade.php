<!-- resources/views/admin/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login Page</h1>

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required />
        <br/>
        <label>Password:</label>
        <input type="password" name="password" required />
        <br/>
        <button type="submit">Login</button>
    </form>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
