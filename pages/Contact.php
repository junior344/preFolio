<?php 
    include 'function.php'; 
?>

<form  method="POST" class="container mb-3" id="scrollspyHeading3">
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $message = $_POST['message'];
            echo verifData($email, $name, $message);
        }
    ?>
    <div class="mb-3">
        <label for="email" class="form-label">Adresse mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
        <div id="emailHelp" class="form-text">Votre mail ne sera partagé avec personne</div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="name" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input d-none" id="exampleCheck1">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
</form>