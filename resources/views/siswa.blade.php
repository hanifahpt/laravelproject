<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 ng-white">
        @if (($nilai >= 0) and ($nilai <50)) 
<div class="alert alert-danger d-inline-block">Maaf, Anda Tidak Lulus</div>
@elseif (($nilai >= 50) and($nilai <=100))
<div class="alert alert-success d-inline-block">Selamat, Anda Lulus</div>
@else
<div class="alert alert-dark d-inline-block">Nilai Tidak Valid</div>
@endif
</body>
</html>
