<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>

    <div class=" border-b-2">
        <div class=" font-serif font-semibold mb-2">From: {{ $email }}</div>
        <div class="font-serif mb-2 ">Subject: {{ $subjek }} </div>
    </div>
    <div class="">
        <div class="mb-4">
            Name: {{ $username }}
        </div>
        <div class="">
            Pesan:
            <pre>
                {{ $pesan }}
            </pre>
        </div>
    </div>
</body>
</html>