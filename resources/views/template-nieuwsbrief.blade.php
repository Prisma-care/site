{{--
  Template Name: Nieuwsbrief
  --}}

  @extends('layouts.simple')

  @section('content')
  @while(have_posts()) @php(the_post())

  <div class="col-10">
    <p class="lead">Ontvang het laatste nieuws over Prisma in je mailbox.</p>
    <p>Blijf op de hoogte over nieuwe verhalen van vroeger in de app, over nieuwe mogelijkheden in de huidige app of
      over volledig nieuwe diensten om de band met personen met dementie te versterken.</p>

    <!-- Begin MailChimp Signup Form -->

    <div id="mc_embed_signup" class="my-4">
      <form action="//care.us16.list-manage.com/subscribe/post?u=b4918c79c09994c5be2d9d92e&amp;id=9e7f8f5b18"
            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
            class="validate form-inline justify-content-md-center" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll" class="form-row">
          <div class="mc-field-group col">
            <input type="email" value="" name="EMAIL" class="required email form-control mb-2 mr-sm-2 mb-sm-0"
                   id="mce-EMAIL" placeholder="Je e-mail adres">
          </div>
          <div class="col">
            <input type="submit" value="Ontvang nieuwsbrief" name="subscribe" id="mc-embedded-subscribe"
                   class="button btn btn-primary">
          </div>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                    name="b_b4918c79c09994c5be2d9d92e_9e7f8f5b18"
                                                                                    tabindex="-1" value=""></div>


          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>

        </div>
      </form>
    </div>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->

  <style>
  #footer { display: none; }
  </style>

@endwhile
@endsection
