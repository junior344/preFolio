<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_outward" />
    <link rel="stylesheet" href="style.css">
    <title>portfolio</title>
</head>
<body>
    <?php include 'pages/header.php'; ?>

    <div class=" d-flex justify-content-center flex-column m-5 p-5 " id="scrollspyHeading1">
        <h1 class=" fw-bolder custom-font-size ">Josias Junior Mbogle</h1>
        <p class="fs-1">Developpeur Full-Stack</p>
        <p class="fs-5 mt-3">
            Passionné par le développement web et les nouvelles technologies, je suis toujours à la recherche de nouveaux défis.
            Je m'efforce de rester à jour avec les dernières tendances et innovations dans le domaine du développement.
        </p>
    </div>
    <div class="TOOLS m-5 p-5 d-flex">
        <span class="badge rounded-pill text-bg-primary  m-1">TYPESCRIPT</span>
        <span class="badge rounded-pill text-bg-secondary m-1">JAVASCRIPT</span>
        <span class="badge rounded-pill text-bg-success m-1">REACT</span>
        <span class="badge rounded-pill text-bg-danger m-1">SASS/SCSS</span>
        <span class="badge rounded-pill text-bg-warning m-1">PHP</span>
        <span class="badge rounded-pill text-bg-info m-1">DOCKER</span>
        <span class="badge rounded-pill text-bg-light m-1">GIT</span>
        <span class="badge rounded-pill text-bg-dark m-1">NODEJS</span>
    </div>

    <main data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
     >
        <h2 class=" text-center">PROJETS</h2>

        <?php include 'pages/projet.php'; ?>
    </main>


    <?php include 'pages/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>