@include('layout.header')
<style>
.searchPart
{
    height:400px;
    width:100%;
    background-image:url('https://img.freepik.com/free-photo/businessman-holding-jar-coins-with-small-tree-growing-up_28629-1395.jpg?w=826');
    background-repeat:no-repeat;
    background-size:cover;
    
}
input[type='search']
{
    width:500px;
    height:50px;
    margin-top:200px;
    background:transparent;
    font-size:30px;
    font-family:inherit;
}
table tr td 
{
    font-family:inherit;
    font-size:18px;
}
</style>
<!--
start search company code    !-->
<script>
    function search()
    {
        var search=document.getElementById('search').value;
        window.localStorage.setItem('search',search);
        window.location='/searchCompany';
    }
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
                                    src="http://epr.com.my/wp-content/uploads/2015/12/Pre-IPO-epr.jpg"
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
                                    src="C:/Users/DELL/Desktop/Rajesh Sir Mutual Fund Project Data/maxresdefault.jpg"
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
    <!-- Start Team Doctors -->
   
    <!-- End Team Doctors -->
    <!-- start lw-tab -->
    <center>
        <!-- <section style="height:600px;">
        <div class="container" >
            <h3 class="text-warning">Top Recommendations</h3>
           
           <div class="row" >
            
            <div class="col-lg-4" style="height:300px;">
                <h4 class="text-info">Reliance Retail</h4>
                <img src="https://logodownload.org/wp-content/uploads/2019/10/reliance-industries-logo-1.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Tata Technology</h4>
            <img src="https://naftp.tatatechnologies.com/images/logo/TATA-and-Tata-Technologeis-STACKED-BLUE.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
        <h4>Studds Accessories</h4>
        <img src="https://cdn4.iconfinder.com/data/icons/fashion-vol-1/72/28-512.png" style="height:100px;width:200px"/>
            </div>
           </div>
           <div class="row">
            <div class="col-lg-4" style="height:300px;">
            <h4>Chennai Super King</h4>
        <img src="https://www.nsbpictures.com/wp-content/uploads/2019/03/chennai_super_kings_logo_freelogovectors.net_.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Care Health</h4>
        <img src="https://freepngimg.com/download/health/67606-green-healthcare-medicine-health-care-icon.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Capegemini Technology</h4>
        <img src="https://jobseekers.vn/wp-content/uploads/2019/03/capgemini-logo-2.png" style="height:100px;width:200px"/>
            </div>
           </div>
</center>
        </div>
    </section> -->
 
    <!-- <div class="container-fluid mb-5">
        <div class="container text-center ">
        
            <h3 class="text-warning">Top Recommendations</h3>
           
           <div class="row" >
            
            <div class="col-lg-4" style="height:300px;">
                <h4 class="text-info">Reliance Retail</h4>
                <img src="https://logodownload.org/wp-content/uploads/2019/10/reliance-industries-logo-1.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Tata Technology</h4>
            <img src="https://naftp.tatatechnologies.com/images/logo/TATA-and-Tata-Technologeis-STACKED-BLUE.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
        <h4>Studds Accessories</h4>
        <img src="https://cdn4.iconfinder.com/data/icons/fashion-vol-1/72/28-512.png" style="height:100px;width:200px"/>
            </div>
           </div>
           <div class="row">
            <div class="col-lg-4" style="height:300px;">
            <h4>Chennai Super King</h4>
        <img src="https://www.nsbpictures.com/wp-content/uploads/2019/03/chennai_super_kings_logo_freelogovectors.net_.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Care Health</h4>
        <img src="https://freepngimg.com/download/health/67606-green-healthcare-medicine-health-care-icon.png" style="height:100px;width:200px"/>
            </div>
            <div class="col-lg-4" style="height:300px;">
            <h4>Capegemini Technology</h4>
        <img src="https://jobseekers.vn/wp-content/uploads/2019/03/capgemini-logo-2.png" style="height:100px;width:200px"/>
            </div>
           </div>
            <!-- <h1 class="text-white display-3 mb-5">Logistics Services</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Track & Trace</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</center> -->
