<section class="mt-5">
  @include('partials.navigation-bottom')
</section>

<section id="partners">
  <div class="container">
    <p class="text-center">Met steun van</p>

    <ul class="list-inline text-center">
      <li class="list-inline-item"><a href="http://sandbox.vrt.be/"><img src="@asset('images/logo-vrtsandbox.png')" alt="VRT sandbox" class="img-fluid"></a></li>
      <li class="list-inline-item"><a href="http://dementialab.com"><img src="@asset('images/logo-dementialab.png')" alt="Dementia Lab" class="img-fluid"></a></li>
      <li class="list-inline-item"><a href="http://huis-van-alijn.be/"><img src="@asset('images/logo-alijn.png')" alt="Het Huis van Alijn" class="img-fluid"></a></li>
      <li class="list-inline-item"><a href="http://www.bieterf.be/"><img src="@asset('images/logo-terf.png')" alt="TERF" class="img-fluid"></a></li>
      <li class="list-inline-item"><a href="http://www.vgc.be/"><img src="@asset('images/logo-vgc.png')" alt="Vlaamse Gemeenschapcommissie" class="img-fluid"></a></li>
      <li class="list-inline-item"><a href="http://startit.be/"><img src="@asset('images/logo-startit.png')" alt="Start It KBC" class="img-fluid"></a></li>
    </ul>

  </div>
</section>


<div id="footer" class="fixed-bottom">
  <!-- Begin MailChimp Signup Form -->

  <div id="mc_embed_signup">
    <form action="//care.us16.list-manage.com/subscribe/post?u=b4918c79c09994c5be2d9d92e&amp;id=9e7f8f5b18" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">

        <div class="mc-field-group">
          <input type="email" value="" name="EMAIL" class="required email form-control mb-2 mr-sm-2 mb-sm-0" id="mce-EMAIL" placeholder="Je e-mail adres">
        </div>
        <input type="submit" value="Ontvang nieuwsbrief" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary">

        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b4918c79c09994c5be2d9d92e_9e7f8f5b18" tabindex="-1" value=""></div>


        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>

      </div>
    </form>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
</div>

<footer class="content-info">
  <div class="container text-center">
  <p>&copy; @php echo date('Y') @endphp Make &amp; Cie VZW – <a href="/privacy-policy/">Privacy policy</a></p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Varela', 'Varela+Round']
    }
  });
</script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68884522-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>