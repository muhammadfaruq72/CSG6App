@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

<section class="content-header">
    <div style="padding-top:0px; margin-bottom: -30px;" class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div style="padding-top:0px; margin-bottom: -30px;" class="header-title">

    <div class="row">
    <div class="form-group col-md-4">
    <h1>Welcome <?php echo Auth::user()->name ?></h1>
    <small></small>
    </div>

    <div class="form-group col-md-4">
        <div class="">


<!DOCTYPE html>
<html>
<body style="text-align:left;" id="body">
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


      padding-left: 25px;
      padding-right: 25px;
      padding-top: 10px;
      padding-bottom: 10px;


      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: Black;
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
      background-image: linear-gradient(to right,#fbc2eb 0%,#a6c1ee 51%,#fbc2eb 100%);
    }
    
    .btn-3 {
      background: #84fab0;
      background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%);
      margin-left: 290px;
      margin-bottom: 0;
      margin-top: -57px;
    }
    
    .btn-4 {
      background-image: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);
    }
    
    .btn-5 {
      background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 51%, #ffecd2 100%);
    }
    

  table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, tr {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

    <p>
        <!-- Making a text input -->
        <input style="margin-top:5px; margin-left:15px;" class="form-control" type="text" id="key" placeholder="Enter Your Private Key...">
        
        <!-- Button to send data -->
        <button style="margin-left:290px;" id="button" class="btn btn-3" onclick="sendJSON().button.style.display = 'none'" >Show History</button>

    
</p>

<!-- Include the JavaScript file -->
<script>
        function sendJSON(){

let key = document.querySelector('#key');

// Creating a XHR object
let xhr = new XMLHttpRequest();
let url = "http://18.190.167.136:3001/showUP";

// open a connection
xhr.open("POST", url, true);

// Set the request header i.e. which type of content you are sending
xhr.setRequestHeader("Content-Type", "application/json");

// Create a state change callback
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {

        // Print received data from server
        var value = JSON.parse(this.responseText);
        console.log(value);
        document.getElementById("button").innerHTML="Done";
        document.getElementById('key').disabled = true;
        document.getElementById("button").onclick = null;
        console.log(value);
        if (value.length > 0) {

        var temp = "";
value.forEach((itemData) => {
  temp += "<tr>";
  temp += "<td>" + itemData.title + "</td>";
  temp += "<td>" + itemData.gender + "</td>";
  temp += "<td>" + itemData.birth + "</td>";
  temp += "<td>" + itemData.doctor + "</td>";
  temp += "<td>" + itemData.hospital + "</td>";
  temp += "<td>" + itemData.age + "</td>";
  temp += "<td>" + itemData.laboratory + "</td>";
  temp += "<td>" + itemData.phone + "</td>";
  temp += "<td>" + itemData.address + "</td>";
  temp += "<td>" + itemData.blood + "</td></tr>";
});
document.getElementById('data').innerHTML = temp;
}

    }
};

// Converting JSON data to string
var data = JSON.stringify({ "key": key.value});

// Sending data with the request
xhr.send(data);

}

</script>


</body>
</html>

        </div>
        </div>
        </div>

    </div>
    </section>

    <div class="row">

        <div class="col-sm-12">
            <section class="content">
                <div class="panel panel-bd">
                    <div class="panel-heading no-print">
                        <div class="btn-group">
                            <h4>Patient's History</h4>
                        </div>
                    </div>
                                            
                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    <title>Document</title>
</head>
<body>

<div style="overflow-x:auto;">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth</th>
         <th>Doctor</th>
        <th>Hospital</th>
        <th>Age</th>
         <th>Covid-19 Test</th>
         <th>Phone</th>
        <th style="padding-left: 60px; padding-right: 60px;" >Details</th>
        <th>Blood</th>
      </tr>
    </thead>
    <tbody id="data">

    </tbody>
  </table>
</div>



</body>
</html>
                </div>
            </section>
        </div>
    </div>

</div>

@endsection