<!--start recommendation-->
<section class="section-padding  doctors-team-style-2" style="padding: 0px 0px 22px 0px;">
        <div class="container">
            <div class="section-header">
                <div class="section-heading " style="margin-top:50px">
                   <h3>Top Recommendation</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 no-padding">
                    <div class="doctors-slider">
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                        <center>
                                        <!-- <h4 class="text-info">Reliance Retail</h4> -->
                <img src="https://1000logos.net/wp-content/uploads/2021/08/Reliance-Industries-Limited-RIL-Logo-1966.png" style="height:100px;width:100px"/>
                                        </center>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://naftp.tatatechnologies.com/images/logo/TATA-and-Tata-Technologeis-STACKED-BLUE.png" style="height:100px;width:100px"/>
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://cdn4.iconfinder.com/data/icons/fashion-vol-1/72/28-512.png" style="height:100px;width:100px"/>
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://www.nsbpictures.com/wp-content/uploads/2019/03/chennai_super_kings_logo_freelogovectors.net_.png" style="height:100px;width:100px"/>
                                    </center>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://freepngimg.com/download/health/67606-green-healthcare-medicine-health-care-icon.png" style="height:100px;width:100px"/>
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-block p-relative">
                                <div class="inner-box">
                                    <div class="lower-content p-relative text-center">
                                    <center>
                                    <img src="https://jobseekers.vn/wp-content/uploads/2019/03/capgemini-logo-2.png" style="height:100px;width:100px"/>
                                    </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End recommendation Process -->
    <!-- Start why choose us -->
 <!-- Header Start -->
 
 <div class="jumbotron jumbotron-fluid"  style="background-image:url('https://fundsindiacloudfront.s3.ap-south-1.amazonaws.com/LP/iPo/Group+410.svg');background-repeat:no-repeat;">
        <div class="container text-center" style="height:300px">
           
            <div class="mx-auto" style="width: 100%; max-width: 600px;margin-left:100px">
                <div class="input-group">
              
                    <input type="text" class="form-control border-dark" style="padding: 30px;" placeholder="Search By Company name" id="search">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3" type="submit" onclick="search()">Search </button>

                    </div>&nbsp&nbsp&nbsp&nbsp
                    <button class="btn btn-warning"><a href="">Explore All Pre_IPO</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
   <div class="container">
    <div class="row">
        
        <div class="col-lg-8">
            <h4>What is Pre-IPO?</h4>
            <p>As the name suggests before IPO and these include equity shares of a company that is not listed on BSE/NSE, these shares are traded over the counter (OTC), and they are often called OTC securities. These companies can be companies that are privately held, formerly public companies taken private in management buyouts, public companies which are not yet listed on a recognized stock exchange, etc.
