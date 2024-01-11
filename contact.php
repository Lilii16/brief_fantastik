
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <title>Document</title>
</head>
<body>
<?php
// fichier1.php
include('header.php');
?>
    <video id="background-video" autoplay loop muted>

        <source src="assets\videos\forest_-_97998 (Original).mp4" type="video/mp4">

    </video>

    <img src="" alt="">

    <div class="col-md-12">
                <h2 class="h1-responsive fw-bold my-1 pb-1 text-light" id="ancre_contact">Contactez-nous ! svp</h2>
                <form name="contact-form" id="formulaire" class="text-center mt-5 formulaire">

                    <!--Grid row-->
                    <div class="row mt-4">

                        <!--Grid column-->
                        <div class="col-md-7">
                            <div class="md-form mb-0">
                                <input type="text" name="name" id="InputName" class="form-control bg-body-secondary rounded-0 text-uppercase"
                                    placeholder="Votre nom">
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5">
                            <div class="md-form mb-0">
                                <input type="text" name="first_name" id="Input_firstName" class="form-control bg-body-secondary rounded-0 text-uppercase"
                                    placeholder="Votre prénom">
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="email" name="e-mail" id="Inputemail" class="form-control bg-body-secondary rounded-0 text-uppercase"
                                    placeholder="Votre e-mail">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" name="Sujet" id="InputSujet" class="form-control bg-body-secondary rounded-0 text-uppercase" placeholder="Sujet">
                            </div>
                        </div>
                    </div>

                    <!--Grid row-->
                    <div class="row mt-4">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea name="message" rows="6" id="InputMessage" class="form-control bg-body-secondary rounded-0 text-uppercase " placeholder="Votre Message"></textarea>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                        
                    <div class="send mt-4 text-start view overlay zoom">
                        <button type="submit"  class="color btn btn-primary gold rounded-3 w-20 text-uppercase">Envoyer</button>
                    </div>
                </form>
                
</body>
</html>

       

           