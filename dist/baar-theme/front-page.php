<?php
/**
 * The template for displaying the frontpage
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Baar_Theme
 */
include('front-header.php');
?>
<main class="container-fluid page-bg">
  <section id="welcome" class="row">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <section id="leistungen">
    <div class="container">
      <div class="row row1 clearfix">
      <h2 class="text-center">Unsere Leistungen</h2>
      <hr>
      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
       <div class="card">
            <div class="card-image">
                <img class="img-responsive" src="img/pic1.jpg">

            </div>


            <div class="card-content">
                <p>Beschriftung und Beklebung von Fahrzeugen aller Art.</p>
            </div>

            <div class="card-action text-center">
                <button class="btn btn-primary btn-lg" type="button">Fahrzeugbeschriftung</button>
            </div>
        </div>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
       <div class="card">
            <div class="card-image">
                <img class="img-responsive" src="img/pic2.jpg">

            </div>


            <div class="card-content">
                <p>Wir veredeln Ihre Textilien durch Bestickung oder Bedruckung.</p>
            </div>

            <div class="card-action text-center">
                <button class="btn btn-primary btn-lg" type="button">Textilveredelung</button>
            </div>
        </div>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
       <div class="card">
            <div class="card-image">
                <img class="img-responsive" src="img/pic3.jpg">

            </div>


            <div class="card-content">
                <p>Wir drucken auch Digital: Werbebanner Indoor/Outdoor.</p>
            </div>

            <div class="card-action text-center">
                <button class="btn btn-primary btn-lg" type="button">Digitaldruck</button>
            </div>
        </div>
      </div>

      </div>
       <div class="row row2 clearfix">
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
           <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/pic3.jpg">

                </div>


                <div class="card-content">
                    <p>Kugelschreiber, Radiergummis und Plakate drucken wir auch!</p>
                </div>

                <div class="card-action text-center">
                    <button class="btn btn-primary btn-lg" type="button">Werbemitteldruck</button>
                </div>
            </div>
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
           <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/pic3.jpg">

                </div>


                <div class="card-content">
                    <p>Ihr Bild auf einer Tasse!! Ihr Bild... auf einer Tasse!!</p>
                </div>

                <div class="card-action text-center">
                    <button class="btn btn-primary btn-lg" type="button">Fototassen</button>
                </div>
            </div>
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0">
           <div class="card">
                <div class="card-image">
                    <img class="img-responsive" src="img/pic3.jpg">

                </div>


                <div class="card-content">
                    <p>Fräsen direkt ins Holz rein. Aber das üben wir noch!</p>
                </div>

                <div class="card-action text-center">
                    <button class="btn btn-primary btn-lg" type="button">Fräsen</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
