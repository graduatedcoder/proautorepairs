<!DOCTYPE html>
<html>

<head>
    <title>Password Reset Request</title>
</head>

<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>You have requested a password reset. Click the button below to reset your password:</p>
    <a href="{{ $resetLink }}" style="padding: 10px 20px; background-color: #FF0000; color: white; text-decoration: none;">Reset Password</a>
    <p>If you did not request this, please ignore this email.</p>
</body>

</html>