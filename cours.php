<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div class="block">
        <?php include "pages/header.php" ?>

        <div class="bloc-Cours">
            <h1>Les cours</h1>
            <div class="all-Cours">
                <div class="bloc-Cours-Items">

                    <div class="items-Cours-two details-Courses">
                        <div class="cours"></div>
                        <div class="cours"></div>
                        <div class="cours"></div>
                    </div>
                    <div class="items-Cours-two">

                        <div class="Cours-Group">
                            <p>Git & Github <br> <span>5 heures</span></p>
                        </div>

                        <div class="Cours-Group">
                            <p>HTML5 <br> <span>5 heures</span></p>
                        </div>

                        <div class="Cours-Group">
                            <p>CSS3 <br> <span>5 heures</span></p>
                        </div>

                    </div>
                </div>
                <div class="bloc-Cours-Items">

                    <div class="items-Cours-two details-Courses">
                        <div class="cours"></div>
                        <div class="cours"></div>
                        <div class="cours"></div>
                    </div>
                    <div class="items-Cours-two">

                        <div class="Cours-Group">
                            <p>Flexbox <br> <span>5 heures</span></p>
                        </div>

                        <div class="Cours-Group">
                            <p>Responsive <br> <span>5 heures</span></p>
                        </div>

                        <div class="Cours-Group">
                            <p>Annimations <br> <span>5 heures</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php include "pages/footerAbonnement.php"; ?>;
        <?php include "pages/footer.php" ?>;
    </div>


</body>

</html>