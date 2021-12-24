<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Kontak Kami</h1>
    <p>Nama : {{ $details['nama'] }}</p>
    <p>Email : {{ $details['email'] }}</p>
    <p>Judul : {{ $details['judul'] }}</p>
    <p>Pesan : {{ $details['msg'] }}</p>
</body>
</html>