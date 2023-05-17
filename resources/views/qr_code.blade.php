<!DOCTYPE html>
<html>
<head>
    <title>How to Generate QR Code in Laravel 8? </title>
</head>
<body>

<div class="visible-print text-center" style="">
    <h1>ineed</h1>

    {!! QrCode::size(250)->generate('ineed'); !!}

    <p>example by ****</p>
</div>

</body>
</html>
