<!DOCTYPE html>
<html>
<head>
    <title>Complete Your Registration</title>
</head>
<body>
    <h1>Welcome, {{ $customerName }}!</h1>
    <p>Thank you for registering with us. Please follow the link below to complete your registration process.</p>
    <p><a href="{{ url('/complete-registration-link') }}">Complete Registration</a></p>
</body>
</html>
