<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XYZ Bank Limited</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
  <link rel="stylesheet" href="style-section.css">
  <script src="https://kit.fontawesome.com/dddee3edb5.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<link rel="stylesheet" href="scroll.css">
  <style>
    * {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      box-sizing: border-box;
      scroll-behavior: smooth;
      transition:.4s;
    }

    body {
      padding: 0px;
      margin: 0px;
    }

    a {

      color: white;
    }

    a:hover {
      color: green;
    }

    input {
      width: 200px;
    }

    button {
      width: 200px;
    }



    .container {
      padding: 0px;
      margin: 0px auto;
      font-weight: 400;
      line-height: 1.5rem;
      width: 95%;
      text-align: left;
    }

    .service {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin-left: 0px;
      margin-right: 20px;
    }
    

    /* .boxx {
      height:150px;
      width:200px;
      font-size:18px;
      font-weight: 3000;
      margin-top:20px;
  } */
    .col-services {
      display: flex;
      flex: 0 0 100%;
      margin-left: 7px !important;
      margin-bottom: 20px;
    }



    #b1 {
      box-sizing: border-box;
      overflow: hidden;
    }

    .service-content {
      padding: 30px 20px 10px;
    }

    /* 
    #b1:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);
    } */

    #b2 {
      background: url('edu.jpg');
      background-position: center;

    }

    #b2:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);
    }

    #b3 {
      background: url('auto.jpg');
      background-position: center;
    }

    #b3:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);
    }

    #b4 {
      background: url('per.jpg');
      background-position: center;
    }

    #b4:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);
    }

    #ser {
      margin-top: 100px;
      margin-bottom: 100px;
      margin-left:10px;
      
    }

    #b5 {
      background: url('visa.jpg');
      background-position: center;
    }

    #b5:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);
    }

    #b6 {
      background: url('rem.jpg');
      background-position: center;
    }

    #b6:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);
    }

    #b7 {
      background: url('visa.jpg');
      background-position: center;
    }

    #b7:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);
    }

    #b8 {
      background: url('mob.png');
      background-position: center;
    }

    #b8:hover {
      background-color: black;
      opacity: .9;
      transform: scaleY(1.2);

    }

    #con {
      /* From https://css.glass */
