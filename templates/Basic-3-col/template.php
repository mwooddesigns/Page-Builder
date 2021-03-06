<?php
  /***********************************
    Basic 3 Column Layout with Form
  ***********************************/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $page_title; ?>
  </title>
  <link rel="icon" type="image/png" href="/images/favicon-mti.png">
  <!--Open Graph Tags for Facebook-->
  <meta property="og:title" content="" />
  <meta property="og:site_name" content="Market Traders Institute" />
  <meta property="og:url" content="" />
  <meta property="og:description" content="" />
  <!--Content Type. Do Not Change unless relevant-->
  <meta property="og:type" content="website" />
  <!--Image. Must be a minimun of 600x315px to work on mobile devices-->
  <meta property="og:image" content="" />
  <!--END Open Graph Tags for Facebook-->

  <!--Bootstrap-->
  <link rel="stylesheet" href="http://aperture.markettraders.com/form/dependencies/bootstrap/dist/css/bootstrap.min.css" type="text/css">

  <!--Bootstrap Form Helper-->
  <link rel="stylesheet" href="http://aperture.markettraders.com/form/dependencies/bootstrap-form-helpers/dist/css/bootstrap-formhelpers.min.css" type="text/css">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Your StyleSheet -->
  <link rel="stylesheet" href="http://www.markettraders.com/landing-pages/main.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="./templates/<?php echo $page_template; ?>/style.css">

  <!--As Seen On-->
  <link rel="stylesheet" type="text/css" href="http://markettraders.com/asseen/light/css/style.css">
  <link rel="stylesheet" type="text/css" href="http://markettraders.com/asseen/light/css/responsive.css">

  <!--As Seen On-->
  <link rel="stylesheet" type="text/css" href="http://markettraders.com/asseen/opt/light/css/style.css">
  <link rel="stylesheet" type="text/css" href="http://markettraders.com/asseen/opt/light/css/responsive.css">

  <!-- Optimizely Snippet -->
  <script src="//cdn.optimizely.com/js/324108805.js"></script>

  <!-- HeatMap Snippet -->
  <script type="text/javascript">
    if (typeof hmtracker == 'undefined') {
      var hmt_script = document.createElement('script'),
        hmt_purl = encodeURIComponent(location.href).replace('.', '~');
      hmt_script.type = "text/javascript";
      hmt_script.src = "//heatmap.markettraders.com/?hmtrackerjs=Market Traders&uid=542df4b0735591682d6554f41cabe5c497e9dcd1&purl=" + hmt_purl;
      document.getElementsByTagName('head')[0].appendChild(hmt_script);
    }
  </script>
</head>

