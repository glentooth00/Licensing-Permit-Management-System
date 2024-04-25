<!DOCTYPE html>
<html>

<head>
    <title>Permit Details</title>
</head>

<body>
    <h1>Permit Details</h1>

    {{ $qrCode }}
    <h2>Permit Information</h2>
    <p>Permit ID: {{ $permit->id }}</p>
    <p>Business name: {{ $permit->business_name }}</p>
    <p>Owner name: {{ $permit->first_name }} {{ $permit->middle_name }} {{ $permit->last_name }}</p>
    <!-- Add more details as needed -->
</body>

</html>
