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
        <div class="contacter">
            <h1>Nous contacter</h1>
            <p>Relemplissez ce formulaire pour nous laisser un message</p>
            <form action="" class="form">

                <div class="datas">

                    <div class="putInfo">
                        <label for="nom">Nom</label> <br>
                        <input type="text" name="nom" id="nom">
                    </div>

                    <div class="putInfo">

                        <label for="">Pays</label>
                        <select placeholder="Choisir" name="categorie" class="form-control" id="">
                            <option value="">Choisir</option>
                            <option value="">Bisben</option>
                            <option value="">Bis</option>
                            <option value="">ben</option>
                            <option value="">Michee</option>
                        </select>

                    </div>


                </div>

                <div class="datas">

                    <div class="putInfo">
                        <label for="nom">Adrese E-mail</label> <br>
                        <input type="text" name="nom" id="nom">
                    </div>

                    <div class="putInfo">
                        <label for="nom">Objectif</label> <br>
                        <input type="text" name="nom" id="nom">
                    </div>

                </div>

                <div class="datas forMssg">
                    <div class="putInfo">
                        <label for="msgVisit">Message</label> <br>
                        <textarea name="msgVisitot" id="msgVisit" cols="30" rows="10"></textarea>
                        <!-- <input type="textarea" name="nom" id="nom"> -->
                    </div>

                </div>

                <div class="datas btnSubmit">
                    <button type="submit" name="btn-Submit-Msg">Envoyer le message</button>
                </div>
            </form>
        </div>
        <?php include "pages/footerAbonnement.php"; ?>;
        <?php include "pages/footer.php" ?>;
    </div>
</body>