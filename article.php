<?php
$json = file_get_contents('data.json');
$json_data = json_decode($json,true);
?>
   <section id="fond">
        <br>
        <br>
    <h2>Articles</h2>
    <div id="app">
<div id="carte" v-for="item of items" :key="item.id">
    <div class="card" style="width: 18rem;">
<img :src="`./images/${item.image}`" class="card-img-top" alt="livre">
  <div class="card-body">
    <h5 class="card-title">{{item.name}}</h5>
    <p class="card-text">{{item.texte}}</p>
    <a href="#" class="btn btn-primary">Lire</a>
  </div>
</div>
</div>
</div>
    <button id="buttretour" @click="goHome()">Retour à l'accueil</button>
    <br>
    <br>

