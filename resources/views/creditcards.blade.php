@include('layout.header')

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Asap&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Asap", sans-serif;
}


section:nth-child(1){
  color:green;
  }
section:nth-child(2){
  color: #42455a;
  background: #e0ffff;
} 
section:nth-child(3){
  color: #e0ffff;
}
section:nth-child(4){
  color: #42455a;
  background: #e0ffff;
}

section h1{
  font-size: 3rem;
  margin: 20px;
}
section h2{
  font-size: 40px;
  text-align: center;
  text-transform: uppercase;
}
section .text-container{
   display: flex;
}
section .text-container .text-box{
  margin: 20px;
  padding: 20px;
  /* background:#F2994A; */

}
section .text-container .text-box h3{
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 10px;
}

@media (max-width: 900px){
  section h1{
    font-size: 2rem;
    text-align: center;
  }
  section .text-container{
    flex-direction: column;
  }
}

.reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 1s all ease;
}

.reveal.active{
  transform: translateY(0);
  opacity: 1;
}
    </style>
    <script>
        function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
        </script>
  <body class="page-opt-nocalc page basicpage">
    <div class="home-page-layout cm-page-container">
        <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12" style="background-color:white">
            <div class="row">
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                          
                      
                                <img class="d-block w-100"
                                    src="https://img.freepik.com/free-vector/mobile-banking-app-epayment-by-smartphone-electronic-credit-card-phone-wallet-online-banking_3482-5772.jpg?w=996"
                                    alt="Second slide" style="height:300px">
                            </div>

                            <div class="carousel-item"> 
                                <img class="d-block w-100"
                                    src="https://img.freepik.com/free-vector/3d-mobile-phone-with-gold-coin-digital-transfer-into-credit-card-online-payment-transaction-concept-business-mobile-app-banner-cartoon-realistic-style-vector-illustration_257312-2115.jpg?w=900"
                                    alt="Second slide" style="height:300px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://img.freepik.com/free-vector/vector-illustration-realistic-style-concept-mobile-payments-using-application-your-smartphone_1441-231.jpg?t=st=1656318802~exp=1656319402~hmac=f7b153be7afc6611ef66e8b0707cac7cd5c054ee7cb0ba3a555bdf5d2621a52b&w=740"
                                    alt="Third slide" style="height:300px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>...</h5>
                                    <p>...</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                 <div class="col-md-3">
                 <div class="container">
                    <form style="padding: 15px;">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div> 
                </div>
            </section>
            </div>


        </div>
</div>
    </div>

</section>
<!--  -->
<section>
  <div class="container">
    <div class="row">
      <h3>Credit Cards</h3>
    </div>
      <div class="row">
        <div class="col-lg-3">
          <a href="/standardcharted">
            <div class="card">
              <div class="card-body">
              <img src="https://img.freepik.com/free-vector/vector-illustration-people-are-trying-pay-off-loan-from-credit-card-debt-short-term-consumer-debt-with-low-interest-more-difficult-pay-off-can-use-web-website-apps-poster-banner-flyer_4968-1713.jpg" style="height:200px;width:300px"/>
</div>

<div class="card-header">

  <h4>Standard Charted </h4>
</div>
            </div>
</a>
        </div>
        <div class="col-lg-3">
          <a href="/sbi">
            <div class="card">
            <div class="card-body">
              <img src="https://www.sbicard.com/creditcards/resources/img/digi-col-login.png" style="height:200px;width:300px"/>
</div>

<div class="card-header">

  <h4>SBI </h4>
</div>
            </div>
</a>
        </div>
        <div class="col-lg-3">
          <a href="/icici">
            <div class="card">
                <div class="card-body">
              <img src="https://images.fintra.co.in/cms/how-to-pick-credit-cards-2.png" style="height:200px;width:300px"/>
</div>

<div class="card-header">

  <h4>ICICI </h4>
</div>
            </div>
</a>
        </div>
        <div class="col-lg-3">
          <a href="/hdfc">
            <div class="card">
            <div class="card-body">
              <img src="https://cdnapp.indialends.com//livesite/Images/cc-generic/how-it-works-img.svg" style="height:200px;width:300px"/>
</div>
<div class="card-header">

  <h4>HDBC</h4>
</div>
            </div>
        </div>
</a>
      </div>
  </div>