</p>
<p>These companies often enjoy a healthy growth rate and have industry-leading future prospects. These unlisted shares, especially at the Pre-IPO stage, provide an excellent investment opportunity mainly focusing on long-term wealth creation. The returns can potentially beat returns by listed equities.
</p>
        </div>
        <div class="col-lg-4">
            <img src="https://static.wixstatic.com/media/00a0e0_b17cd951149d43f99a0bd7c329b4ec92~mv2.gif" style="height:300px;width:300px;"/>
        </div>
    </div>
   </div>
       <!-- Table Format!-->
    <div class=" mx-auto table-shrink" style="width:80%;margin-top:20px;">
   
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                   

                        <div class=" mb-0 fixed-solution" data-pattern="priority-columns" style="height: 500px;overflow: scroll;">
                          
                            <table class="table table-hover table-fixed" id="tech-companies-1"  >
                              
                               
                                 
                                    <tr style="color:white;background-color:#3CB371">
                                                        <th>Company Name</th>
                                                        <th>ISIN NUMBER</th>
                                                        <th>Market Price</th>
                                                        <th>Rating</th>
                                                        
                                                        <th>Process</th>
                                                    </tr>
                              
                                    <tr>
                                        
                                      
                                        <td>Bagrrys India Limited</td>
                                        <td>INE229F0102</td>
                                        <td>1995</td>
                                        <td>Rating</td>
                                  
                                        <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                             
                                    </tr>
                                    <tr>
                                        
                                        <td>Bikaji Foods International Ltd.</td>
                                        <td>INE00E101023</td>
                                        <td>400</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                     
                                    </tr>
                                    <tr>
                                        
                                        <td>Auckland jute (CDSL only)</td>
                                        <td>NULL</td>
                                        <td>55</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                     
                                    </tr>
                                    <tr>
                                       
                                        <td>Care Health Insurance(Religare)</td>
                                        <td>INE957N01016</td>
                                        <td>155</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                      
                                    </tr>
                                    <tr>
                                        
                                        <td>Goa Shipyard Limited</td>
                                        <td>INE178Z01013</td>
                                        <td>300</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                      
                                    </tr>
                                    <tr>
                                        
                                        <td>ICL Fincorp</td>
                                        <td>INE01CY01013</td>
                                        <td>29</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td>Kannur International Airport</td>
                                        <td> INE02Y401013</td>
                                        <td>122</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                               
                                    <tr>
                                        
                                        <td>Metropolitan Stock Exchange</td>
                                        <td>INE312K01010</td>
                                        <td>1.4</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>

                                    <tr>
                                        
                                        <td>PNB Metlife (NSDL only)</td>
                                        <td>INE207O01014</td>
                                        <td>62</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Reliance Retail</td>
                                        <td>INE742O01010</td>
                                        <td>3200</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>HDFC Securities Limited</td>
                                        <td>INE700G01014</td>
                                        <td>14700</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>A V Thomas & Co. Limited</td>
                                        <td>INE944K01010</td>
                                        <td>13985</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Anugraha Valve Casting</td>
                                        <td>INE629Z01015</td>
                                        <td>455</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Arkfin Investments Private Limited</td>
                                        <td> INE06EK01017</td>
                                        <td>54</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Asian Bearings Ltd.</td>
                                        <td>NULL</td>
                                        <td>4</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Arraycom India Ltd.</td>
                                        <td>NULL</td>
                                        <td>108</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>AB Corp Ltd.</td>
                                        <td>NULL</td>
                                        <td>12</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>

                                    <tr>
                                        
                                        <td>Ahmedabad Stock Exchange - (NSDL Only)</td>
                                        <td>NULL</td>
                                        <td>58</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Amalgamation Repco Ltd.</td>
                                        <td>NULL</td>
                                        <td>528</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Anand I-Power Limited</td>
                                        <td>NULL</td>
                                        <td>33</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                   
                                    <tr>
                                        
                                        <td>Vikram Solar Ltd.</td>
                                        <td>NULL</td>
                                        <td>370</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Transformers & Electricals Kerala Limited</td>
                                        <td>NULL</td>
                                        <td>90</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Merind Ltd.</td>
                                        <td> NULL</td>
                                        <td>390</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>

                                    <tr>
                                        
                                        <td>Kusum Industries Gases Limited</td>
                                        <td> NULL</td>
                                        <td>592</td>
                                        <td>Rating</td>
                                  
                                  <td><button class="btn" style="color:white;background-color:#3CB371">Report<button>&nbsp&nbsp&nbsp<button class="btn" style="color:white;background-color:#3CB371">Invest Now<button></td>
                                    </tr>
                               
                            </table>
                            </div>
                        </div>
                    </div>
             
            </div>
        </div>
    </div>
    <!-- End Faqs -->
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
                        <!-- <ul class="custom popular_post">
                            <li>
                                <div class="post">
                                    <div class="post-wrapper">
                                        <div class="popular_post_img animate-img">
                                            <a href="blog-single.html">
                                              
                                            </a>
                                        </div>
                                        <div class="popular_post_title">
                                            <h6><a href="blog-single.html" class="text-custom-white fs-14 fw-400">8
                                                    Tips to Help You Finding New Home</a></h6>
                                            <div class="post-date">
                                                <p class="text-white no-margin">March 20 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post">
                                    <div class="post-wrapper">
                                        <div class="popular_post_img animate-img">
                                            <a href="blog-single.html">
                                                <img src="assets1/images/featuredpost2" class="img-fluid image-fit"
                                                    alt="#">
                                            </a>
                                        </div>
                                        <div class="popular_post_title">
                                            <h6><a href="blog-single.html"
                                                    class="text-custom-white fs-14 fw-400">Bedroom Colors You'll
                                                    Never Regret</a></h6>
                                            <div class="post-date">
                                                <p class="text-white no-margin">09 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box mb-xs-80">
                        <div class="footer-heading">
                            <h4 class="text-custom-white no-margin">Quick link</h4>
                            <!-- <ul class="custom links">
                                <li> <a href="about.html" class="text-custom-white">Privacy Policy</a>
                                </li>
                                <li> <a href="service.html" class="text-custom-white">Terms & Conditions</a>
                                </li>
                                <li> <a href="blog.html" class="text-custom-white">Career</a></li>

                            </ul> -->
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-box">
                        <div class="footer-heading">
                            <h4 class="text-custom-white no-margin">News Letter</h4>
                        </div>
                        <!-- <div class="newsletter">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-custom"
                                        placeholder="Email Id">
                                </div>
                                <button class="btn-first btn-submit-fill btn-height full-width"
                                    type="submit">Subscribe</button>
                            </form>
                        </div> -->
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
