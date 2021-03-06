<?php $kj=0;?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Loader.css">
    <style>#movie-list{float:right;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;}
#movie-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#movie-list li:hover{background:#ece3d2;cursor: pointer;}
#search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
</style></style>
</head>

<body style="filter: blur(0px) brightness(101%);opacity: 1;">

    <!-- Loader  -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!-- Button to scroll Top -->
    <button id="btnScrollToTop">
        <i class="fa fa-chevron-up"></i>
    </button>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: rgb(220,220,220);position: sticky;z-index: 100;">
        <img src="https://img.icons8.com/nolan/64/starred-ticket.png"/>&nbsp;&nbsp;<a class="navbar-brand" href="index.php" style="background: rgba(255,255,255,0);text-align: left;color:#3659FF;"><h3>Movie Booking Seva</h3></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="#myModal" class="text-decoration-none" data-toggle="modal"><h6 style="padding-top: 0.8em;float:right">Contact Us </h6></a></li>
                    
                    <li class="nav-item" style="padding-left:30px;padding-top: 0.4em;float:right"><form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"><i class="fa fa-search" style="border-color: rgb(72,72,72);filter: contrast(0%) grayscale(0%);"></i></label>&nbsp;<input class="form-control search-field" type="search" id="search-box" name="search"></form></div><div id="suggesstion-box"></div>
                    </li>
                    <li class="nav-item"><div class="dropdown" style="padding-right: 43px;padding-top: 0.8em;padding-left:3em;padding-bottom:5px;float:right"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Select City</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Mumbai</a><a class="dropdown-item" href="#">Delhi</a><a class="dropdown-item" href="#">Chandigarh</a></div>
                    </div> </li>
                    <li class="nav-item"><a class="btn btn-light action-button" role="button" href="Login.php" style="width: 171px;float: right;">Log-In</a></li></div>
                </ul>       
    </nav>
    <div id="promo">
        <div class="jumbotron" style="background: rgba(102,215,215,0.67);">
            <h1 style="color: rgb(0,0,0);">Welcome to MBS</h1>
            <p>
                <span class="typewrite" data-period="2000" data-type='[ "Safe", "Secure", "Reliable Ticketing." ]'>
                  <span class="wrap"></span>
            </span>
            </p>

            <p style="color: rgb(0,0,0);">Your ticket to live entertainment!<br><br></p>
            
        </div>
    </div>
    <div class="container" style="background: rgb(255,255,255);padding-right: 0;padding-left: 0;padding-top: 0px;padding-bottom: 0;">
        <h1 style="text-align: center;background: rgb(255,255,255);padding-top: 10px;padding-bottom: 10px;padding-right: 10px;padding-left: 10px;">Movies in English</h1>
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                
            <!-- <div class="carousel-item active">
                    <div class="row" style="background: rgb(220,220,220);">  -->
                    <?php 
    require('dataBase.php');
    $sql = "SELECT  m_name, m_desc, DOR, runtime
FROM movie";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$i=0;
foreach($result as $row){
    //echo $row['m_name'];
    $m_name = $row['m_name'];
    $m_desc = $row['m_desc'];
    $DOR = $row['DOR'];
    $runtime = $row['runtime'];
    // if($i%3==0){
    //     echo('
    //     <div class="carousel-item">
    //                 <div class="row" style="background: rgb(220,220,220);">');
    // }?>
   <!-- <div class="carousel-item">
    <div class="row" style="background: rgb(220,220,220);"> -->
    
    
    <?php           
                    $actives='';
                    if($i==0){
                        $actives ='active';
                    }
                     if($kj%3==0){
                    echo'<div class="carousel-item '.$actives.'">
                    <div class="row" style="background: rgb(220,220,220);">';}?>
    <div class="col-md-4 offset-md-0">
        <p class="text-center" style="font-size: 20px;padding-top: 10px;"><?= $m_name?><br><br></p><img class="img-fluid" id="poster" src="assets/img/<?= $m_name ?>.jpg" width="90%" height="60%" style="padding: 0px;margin: 0px;margin-left: 12px;border-radius: 5px;">';
        <hr>
        <div class="table-responsive table-borderless">
            <table class="table table-bordered">
                <tbody>
                <tr>
                                            <td><img src="assets/img/rottentomato.png"></td>
                                            <td>80%</td>
                                            <td><img src="assets/img/IMDB.png"></td>
                                            <td>76%</td>
                                        </tr>
                    <tr>
                        <?php
                        echo '<td colspan="4">runtime:'.$runtime.'&nbsp; DOR:'.$DOR.'</td>'; 
                        ?>
                </tbody>
                                </table>
                            </div>
                        </div>
                        <?php if($kj%3==2){echo'</div></div>';}?>
    <?php
    $kj++;
    $i++;
}
?>
                
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
            <?php 
                $i=0;
                foreach($result as $row){
                    $actives='';
                    if($i==0){
                        $actives ='active;';
                    }
                
                ?>
                <li data-target="#carousel-1" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
                <?php $i++; } ?>
            </ol>
        </div>
    </div>


    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header"><h3 id="myModalLabel">We'd Love to Hear From You</h3>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal col-sm-12" action="contact.php" method="post">
                <div class="form-group"><label>Name</label><input class="form-control required" name="name" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
                <div class="form-group"><label>Message</label><textarea class="form-control" name="msg" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
                <div class="form-group"><label>E-Mail</label><input class="form-control email" name="email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"></div>
                <div class="form-group"><label>Phone</label><input class="form-control phone" name="phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"></div>
                <div class="form-group"><button type="submit" name="SubmitButton" class="btn btn-success pull-right">Send It!</button> </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets\js\typewrite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/contact-validate.js"></script>
   <script> // AJAX call for autocomplete 
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readMovie.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});
//To select country name
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}</script>
    <!-- <script>
  $(document).ready(function(){

    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });

  });
</script> -->

    <script>
    
        
        const btnScrollToTop = document.querySelector("#btnScrollToTop");
        btnScrollToTop.addEventListener("click", function(){
            window.scrollTo({
                top:0,
                left:0,
                behaviour: "smooth"
            })
        })

        $(document).ready(function() {

            setTimeout(function(){
            $('body').addClass('loaded');
            $('h1').css('color','#222222');
            }, 3000);

        });
    </script>
</body>

</html>