</section>   

    <section>
  <div class="container reveal">
  
    <div class="text-container">
      <div class="text-box" style="max-width:250px">
      <img src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img,w_63,h_63/https://www.siliceo.es/wp-content/uploads/2021/04/icon.png" style="height:100px;width:100px"/>
        <h3 style="color:black">Standard Carted</h3>
        <p class="text-warning">
        Standard Chartered Bank credit cards come with plenty of reward points, cashback, discounts and offers
        </p>
      </div>
      <div class="text-box" style="max-width:250px">
      <img src="https://freeiconshop.com/wp-content/uploads/edd/creditcard-flat.png" style="height:100px;width:100px"/>
        <h3 style="color:black">SBI</h3>
        <p class="text-warning">
        The applicant requesting for an SBI credit card is a resident of India.
        SBI is the largest state-owned banking and financial services company in India.
        </p>
      </div>
      <div class="text-box" style="max-width:250px">
      <img src="https://cdn-icons-png.flaticon.com/512/667/667073.png" style="height:100px;width:100px"/>
        <h3 style="color:black">ICICI</h3>
        <p class="text-warning">
        The card offers various benefits, such as reward points, dining discount, fuel surcharge waiver and more.
        </p>
      </div>
      <div class="text-box" style="max-width:250px">
      <img src="https://cdn-icons-png.flaticon.com/512/3190/3190478.png" style="height:100px;width:100px"/>
        <h3 style="color:black">HDFC</h3>
        <p class="text-warning">
        
HDFC MoneyBack is a suitable credit card for beginners because of a comparatively lower income requirement and low annual fee.
        </p>
      </div>
    </div>
  </div>
</section>

<section>
        <div class="container mt-5"  data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="https://img.freepik.com/free-vector/vector-illustration-man-using-computer-laptop-sitting-top-credit-card-shopping-online_253672-156.jpg?w=740" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <h3>Credit Card</h3>
          <p class="text-box">A credit card is a thin rectangular piece of plastic or metal issued by a bank or financial services company, that allows cardholders to borrow funds with which to pay for goods and services with merchants that accept cards for payment. Credit cards impose the condition that cardholders pay back the borrowed money, plus any applicable interest, as well as any additional agreed-upon charges, either in full by the billing date or over time.</p>
          <p>
A credit card is a type of credit facility, provided by banks that allow customers to borrow funds within a pre-approved credit limit. It enables customers to make purchase transactions on goods and services.</p>
          </div>
</div>
        </div>
    </section>

    <section class="section-padding  doctors-team-style-2" style="padding: 44px 0px 22px 0px;height:500px">
        <div class="container">
            <div class="section-header">
                <div class="section-heading " style="">
                               <h3>Funds House</h3>
                </div>
            </div>
            <div class="row">
           
                <div class="col-12 no-padding" >
                    <div class="doctors-slider" >
                  
                        <div class="slide-item col-12" >
                        
                            <div class="team-block p-relative" >
                                <div class="inner-box" style="height:150px">
                               
                                
                                   <div class="row">
                                   <div class="col-lg-12">
                                    <div>
                                        <center>
            <img src="http://loanbeku.com/wp-content/uploads/2017/10/Tata-Capital-bank.png"/>
</center>
</div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="height:150px">
                                   
                                   <div class="row">
                                   <div class="col-lg-12">
                                    <div>
                                        <center>
            <img src="https://logos-world.net/wp-content/uploads/2020/11/HDFC-Bank-Logo.png"/>
</center>
</div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="height:150px">
                                   
                                   <div class="row">
                                   <div class="col-lg-12">
                                    <div>
                                    <center>
            <img src="https://orissadiary.com/wp-content/uploads/2018/08/264279_528701413838836_555702680_n-768x448.png"/>
</center>
</div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box"style="height:150px">
                                   
                                   <div class="row">
                                   <div class="col-lg-12">
                                    <div>
                                        <center>
                                        <img src="http://weeassure.com/assets/images/shriram-transport-finance.png"/>
</center>
</div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="height:150px">
                                 
                                   <div class="row">
                                   <div class="col-lg-12">
                                    <div>
                                    <center>
                                        <img src="https://www.govnokri.in/wp-content/uploads/2020/02/EXIM-Bank.png"/>
</center>
</div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="height:150px">
                                   
                                   <div class="row">
                                   <div class="col-lg-12">
                                    <div>
                                    <center>
                                        <img src="https://pbs.twimg.com/media/EbRWhnmUMAA6YCc.jpg"/>
</center>
</div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box" style="height:150px">
                                 
                                   <div class="row">
                                   <div class="col-lg-12">
                                    <div>
                                    <center>
                                        <img src="https://21btrj3i7vy42n2f4044931p-wpengine.netdna-ssl.com/wp-content/uploads/2021/09/Bank-of-baroda.jpg"/>
</center>
</div>
                                        </div>
                                   </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


@include('layout.footer')