<body>
  <!-- Facebook SDK Script -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId: '560745344088810',
        xfbml: true,
        version: 'v2.5'
      });
    };

    (function(d, s, id) {
      var js,
        fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- BEGIN BODY CONTENT -->

  <header>
    <div class="container">
      <div class="col-md-6 col-sm-6">
        <div class="row">
          <div class="col-md-1 col-sm-1" style="text-align:center;">
            <img src="http://markettraders.com/img/lp-logos/mti-logo-icon-white.png" alt="MTI">
          </div>
          <div class="col-md-11 col-sm-10 brand">
            Market Traders Institute, Inc.
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 motto" style="text-align:center;">
        World Leaders in Financial Education <em>Since 1994</em>
      </div>
    </div>
  </header>
  <!-- Top content / Title and sub title-->
  <div class="top-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="col-md-12">
            <!-- Main title and sub title here -->
            <h1><?php echo $main_head; ?></h1>
            <?php if(isset($main_subhead) && $main_subhead != "") {echo "<h2>".$main_subhead."</h2>";} ?>
            <!-- Main title and sub title here -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Top content -->

  <div class="container" id="content">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <?php echo $content_one; ?>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <?php echo $content_two; ?>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="RegForm" data-ng-app="ApertureForm">
          <form data-role="form" novalidate data-ng-controller="FormController" name="webinarRegistration">
            <!-- Numeric Form Id Here -->
            <div data-form-id="<?php echo $form_id; ?>"></div>
            <!--Fields-->
            <div data-field="fullName" data-label="Full Name" data-placeholder="Enter your full name"></div>
            <div data-field="emailAddress" data-label="Email Address" data-placeholder="Enter your email address"></div>
            <div data-field="phoneNum" data-label="Phone Number" data-placeholder="Enter your phone number" data-ng-if="!phoneNumOverride"></div>
            <!--Webinar-->
            <div data-webinars="webinar-radios" data-display="3" data-offset="0" data-week-limit="false" data-webinar-type="gtm_nonclient" data-on-demand="false" data-cannot-attend="true" data-show-client-webinars="false"></div>

            <!--Submit Button-->
            <div class="button" id="regbtn" data-ng-click="submitForm()" style="cursor: pointer;">
              <span data-ng-hide="processing" class="">Reserve My Seat Now</span>
              <span data-ng-show="processing" class="ng-hide">Processing...<i class="fa fa-spinner fa-spin"></i></span>
            </div>
          </form>
          <!-- Privacy Policy -->
          <p class="center privacy"><small>Your <a href="#" onclick="MyWindow=window.open('http://www.markettraders.com/privacy-policy/','MyWindow', 'width=600, height=660'); return false;" style="color:#555555;">Privacy</a> is important to us.</small></p>
          <!-- END Privacy Policy -->
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <p>Copyright &copy; 2016 Market Traders Institute, Inc. All Rights Reserved.</p>

      <p>Our address is 400 Colonial Center Parkway, Suite 350, Lake Mary, Florida, 32746, United States of America</p>

      <p>Trading foreign exchange on margin carries a high level of risk, and may not be suitable for everyone. Past performance is not indicative of future results. The high degree of leverage can work against you as well as for you. Before getting involved
        in foreign exchange you should carefully consider your personal venture objectives, level of experience, and risk appetite. The possibility exists that you could sustain a loss of some or all of your initial deposit and therefore you should not
        place funds that you cannot afford to lose. You should be aware of all the risks associated with foreign exchange trading, and seek advice from an independent financial advisor if you have any doubts. The information contained in this web page
        does not constitute financial advice or a solicitation to buy or sell any Forex contract or securities of any type. MTI will not accept liability for any loss or damage, including without limitation any loss of profit, which may arise directly
        or indirectly from use of or reliance on such information.</p>

      <p>The information contained in this advertisement is subject to the terms and conditions in our <a href="http://www.markettraders.com/about-fx-company/general-disclaimer/" target="_blank">GENERAL DISCLAIMER</a>, <a href="http://www.markettraders.com/forex-risk-disclaimer/"
          target="_blank">RISK DISCLAIMER</a> and <a href="http://www.markettraders.com/privacy-policy/" target="_blank">PRIVACY POLICY</a>.</p>

    </div>
  </footer>

  <!-- END BODY CONTENT -->

  <!--CORS > IE9 Polyfill-->
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/xdomain/dist/0.5/xdomain.js" slave="http://gravity.markettraders.com/cors/proxy.html"></script>
  <!--jQuery-->
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/jquery/jquery.min.js"></script>
  <!--Bootstrap JS-->
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/bootstrap/dist/js/bootstrap.min.js"></script>
  <!--Bootstrap Form Helper-->
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/bootstrap-form-helpers/dist/js/bootstrap-formhelpers.min.js"></script>
  <!--Angular JS-->
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/angular/angular.min.js"></script>
  <script src="http://code.angularjs.org/1.3.0/angular-sanitize.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bower-angular-translate/2.0.1/angular-translate.min.js"></script>
  <!--Angular JS Bootstrap-->
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
  <!--AnglujarJS Bootstrap Dialogs-->
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/dialogs/dialogs-default-translations.min.js"></script>
  <script type="text/javascript" src="http://aperture.markettraders.com/form/dependencies/dialogs/dialogs.min.js"></script>
  <!--ApertureFormJS-->
  <!--<script type="text/javascript" src="http://aperture.markettraders.com/form/build/current/apertureFormJS.min.js"></script>-->
  <script type="text/javascript" src="http://ume.markettraders.com/js/apertureFormJS.min.js"></script>
</body>
