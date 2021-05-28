<?php
    class User {
        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $photo;

        // funzione per indicare i parametri obbligatori per costruire l'oggetto
        public function __construct($name, $lastname, $email, $photo) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->photo = $photo;
        }

        
    }

    // Istanza utente 1
    $utente1 = new User("Uma", "Thurman", "uma.thurman@gmail.com", "https://upload.wikimedia.org/wikipedia/en/4/42/Mia_Wallace.jpeg");
    $utente1->id = 1;
    $utente1->password = "123";

    // Istanza utente 2
    $utente2 = new User("John", "Travolta", "john.travolta@gmail.com", "https://openpsychometrics.org/tests/characters/test-resources/pics/PF/1.jpg");
    $utente1->id = 2;
    $utente1->password = "456";

    // Istanza utente 3
    $utente3 = new User("Samuel L.", "Jackson", "samuel_l.jackson@gmail.com", "https://a1cf74336522e87f135f-2f21ace9a6cf0052456644b80fa06d4f.ssl.cf2.rackcdn.com/images/characters_opt/p-pulp-fiction-samuel-l-jackson.jpg");
    $utente1->id = 3;
    $utente1->password = "789";

    $users = [$utente1, $utente2, $utente3];
    // var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Utenti</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <h1>Lista Utenti</h1>

    <div>
        <?php foreach($users as $user) {?>
            <div class="utente">
                <img src="<?php echo $user->photo ?>" alt="mia">
                <p><strong>Nome: </strong><?php echo $user->name ?></p>
                <p><strong>Cognome: </strong><?php echo $user->lastname ?></p>
                <p><strong>Email: </strong><?php echo $user->email ?></p>
            </div>
        <?php } ?>
    </div>
    
</body>
</html>