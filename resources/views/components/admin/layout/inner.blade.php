<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login admin</title>
</head>
<body>
    <form action="{{route('admin.auth')}}" method="POST">
        @csrf
            <input type="text" name="email" value="admin@admin.com">
            <input type="password" name="password" value="testadmin">
        <button type="submit">Auth</button>
    </form>

</body>
</html>