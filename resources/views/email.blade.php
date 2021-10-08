<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div style="justify-content: center; display:flex; flex-direction:column; align-items:center; padding-top:1%;">
        <h1 style=" border-radius: 25px; height: 3rem width: 100%">Voilà le mail du client nommé: <b><u>{{$contenuEmail["name"]}}</b></u> <i>({{$contenuEmail["subject"]}})</i> </h1>
            <p>Email : <i>{{$contenuEmail["email"]}}</i></p>
            <div style="padding-top:5%; justify-content: center; display:flex; flex-direction:column; align-items:center;">
                <span style="text-align: center">Message du client :</span>
                <div style="border-radius: 20px; padding:3%">
                    <span>{{$contenuEmail["message"]}}</span>
                </div> 
            </div>
    
    </div>

</body>
</html>