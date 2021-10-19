<!DOCTYPE html>
<html>
<head>
    <title>Ravsols</title>
</head>
<body>
<h2>RavSols</h2>

<p>You received a new inquiry from : {{ $inquiry->name }}</p>
<h3>Here are the details:</h3>
<p><b>Name:</b> {{ $inquiry->name }}</p>
<p><b>Email:</b> {{ $inquiry->email }}</p>
<p><b>Message:</b> {{ $inquiry->message }}</p>
</body>
</html>
