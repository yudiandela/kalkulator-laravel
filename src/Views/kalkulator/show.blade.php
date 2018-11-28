<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil {{ $title }}</title>
</head>
<body>
    @switch($title)
        @case('Penjumlahan')
            @php
                $title = '+';
            @endphp
            @break
        @case('Pengurangan')
            @php
                $title = '-';
            @endphp
            @break
        @case('Pembagian')
            @php
                $title = '/';
            @endphp
            @break
        @default
            @php
                $title = '*';
            @endphp
    @endswitch
    <h2>Hasil dari {{ $a . ' ' . $title . ' ' . $b }} adalah : {{ $hasil }}</h2>
</body>
</html>