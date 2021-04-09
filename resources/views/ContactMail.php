<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'information</title>
</head>
<body>
    <p><strong>Nom  complet  </strong> : {{ $dataReceived['name']}}</p>
    <p><strong>Adresse email : </strong>{{ $dataReceived['email']}}</p>
    <p><strong> Sujet : </strong>{{ $dataReceived['subject'] }}</p>
    <br>
    <p><strong> Message : </strong> {{ $dataReceived['message' ]}}</p>

</body>
</html>