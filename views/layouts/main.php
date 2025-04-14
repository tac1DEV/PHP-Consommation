<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de gestion</title>
</head>

<body>
    <nav style="display: flex; background-color: #f8f9fa; padding: 10px; border-bottom: 1px solid #ddd;">
        <ul style="list-style: none; margin: 0; padding: 0; display: flex; gap: 15px;">
            <li><a href="/" style="text-decoration: none; color: #007bff;">Home</a></li>
            <li><a href="/contact" style="text-decoration: none; color: #007bff;">Contact</a></li>
        </ul>
        <ul style="list-style: none; margin: 0; padding: 0; display: flex; gap: 15px; margin-left: auto;">
            <li><a href="/login" style="text-decoration: none; color: #007bff;">Login</a></li>
            <li><a href="/register" style="text-decoration: none; color: #007bff;">Register</a></li>
        </ul>
    </nav>
    {{content}}
</body>

</html>