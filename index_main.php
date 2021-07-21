<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
    
      html,body
      {
        width: 100%;
        height: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden; 
      }
          .RIPU{
        color: chocolate;
      }
      .RIPU:hover{
        text-decoration: none;
      }
      body {
        font-family: 'Lato', sans-serif;
        display: inline-block;
      }

      .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.9);
        overflow-x: hidden;
        transition: 0.5s;
      }

      .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }

      .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }

      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
      }

      @media screen and (max-height: 450px) {
        .overlay a {font-size: 20px}
        .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
        }
      }
    
      .main{ 
          display: inline-block;
          position: relative;
          bottom: 53px;
          left: 1050px;
          height: 0px;
      }
      body{
        margin-right: 0;
        padding-right: 0;
      }
</style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <span id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <span class="overlay-content">
    <a href="https://www.thesparksfoundationsingapore.org/">About Company</a>
    <a href="https://ripusudan-chourey.github.io/-Personal-Portfolio/ " target="_blank">About Me</a>
    <a href="https://www.thesparksfoundationsingapore.org/join-us/internship-positions/">Internships</a>
    <a href="https://xaltius.tech/">Clients</a>
    <a href="https://www.thesparksfoundationsingapore.org/contact-us/">Contact</a>
  </span>
</span>
<!-- 
<h2>Fullscreen Overlay Nav Example</h2>
<p>Click on the element below to open the fullscreen overlay navigation menu.</p>
<p>In this example, the navigation menu will slide in, from left to right:</p> -->
<nav></nav>
<span class="main a" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

  
      <div class="container-fluid">
      
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>THE BANK OF HUMAN WELLFARE</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img class="im" src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

      
          <br>
          <br>
          <br>
          <h3 class="action" ><span style="font-family: 'Roboto Slab', serif">CHOOSE AN ACTION</h3></span>
            <div class="column activity text-center">
                  
                  <div class="col-md act">
                   
                    <br>
                    <br>
                    <br>
                    <a href="transactionhistory.php"><button>Transfer History</button></a>
                  </div>

                  <div class="col-md act">
                   
                    <br>
                    <br>
                    <br>
                    <a href="transfermoney.php"><button>View Customers to transfer</button></a>
                  </div>
                  
            </div>
           
      </div>
      <br>
      <footer class="text-center mt-5 py-2">
        <p>A Project by <b><a class="RIPU" href="https://github.com/RIPUSUDAN-CHOUREY" target="_blank"> RIPUSUDAN CHOUREY </a> </b> <br> </p>
      </footer>
     
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>














