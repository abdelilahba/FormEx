<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Activation</title>
</head>
<body>
    <h1>Hello, {{ $customer->name }}</h1>
    <p>Your account has been activated successfully. You can now log in using the following link:</p>
    <p><a href="{{ $activationLink }}">{{ $activationLink }}</a></p>
    <p>Thank you for using our service!</p>
</body>
</html>
