<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Un nuova mail è stata inviata</h1>
    <h3>Da: {{ $email->first_name }} {{ $email->last_name }}</h3>
    <p>Indirizzo mail: {{$email->email}}</p>
    <p>Compagnia aerea: {{$email->company}}</p>
    <p>Volo {{$email->flight_number}} da {{$email->departure_airport}} a {{$email->arrival_airport}} in data {{$email->flight_date}}</p>
    <p>Tipo di disagio: {{$email->discomfort}}</p>
</body>

</html>