background-image: url('contactus.jpg');
/* background-position: center; */
background-color: rgba(18, 14, 15, .8);
background-size: cover;
color:white;
    }
    .carousel-inner{
      height:85vh;
          }
          
    .btn{
      border-radius:15px;
    }
    .slider_overlay {
    width: 100%;
    height: 85vh;
    position: relative;
    top: 0;
    left: 0;
   opacity:0.7;
   background-color: rgba(18, 14, 15, .8);
    
}
.slider_overlay .txt{
  position:relative;
  top:40%;
  left:32%;
  color:white;
  font-size: 3rem;
font-weight:bold;
font-family: Arial, Helvetica, sans-serif;
-webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white;
}
.slider_overlay p{
  position:relative;
  top:42%;
  left:35%;
  font-size: 1 rem;
  color:white;
font-weight:bold;
font-family: Arial, Helvetica, sans-serif;

}
.pos{
  margin-left:120px;
}

    @media screen and (max-width:720px) {
      .carousel-inner{
        height:100%;
      }
      .navbar-toggler{
        background:white;
        width:60px;
        outline:none;
        border:2px solid #0275d8 ;
        
      }
      .slider_overlay {
    width: 100%;
    height: 100%;
    position: relative;
    top: 0;
    left: 0;
   opacity:0.7;
   background-color: rgba(18, 14, 15, .8);
  
    
}
.slider_overlay .txt{
  position:absolute;
  top:30%;
  left:10%;
  font-size: 1rem;
  color:white;
  max-width:150px;
font-weight:bold;
font-family: Arial, Helvetica, sans-serif;
/* -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color:white; */
}
.slider_overlay p{
  word-wrap: break-word;
  position:absolute;
  top:50%;
  left:10%;
  font-size:.7 rem;
  max-width:150px;
  color:white;
font-weight:bold;
font-family: Arial, Helvetica, sans-serif;
/* -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: white; */
}
.pos{
  margin-left:0px;
  min-width:250px;
  
}
      
    }
    
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="lg.png" alt="xyz" height="50" width="100">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-bell-o" aria-hidden="true"></i>  Notices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ser">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#con"> Contact us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" target="_blank" href="signin"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;signin</a></li>
              <li><a class="dropdown-item" href="registrationform.html"><i class="fa fa-user-plus" aria-hidden="true"></i> create account?</a></li>

            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" id="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-primary text-white" type="submit" id="bts">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!---------------------------carousel section-------------------------------------------->
  <div class="containers ">
    <div class="row px-2">
      
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" >
          
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="photo1.jpg" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="photo2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="photo4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="slider_overlay"> <p class="txt">XYZ Bank Limited </p> <p>Create Your account to enjoy our services</p></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!---------------------------account section-------------------------------------------->

    <div class="container bg-light ">
      <div class="row px-4 py-2 mx-0">
        <div class="row my-5">
          <p class="h1 text-center">create account?</p>
        </div>
        <div class="col my-4" >
          <div class="card" style="width: 18rem; margin-right:auto;">
            <img src="current.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Current account</h5>
              <p class="card-text">A current account, also known as financial account is a type of deposit account
                maintained by individuals who carry out significantly higher number of transactions with banks on a
                regular basis. </p>
              <a href="registrationform.html" class="btn btn-primary">create account</a>
            </div>
          </div>
        </div>
        <div class="col  my-4" >
          <div class="card" style="width: 18rem;">
            <img src="save.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <br>
              <h5 class="card-title">saving account</h5> 
              <p class="card-text">
                An account you have with a bank for deposits which is an interest-bearing account, and even though they do not typically offer large interest rates, their dependability and security make it a smart choice for putting money away.</p>
              <a href="registrationform.html" class="btn btn-primary">create account</a>
            </div>
          </div>
        </div>
        <div class="col my-4" >
          <div class="card" style="width: 18rem;">
            <img src="fd.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">fixed deposit account</h5>
              <p class="card-text">
                A fixed deposit, also known as an FD, is an investment instrument offered by banks, as well as
                non-banking financial companies (NBFC) to their customers to help them save money. It has more interest rate</p>
              <a href="registrationform.html" class="btn btn-primary">create account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!----------------------------loan section------------------------------------------------>
    <div class="mar loan-section" id="ser">
      <div class="mt-5">
        <div class="service-title-container">
          <div class="container-title text-center">
            <h2>Loan services</h2><br><br>
          </div>
        </div>
        <div class="service-container">
          <div class="service-card col-md-4 col-sm-4">
            <div class="border" onclick="window.location.href = 'home-loan.html'">
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="hom.jpg">
                <div class="overlay"> </div>
              
              </div>
              
              <div class="service-card-content">
                <h2>Home Loan</h2>
                <hr>
                <p>Bank provides home loan with very low interest rate and with high speed processing</p>
              </div>
            </div>
          </div>
          <div class="service-card col-md-4 col-sm-4">
            <div class="border" onclick="window.location.href = 'auto-loan.html'">
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="auto.jpg">
                <div class="overlay"> </div>
              </div>
              <div class="service-card-content">
                <h2>Auto Loan</h2>
                <hr>
                <p>Bank provides auto loan with minimum EMI payments and easy processing.</p>
              </div>
            </div>
          </div>
          <div class="service-card col-md-4 col-sm-4">
            <div class="border" onclick="window.location.href = 'education-loan.html'">
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="education.jpg">
                <div class="overlay"> </div>
              </div>
              <div class="service-card-content">
                <h2>Education Loan</h2>
                <hr>
                <p>Bank provides Education loan with long repayment time and low interest.</p>
              </div>
            </div>
          </div>
          <div class="service-card col-md-4 col-sm-4">
            <div class="border" onclick="window.location.href = 'professional-loan.html'">
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="professional.png">
                <div class="overlay"> </div>
              </div>
              <div class="service-card-content">
                <h2>Professional Loan</h2>
                <hr>
                <p>Bank provides Professional loan for professional jobs and want to get extra cash flow.</p>
              </div>
            </div>
          </div>
          <div class="service-card col-md-4 col-sm-4">
            <div class="border" onclick="window.location.href = 'gold-loan.html'">
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="gold.jpg">
                <div class="overlay"> </div>
              </div>
              <div class="service-card-content">
                <h2>Gold Loan</h2>
                <hr>
                <p>Bank provides loan against gold with immediate valuation and low interest rates.</p>
              </div>
            </div>
          </div>
          <div class="service-card col-md-4 col-sm-4">
            <div class="border" onclick="window.location.href = 'share-loan.html'"> 
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="share.jpg">
                <div class="overlay"> </div>
              </div>
              <div class="service-card-content">
                <h2>Loan against share</h2>
                <hr>
                <p>Bank provides upto upto 70% loan with very low interest rate against share.</p>
              </div>
            </div>
          </div>
          <div class="service-card col-md-4 col-sm-4">
            <div class="border"onclick="window.location.href = 'personal-loan.html'">
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="loanagainstfixed.jpg">
                <div class="overlay"> </div>
              </div>
              <div class="service-card-content">
                <h2>Loan against fixed account</h2>
                <hr>
                <p>Bank provides upto 90% loan against fixed saving with very low interest rate.</p>
              </div>
            </div>
          </div>
          <div class="service-card col-md-4 col-sm-4">
            <div class="border">
              <div class="service-card-image-wrapper">
                <img class="service-card-image" src="personal.jpg">
                <div class="overlay"> </div>
              </div>
              <div class="service-card-content">
                <h2>personal Loan</h2>
                <hr>
                <p>Bank provides Personal loan with hassle free processing and low interest rate</p>
              </div>
            </div>
          </div>
        </div>

      </div>




    </div>
  
    <!---------------------------message section-------------------------------------------->
    <div class="container-fluid  my-2 " id="con" >
      <p class="h1 text-center my-5 ">Contact us</p>
 
      <section class="mt-1">

        <!--Section heading-->
     
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any other inquiries? Please do not hesitate to get in touch with us. Within a few hours, a member of our team will contact you to assist you.</p>
      
        <div class="row px-4">
      
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5 px-4">
                <form action="mail.php"  method="post" class=" pos bg-light pt-5 py-2 mb-2 text-dark" style="max-width:500px;" >
      
                    <!--Grid row-->
                    <div class="row my-2">
      
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-2">
                               
                                <input type="text" class="input_field" name="name" required />
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->
      
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-3">
                                <input type="text" id="email" name="from_email" class="input_field" required>
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->
      
                    </div>
                    <!--Grid row-->
      
                    <!--Grid row-->
                    <div class="row my-2">
                        <div class="col-md-12">
                            <div class="md-form mb-3">
                                <input type="text" id="subject" name="subject" class="form-control" required>
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
      
                    <!--Grid row-->
                    <div class="row my-2">
      
                        <!--Grid column-->
                        <div class="col-md-12">
      
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                <label for="message">Your message</label>
                            </div>
      
                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="text-center text-md-left mb-5">
                      <input type="submit" name="send" value="send" class="btn-primary rounded-pill py-2">
                  </div>
      
                </form>
      
               
                <div class="status"></div>
            </div>
            <!--Grid column-->
            
            <!--Grid column-->
            <div class="col-md-1 text-end text-md-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-lg"></i>
                        <p>Kapan,Kathmandu,Nepal</p>
                    </li>
      
                    <li><i class="fas fa-phone-square mt-4 fa-lg"></i>
                        <p>9834556722</p>
                    </li>
      
                    <li><i class="fa fa-envelope-o mt-4 fa-lg"></i>
                        <p>xyzbanklimited1@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
      
        </div>
      
      </section>
      <!--Section: Contact v.2-->
    </div>
    <!-- Footer -->

    <footer class="page-footer font-small blue pt-4 bg-dark">

      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-5 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase text-white">XYZ BANK LIMITED</h5>
            <img src="lg.png" class="img" alt="xyz">

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3">

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase text-white">ABOUT US</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">News</a>
              </li>
              <li>
                <a href="#!">Find us</a>
              </li>
              <li>
                <a href="#!">Customer care</a>
              </li>
              <li>
                <a href="#!">Branches</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase text-white">Explore</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">M-banking</a>
              </li>
              <li>
                <a href="#!">Loan</a>
              </li>
              <li>
                <a href="#!">Remittance</a>
              </li>
              <li>
                <a href="#!">Deposit</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center text-white py-3">© 2022 Copyright:
        <a href="https://mdbootstrap.com/"> XYZ BAnk Limited</a> crafted by prajwol lama &sagar khadka.
      </div>
      <!-- Copyright -->

    </footer>

    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>

    <script>
     
      let btn=document.getElementById('bts');
      let body=document.body;
      let input=document.getElementById('search');
      bts.addEventListener('click',function(e){
       e.preventDefault;
       if(input.value!==null){
         let regex=new RegExp(input.value,"gi");
         console.log($&);
          body.innerHTML=(body.textContent).replace(regex,"<mark>$&</mark>");
      
       }
      });
    </script>
   
</body>

</html>
<!-- User IDHbLgqarY9puBa97zs
Access TokenS34eMUpOtYXdFRLBVBa_h -->