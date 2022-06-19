<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>
<body>
<div class="container text-center mt-3 pt-3 bg-white">
<h1 class="bg-dark px-3 py-1 text-white d-inline-block">
    {{ $nama }}
</h1>
<br>
@forelse ($nilai as $val)

@if (($val < 50))
@break
@endif
<div class="alert alert-success d-inline-block">
    {{ $val }}
</div>
@empty
<div class="alert alert-dark d-inline-block">Tidak ada data...</div>
@endforelse
</div>
</body>
</html>
