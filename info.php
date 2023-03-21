<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <p> Hello <?= $_POST['user_firstname'] . ' ' . $_POST['user_lastname'];?>, you suck. You contacted us to talk about <?= $_POST['user_sujet'] ?>.


    We will not be contacting you and have sent your email: "<?= $_POST['user_email']?>" and phone number: "<?= $_POST['user_phoneNumber'] ?>" to shady supplement companies so they may bombard you with ads. Screw you! </p> <br>
    
    <p> PS: We really dont care about the message you wrote us! </p>
    
    <p> <?= $_POST['user_message'] ?> </p>
    
</body>


</html>
