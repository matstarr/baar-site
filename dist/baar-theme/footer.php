<footer class="container-fluid">
    <div class="row">
      <div class="container contact">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Kontaktieren Sie uns direkt</h2>
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="name" class="col-xs-12 col-sm-2">Ihr Name / Firma: </label>
                    <div class="col-xs-12 col-sm-10">
                      <input type="text" id="name" class="form-control" placeholder="Name / Firma">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-xs-12 col-sm-2">Ihre Email: </label>
                    <div class="col-xs-12 col-sm-10">
                      <input type="email" id="email" class="form-control" placeholder="Email Adresse">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message" class="col-xs-12 col-sm-2">Ihre Nachricht: </label>
                    <div class="col-xs-12 col-sm-10">
                      <textarea id="message" class="form-control" rows="3" placeholder="Nachricht"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 text-center"><input type="submit" class="btn btn-lg btn-success" value="Senden"></div>
                  </div>
                </form>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="maps">
           <div class="map-overlay"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5378.179838859848!2d12.979140000001365!3d47.62438333377185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4776ecf9b5e6918b%3A0x1c972d6c347aab6b!2sGebirgsj%C3%A4gerstra%C3%9Fe+50%2C+83483+Bischofswiesen%2C+Deutschland!5e0!3m2!1sde!2sde!4v1427357010963" class="googlemap" frameborder="0"></iframe>
        </div>
    </div>
    <div class="row">
      <div class="container footer-bottom">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-4">

                <h4>Leistungen</h4>
              <?php wp_nav_menu(array(
                  'menu' => 'footer',
                  'theme_location' => 'footer'
              ));
              ?>
              <h4>Rechtliches</h4>
                    <ul>
                        <li><a href="#">Impressum</a></li>
                        <li><a href="#">AGBs</a></li>
                    </ul>

            </div>
          <div class="col-xs-6 col-sm-6 col-md-4">

                    <h4>Kontakt</h4>
                    <p>
                      Beschriftung & Stickerei Baar<br>
                      Geschäftsführung: Mario Baar<br>
                      Gebirgsjägerstraße 50<br>
                      83483 Bischofswiesen / Strub<br>
                      Bayern, Deutschland<br>
                     <br>
                      <a href="tel:+49865263343"><i class="fa fa-phone" aria-hidden="true"></i> +49 (0)8652 63343</a><br>
                      <i class="fa fa-fax" aria-hidden="true"></i> +49 (0)8652 657060<br>
                      <i class="fa fa-envelope" aria-hidden="true"></i> buero@beschriftung-baar.de
                    </p>

            </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <h4>Facebook</h4>
            <div class="fb-page" data-href="https://www.facebook.com/Beschriftung-Stickerei-Baar-319097548186917/" data-tabs="timeline" data-width="1000" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Beschriftung-Stickerei-Baar-319097548186917/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Beschriftung-Stickerei-Baar-319097548186917/">Beschriftung &amp; Stickerei Baar</a></blockquote></div>
          </div>
        </div>
      </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <!-- Add scripts that are not critical but simply enhance - like social sharing widgets -->
      <script type="text/javascript">
      function downloadJSAtOnload() {
          var element = document.createElement("script");
          element.src = "js/defer.min.js";
          document.body.appendChild(element);
      }
      if (window.addEventListener)
          window.addEventListener("load", downloadJSAtOnload, false);
      else if (window.attachEvent)
          window.attachEvent("onload", downloadJSAtOnload);
      else window.onload = downloadJSAtOnload;
      </script>
        <!-- FB Include -->
      <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  </body>

</html>
