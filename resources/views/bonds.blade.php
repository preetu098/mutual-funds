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
    <div class="container mt-5">
    <div class="row">
            <div class="col-lg-4">
                    <div class="card cardborderless" id="cardhover">
                    
                            <img src="https://cdn.fundsindia.com/prelogin/person-with-locker.webp?auto=format&fit=max&w=384" style="height:200px"/>
                    
                    </div>
            </div>
            
            <div class="col-lg-8">
            <div class="card cardborderless">
                           
                           <p>A bond fund, also referred to as a debt fund, is a pooled investment vehicle that invests primarily in bonds (government, municipal, corporate, convertible) and other debt instruments, such as mortgage-backed securities (MBS). The primary goal of a bond fund is often that of generating monthly income for investors.</p>
                            
                    </div>
            </div>
           
    </div>
    <div class="row">
          
            
            <div class="col-lg-6 mt-5">
            <div class="card cardborderless">
                          
            <p>A bond fund, also referred to as a debt fund, is a pooled investment vehicle that invests primarily in bonds (government, municipal, corporate, convertible) and other debt instruments, such as mortgage-backed securities (MBS). The primary goal of a bond fund is often that of generating monthly income for investors.</p>
                               
                           
                    </div>
            </div>
            <div class="col-lg-6">
            <div class="card cardborderless" id="cardhover">
                    
                    <img src="https://cdn.fundsindia.com/prelogin/one-platform.webp?auto=format&fit=max&w=384" style="height:200px"/>
            
            </div>
            </div>
    </div>
    </div>
    <div class="container mt-5">
    <div class="row">
    <div class="col-lg-12">
            <div class="card">
                <div class="card-body" style="border-top-left-radius:20px;height:300px;">
                    sqwswswswswqs
                </div>
            </div>
    </div>
    </div>
    </div>
@include('layout.footer')