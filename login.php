<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <form action="">
    <label for="">Email :</label><input type="text" placeholder="Email ou username" id="email">
    <label for="">Mot de passe :</label><input type="text" placeholder="Mot de passe" id="mot">
    <label for="">Confirmer Mot de passe :</label><input type="text" placeholder="Confirmer Mot de passe" id="cfmot">
    <button type="submit">sign in</button>
    <p id="non"></p>
</form>
    <script>
        let a=document.getElementById("email");
        let b=document.getElementById("mot");
        let c=getElementById("cfmot");
        function login(){
            if (empty(a) || empty(b) || empty(c))
            document.getElementById("non").innerHTML="veuillez remplir tout les champs"
        }

    </script>
</body>
</html>