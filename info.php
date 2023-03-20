<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php	
        $nom = $_POST['user_name'];
        $firstname = $_POST['user_firstname'];
        $courriel = $_POST['user_email'];
        $phone = $_POST['user_phoneNumber'];
        $sujet = $_POST['object-message'];
        $message = $_POST['user_message'];
    ?>
    
    <p> Hello <?= $firstname ?>, you suck. You contacted us to talk about <?= $sujet ?>.

    We will not be contacting you and have sent your email: "<?= $courriel ?>" and phone number: "<?= $phone ?>" to shady supplement companies so they may bombard you with ads. Screw you! </p> <br>
    
    <p> PS: We really dont care about the message you wrote us! </p>
    <p> <?= $message ?> </p>
</body>

</html>
