<?php get_header(); ?>

<section class="main">
  <section class="cases">
    <section class="grand">
        <figure onmouseover="document.getElementById('div1').style.display = 'block';" onmouseout="document.getElementById('div1').style.display = 'none';">
          <p id="div1" style="display: none;">Text</p>
          <img src="<?php bloginfo('template_directory'); ?>/img/capt.png" alt="hoverboard" />
        </figure>

        <article class="petit">
            <h2>L'hoverboard</h2>
            <p>En quelques années, l'hoverboard est devenu un véritable phénomène de société. Ce moyen de transport innovant et accessible à tous a même séduit bon nombre de personnalités et de stars, lui assurant...</p>            
            <a href="article1.html">En savoir plus</a>
        </article>
    </section>

    <section class="grand">
        <article class="petit tablette">
          <h2>Les stores en panneaux solairs</h2>
          <p>Produire votre propre énergie dans votre maison ou votre appartement ? C’est désormais possible grâce aux stores solaires et intelligents...</p>
          <a href="article2.html">En savoir plus</a>
        </article>

        <figure onmouseover="document.getElementById('div2').style.display = 'block';" onmouseout="document.getElementById('div2').style.display = 'none';">
          <p id="div2" style="display: none;">Text</p>
          <img src="<?php bloginfo('template_directory'); ?>/img/stores.jpg" alt="stores solaires" />
        </figure>

        <article class="petit phone">
            <h2>Les stores en panneaux solairs</h2>
            <p>Produire votre propre énergie dans votre maison ou votre appartement ? C’est désormais possible grâce aux stores solaires et intelligents...</p>
            <a href="article2.html">En savoir plus</a>
        </article>
    </section>

    <section class="grand">
        <figure onmouseout="document.getElementById('div3').style.display='none';" onmouseover="document.getElementById('div3').style.display='block';"">
          <p id="div3" style="display: none;">Text</p>
          <img src="<?php bloginfo('template_directory'); ?>/img/pendentif.jpeg" alt="pendentif conecté" />
        </figure>

        <article class="petit">
          <h2>Pendentif conecté</h2>
          <p> Ce petit appareil permet d’enregistrer toutes vos pensées sans même avoir à sortir votre smartphone de votre poche. Le Senstone enregistre les mémos vocaux...</p>
          <a href="article3.html">En savoir plus</a>
        </article>
    </section>
  </section>
</section>

<section class="container contact">
    <section class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">N'hésitez pas à me contacter</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="name">Votre nom</label>
              <div class="col-md-12">
                <input id="name" name="name" type="text" placeholder="Nom" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-6 control-label" for="email">Votre e-mail</label>
              <div class="col-md-12">
                <input id="email" name="email" type="text" placeholder="nom@exemple.fr" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-6 control-label" for="message">Votre message</label>
              <div class="col-md-12">
                <textarea class="form-control" id="message" name="message" placeholder="Message ..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" id="confirmer" class="btn btn-primary btn-lg">Envoyer</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
</section>

<p id="onverra"></p>
<hr>
<br>
<p>Vous êtes conecté depuis  <span id="minute"></span><span id="timmer"></span> secondes</p>

<table class="container">
<div class="row">
<tr col-11 col-sm-10 col-md-9 col-lg-8>
   <th onclick="show('nom')" class="titre" id="tinom">Nom</th>
   <th onclick="show('age')" class="titre" id="tiage">Age</th>
   <th onclick="show('natio')" class="titre" id="tinatio">Nationalité</th> 
</tr>

   <tr id="catnom" class="liste">
       <td>Remi</td>
       <td>Rebecca</td>
       <td>Thomas</td>
   </tr>

   <tr id="catage" class="liste" style="visibility: collapse">
       <td>25 ans</td>
       <td>24 ans</td>
       <td>26 ans</td>
   </tr>

   <tr id="catnatio" class="liste" style="visibility: collapse">
       <td>Belge</td>
       <td>Française</td>
       <td>Americain</td>
   </tr>
</div>
</table>

 <?php get_footer(); ?>