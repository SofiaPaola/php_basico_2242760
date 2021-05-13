<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Paises</title>
</head>
<body>
    <center>
        <h1>&#127758; Lista De Paises Latinos &#127758;</h1>
    </center>
    <table class="table table-hover">
        <tr class="thead-dark">
            <th>Nombre</th>
            <th>Capital</th>
            <th>Moneda</th>
            <th>Población</th>
        </tr>
        @foreach ($naciones as $nombre => $nacion)
        <tr>
            <td class="table-danger">{{$nombre}}</td>
            <td class="table-info">{{$nacion["capital"]}}</td>
            <td class="table-warning">{{$nacion["moneda"]}}</td>
            <td class="table-light">{{$nacion["poblacion"]}}</td>
        <tr>
        @endforeach
    </table>
</body>
</html>
