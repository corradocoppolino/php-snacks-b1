<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    

    <?php 
    
        $nome = $_GET['nome'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if(strlen($nome) > 3 && strpos($mail,'@')!== false && strpos($mail,'.')!== false && is_numeric($age)){
            $string = 'Accesso riuscito';
        }else{
            $string = 'Accesso negato';
        }

        echo $nome;
        echo $mail;
        echo $age;
        echo $string;

    
    ?>

    


</body>
</html>