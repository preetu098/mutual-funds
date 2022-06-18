@include('layout.header')
<style>
   #cardhover
    {
        transition:all 5s;
      border:0px;
    }
#cardhover:hover 
{

transform:scale(1.1);
box-shadow:2px 2px 2px 2px black;
}
.cardborderless
{border:0px;}
</style>
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
                                    src="http://www.usnews.com/cmsmedia/2b/39/5ab3fbcb493f8a65f6de03ca4b5c/150123-budget-stock.jpg"
                                    alt="First slide" style="height:300px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>...</h5>
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="carousel-item"> 
                                <img class="d-block w-100"
                                    src="https://www.sbimf.com/campaign/sip_generic/images/Banner02.gif"
                                    alt="Second slide" style="height:300px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://tradingetfs.com/wp-content/uploads/2019/08/long-bond-fund-poised-to-hit-new-highs.jpg"
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
 
    
    <div class="container" style="margin-top:100px">
    <div class="row">
    <div class="col-lg-12">
           
    </div>
    </div>
    </div>
     <!-- Start Faqs -->
     <section class="section-padding loan-faqs-sec bg-light-white findrate-top">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="findratesec">
                       <div class="row">
                            <div class="col-sm-3">
                                <img src="https://www.iiflwealth.com/sites/default/files/iifl-inverse-logo.png" style="height:40px;" />
                            </div>
                            <div class="col-sm-3">
                                <img src="https://muthootgold.in/images/logo.png"style="height:40px;" />
                            </div>
                            <div class="col-sm-3">
                                <img src="http://weeassure.com/assets/images/shriram-transport-finance.png"style="height:40px;" />
                            </div>
                            <div class="col-sm-3">
                                <img src="https://www.timesofassam.com/wp-content/uploads/2011/03/SBI.png" style="height:40px;"/>
                            </div>
                       </div>

                    </div>
                </div>
            </div>
            
        </div>

    </section>
    <!-- End Faqs -->
    <!-- Start Footer -->
    <footer class="bg-black section-padding footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box mb-md-80">
                        <div class="footer-heading">
                            <h4 class="text-custom-white no-margin">Useful Links</h4>
                        </div>
                        <ul class="custom links">
                            <li> <a href="about.html" class="text-custom-white">About Us</a>
                            </li>
                            <li> <a href="service.html" class="text-custom-white">Service</a>
                            </li>
                            <li> <a href="blog.html" class="text-custom-white">Blog</a>
                            </li>
                            <li> <a href="team.html" class="text-custom-white">Team</a>
                            </li>
                            <li> <a href="contact.html" class="text-custom-white">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box mb-md-80">
                        <div class="footer-heading">
                            <h4 class="text-custom-white no-margin">Featured Post</h4>
                        </div>
                       
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box mb-xs-80">
                        <div class="footer-heading">
                            <h4 class="text-custom-white no-margin">Quick link</h4>
                           
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box">
                        <div class="footer-heading">
                            <h4 class="text-custom-white no-margin">News Letter</h4>
                        </div>
                      
                        <div class="social-media">
                            <ul class="custom social-media">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="payment-logo mb-md-20"> <span class="text-custom-white fs-14 mr-3">We are
                            accept</span>
                        <div class="payemt-icon">
                            <img src="assets1/images/accept1" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-custom-white no-margin">© Helois - 2020 | All Right Reserved. <a href=""
                            target="_blank" class="text-custom-white"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@include('layout.footer')