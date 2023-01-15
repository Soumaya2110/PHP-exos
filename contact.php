<?php
?>
<h1 id="h1contact">Nous contacter</h1>
    <br>
<br>
     <div id="formvue">
         <section id="form">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Votre prénom : </label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Votre adresse e-mail : </label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Votre message : </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12">
                <button id="subbuttons" class="btn btn-primary" type="submit">Envoyer</button>
            </div>
            </section>

            <section id="seccontact">
                <p id="textcontact">Une question ? Des livres qui prennent la poussière dans votre bibliothèque ? 
                    N’hésitez pas à nous contacter, nous serons heureux de répondre à toutes vos questions? </p>
            </section>
        </div>
        <br>
        <br>
    <button id="buttretour" @click="goHome()">Retour à l'accueil</button>
    <br>
    <br>