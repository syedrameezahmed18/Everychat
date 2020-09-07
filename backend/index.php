
<!DOCTYPE>

<?php
include("connection.php");
include("function.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="chatapp.css">
</head>
<body>

<!-- Image and text -->
<!--<div id="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
</div>-->

<nav class="navbar navbar-expand-lg ">
    <img src="images/chats.png" alt="" width="50px" height="50px">
  <p class="lookgood">ChatWays</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <!--if you wanna add somethings--->
    </ul>
    <span class="navbar-text">
      <button class="btn btn-outline-success redi" >Login</button>
    </span>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cover.jpg" class="d-block w-100" height="700px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cover2.jpg" class="d-block w-100" height="700px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cover3.jpg" class="d-block w-100" height="700px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="imagesflex">
<div class="card" style="width: 18rem;">
  <img src="https://images.priceoye.pk/samsung-galaxy-s10-pakistan-priceoye-v9pph.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://images.priceoye.pk/samsung-galaxy-s10-pakistan-priceoye-v9pph.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://images.priceoye.pk/samsung-galaxy-s10-pakistan-priceoye-v9pph.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
    <div class="containment">
    <header>
        <p>CHATAPP</p>
    </header>


    <form action="" method="POST" onSubmit=" return checkfunc()">
        <textarea col=50 row=5 name="comment" class="form-control" maxlength="99" required></textarea>
        <input type="submit" onClick="function(e){e.preventDefault();}" name="insert" class="btn btn-success">
    <?php
       if(isset($_POST['insert'])){

        echo"<p class='err'></p>";   
         insert($conn);
    }
       else{
           echo"<script>'another error';</script>";
       }
    ?>
    </form>
    </div>

    
    <div class='commentsection'>
        <div class='headings'>
            <p>COMMENT SECTION</p>
        </div>
        <div class='containercom'>
        <div class='commentblock'>
            
            <?php
             header("Location: http://www.google.com");
             getdata($conn);
            ?>
            
        </div>
        </div>
    </div>

    <div class='commentsection1 fade'>
        <div class='headings'>
            <p>COMMENT SECTION</p>
        </div>
        <div class='containercom'>
        <div class='commentblock'>
            
            <?php
             getAlldata($conn);
            ?>
            
        </div>
        </div>
    </div>
    <div class="buttondivs">
    <button class="btn btn-success og">Show All</button>
    </div>
    <div class="buttondivs">
    <button class="btn btn-success og1 fade">Show Less</button>
    </div>
     
    <script type="text/javascript">
        
        checkfunc = () =>
         {
            let x= document.querySelector(".form-control");
            let er = document.querySelector(".err");
            
        
            if(!x.checkValidity())
            {
                er.textContent=x.validationMessage;
                return false;
            }
            else{
                er.textContent="Correct!";
            }  
            
        }

            let bt = document.querySelector(".og");
            let b2 = document.querySelector(".og1");
            let cs = document.querySelector(".commentsection");
            let cs1 = document.querySelector(".commentsection1");

            bt.addEventListener("click",function(){
                console.log("click click");
                bt.classList.add("fade");
                cs.classList.add("fade");
                b2.classList.remove("fade");
                cs1.classList.remove("fade");

            })
            b2.addEventListener("click",function(){
                bt.classList.remove("fade");
                cs.classList.remove("fade");
                b2.classList.add("fade");
                cs1.classList.add("fade");

            })


           

// Get the navbar
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.querySelector(".navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
        }
            
        let redi = document.querySelector(".redi");
        redi.onclick= function(){location.href="login.php"}
        let lkg= document.querySelector(".lookgood");
        lkg.onclick= function(){location.href="index.php"}
        
</script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>