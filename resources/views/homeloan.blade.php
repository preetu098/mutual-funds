@include('layout.calculatorheader')
<link href="https://cdn.usebootstrap.com/bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.usebootstrap.com/bootstrap/5.0.1/js/bootstrap.min.js" rel="stylesheet"/>
<script src="https://cdn.usebootstrap.com/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<style>
    #loanamount
    {
        height:50px;
        width:200px;
        font-size:20px;
    }
</style>
<script>
function amount()
{
    var range=document.getElementById("setamount").value;
    document.getElementById("amount").innerHTML=range;
    document.getElementById("loanamount").value=range;
}
</script>
     <div class="container" style="margin-top:100px;">
    <div style="width:400px">
    <div class="row">
       <h4> RS.<input type="text" id="loanamount" readonly/></h4>
    </div>
        <div class="row mt-5">
            <h3>LOAN AMOUNT</h3>
            <input type="range" id="setamount" onchange="amount()" value="100000" max="10000000"/><br>
           <h4> <span id="amount" class="text-warning">1000</span></h4>
        </div>
        <div class="row mt-5">
            <h3>TENURE(YEARS)</h3>
            <input type="range" value="10000" max="10000000"/>
        </div>
        <div class="row mt-5">
            <h3>INTERST RATE</h3>
            <input type="range"/>
        </div>
</div>
     </div>    

