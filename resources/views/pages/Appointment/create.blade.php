@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Generate Your Public & Private keys</h1>
    <small>Note: A patient Must save these keys in the computer. And don't share private key with anyone.</small>
    </div>
    </section>
    
    <section class="content">


    <!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

    body{
      font-family: 'Montserrat', sans-serif;
      margin:0;
    }
    
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      align-content: center;
      flex-wrap: wrap;
      width: 80vw;
      margin: 0 auto;
      min-height: 100vh;
    }
    .btn {
      flex: 1 1 auto;
      margin: 0px;
      padding-left: 25px;
      padding-right: 25px;
      padding-top: 15px;
      padding-bottom: 15px;


      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: white;
      box-shadow: 0 0 20px #eee;
      border-radius: 10px;
     }
    
    
    .btn:hover {
      background-position: right center; 
    }
    
    .btn-1 {
      background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
    }
    
    .btn-2 {
      background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
    }
    
    .btn-3 {
      background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);
    }
    
    .btn-4 {
      background-image: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);
    }
    
    .btn-5 {
      background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 51%, #ffecd2 100%);
    }
    
</style>


<body>
<p style="font-size:1vm;">PrivateKey:  </p>
<p id="data1" style="font-size:0.9vw;"></p>
<p style="font: size 1vw;">PublicKey: </p>
<p id="data3" style="font-size:0.9vw;"></p>
<button class="btn btn-1" id="pizzaButton" onclick="displayResult()" >Generate</button>
</body>



<script>
    function displayResult() {
        fetch("http://18.190.167.136:3001/eth-crypto").then(
res => {
res.json().then(
 data => {
   console.log(data);
   document.getElementById('data1').innerHTML = data.privateKey
   document.getElementById('data3').innerHTML = data.publicKey


 }
)
}
)
document.getElementById("pizzaButton").onclick = null;
    }
    </script>

</html>




    </section>
    </div>
@endsection