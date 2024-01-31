<h1>Welcome to the main page</h1>
<?php
if(isset($_POST['envoyer'])){
 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $fonction = $_POST['fonction'];
 $date = $_POST['date'];
 $heure = $_POST['heure'];

 if (empty($fullname) || empty($email) || empty($fonction) || empty($date) || empty($heure) || !isset($_POST['membre'])) {
    echo "Veuillez remplir tous les champs obligatoires." ;
} else {
 echo "les informations de client sont: <br>";
 echo "Fullname: " . $fullname . "<br>";
 if (isset($_POST['envoyer'])) {
    if (isset($_POST['membre'])) {
        $membreValue = $_POST['membre'];
        echo "l'utilisateur est un memebre: " . $membreValue."<br>"; 
    }

}
 echo "Email: " . $email . "<br>";
 echo "Fonction: " . $fonction . "<br>";
 echo "Date de reservation: " . $date . "<br>";
 echo "Heure de reservation: " . $heure . "<br>";
}
}
?>