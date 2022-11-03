
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SBC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

  </head>

  <body>
  <?php include('indexnav.php')?>
    <div class="jumbotron text-center">
      <h3>SKILLS BASED CATEGORIZATION</h3>
    </div>

    <div class="sbcintro">
      <img  src="images/sbc-intro.png" alt="logo" width="200" height="200" >
    </div>


    <!-- Container (Introduction Section) -->
    <div id="Introduction" class="container-fluid">
      <div class="row">
        <div class="col-sm-10">

          <h2>INTRODUCTION</h2><br>
          <h4>Skill-based Categorization (SBC) is an online platform to unite a coterie of Students
              studying at the same university.
              Our website offers a comely ambience for Institution’s Societies and Students studying here.
              Our system will keep you updated about happenings round the campus of your preferred societies.
              We link our Present for an integrated Future and hope that everyone
              here has a delightful time at our platform.</h4>
        </div>
      </div>
    </div>
<hr>





    <!-- Container (Societies Section) -->

    <div id="Societies" class="container-fluid " >
      <div class="text-center">
        <h2>  Societies </h2>
      </div>

<div class="container-fluid">
  <div class="Societies">

      <a href="societies/QSS.php">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">

              <h3>QSS</h3>
            </div>
            <img src="images/QSS.png" alt="QDC" width="250" height="250">
          </div>
        </div>
      </a>

      <a href="societies/QDLS.php">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">

              <h3>QDLS</h3>
            </div>
            <img src="images/QDLS.png" alt="QDC" width="250" height="250">
          </div>
        </div>
      </a>

      <a href="societies/QMS.php">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
            <h3>QMS</h3>
            </div>
            <img src="images/QMS.png" alt="QDC" width="250" height="250">
          </div>
        </div>
      </a>

      <a href="societies/QAS.php">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
            <h3>QAS</h3>
            </div>
            <img src="images/QAS.png" alt="QDC" width="250" height="250">
          </div>
        </div>
      </a>

      <a href="societies/QSCS.php">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">

            <h3>QSCS</h3>
            </div>
            <img src="images/QSCS.jpeg" alt="QDC" width="250" height="250">
          </div>
        </div>
      </a>

      <a href="societies/QDC.php">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
            <h3>QDC</h3>
            </div>
            <img src="images/QDC.png" alt="QDC" width="250" height="250">
          </div>
        </div>
      </a>

    </div>
  </div>
<hr>

<!-- Container ( Contact-us Section ) -->

<div id="contact" class="container-fluid">
  <h2 class="text-center">Contact Us</h2>
  <div class="row">
    <div class="col-sm-5">
    <p>Contact us freely incase of any query</p>
    <p><span class="glyphicon glyphicon-map-marker"></span> IIT,QAU</p>
    <p><span class="glyphicon glyphicon-phone"></span> 0312-3456789</p>
    <p><span class="glyphicon glyphicon-envelope"></span> Adnan@gmail.com</p>
    <p><span class="glyphicon glyphicon-envelope"></span> Ammad@yahoo.com</p>
    </div>
  </div>
</div>












<!-- Java Script for smooth scrolling -->


    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          /**The optional number (900) specifies the number of milliseconds
             it takes to scroll to the specified area **/

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>



  </body>
  <?php include('footer.php')?>
</html>
