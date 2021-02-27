<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de contact</title>
</head>
<body>
    <p><strong>Nom & Prénom : </strong>{{$dataReceived['name']}}</p>
    <p><strong>Adresse email : </strong>{{$dataReceived['email']}}</p>
    <p><strong>Numéro de téléphone : </strong>{{$dataReceived['phone']}}</p>
    <br>
    <p><strong>Message : </strong>{{$dataReceived['message']}}</p>

</body>
</html>