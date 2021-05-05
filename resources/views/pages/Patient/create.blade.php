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
    <h1>Add Patient Details</h1>
    <small>Add Patient Details</small>
    </div>

    <div class="form-group col-md-4">
        <div class="">


        <!DOCTYPE html>
<html>
<body style="text-align:left;" id="body">
<style>

.wpb_row.main_row.no-seperator
{padding-top:0px !important; padding-bottom:0px !important;}



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
    
</style>

    <p>
        <!-- Making a text input -->
        <input style="margin-top:0px; margin-left:5px;" class="form-control" type="text" id="key" placeholder="Patient's public key...">
        
        <!-- Button to send data -->
        <button style="margin-left:290px;" id="button" class="btn btn-3" onclick="sendJSON().button.style.display = 'none'" >Add Key</button>

    
</p>

<!-- Include the JavaScript file -->
<script>
        function sendJSON(){

let key = document.querySelector('#key');

// Creating a XHR object
let xhr = new XMLHttpRequest();
let url = "http://18.190.167.136:3001/PostPublicKey";

// open a connection
xhr.open("POST", url, true);

// Set the request header i.e. which type of content you are sending
xhr.setRequestHeader("Content-Type", "application/json");

// Create a state change callback
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {

        // Print received data from server
        var value = JSON.parse(this.responseText).note;
        console.log(value);
        document.getElementById("button").innerHTML=value;
        document.getElementById('key').disabled = true;
        document.getElementById("button").onclick = null;


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
    
    <section class="content">
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-bd">
    <div class="panel-heading ">
    <div class="panel-title" style="max-width: calc(100% - 180px);">
    <h4>Add Patient Details</h4>
    </div>
    </div>
    <div class="panel-body">
    <div class="portlet-body form">
    <form action="{{URL::to('Patient')}}" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        @csrf
    <input type="hidden" name="csrf_test_name" value="d72b3d8092bc2e18e33a4e84ca112381">
    <div class="form-body">
    <div class="row">
    <div class="form-group col-md-4">
    <label class=" control-label"> Name </label>
    <div class="">
    <input type="text" name="title" class="form-control" value="" placeholder="Name">
    </div>
    </div>

    <div class="form-group col-md-4">
        <label class=" control-label"> Covid-19 Test </label>
        <div class="">
        <input type="text" name="laboratory" class="form-control" value="" placeholder="+ve/-ve">
        </div>
        </div>
   
    </div>
    <div class="row">
    
    <div class="form-group col-md-4">
    <label class=" control-label"> Gender</label>
    <div class="">
    <input type="radio" id="checkbox2_5" name="gender" required="" value="Male">
    <label for="checkbox2_5"> Male</label>
    <input type="radio" id="checkbox2_10" name="gender" required="" value="Female">
    <label for="checkbox2_10"> Female</label>
    <input type="radio" id="checkbox2_0" name="gender" required="" value="other">
    <label for="checkbox2_0"> Others</label>
    </div>
    </div>
    <div class="form-group col-md-4">
    <label class=" control-label">Birth date</label>
    <div class=" ">
    <input type="text" name="birth" value="" class="form-control datepicker1 birth_date hasDatepicker" placeholder="yyyy-mm-dd" id="dp1610797985489">
    </div>
    <div class="">
    <input type="text" name="age" id="old" class="form-control" placeholder="Age">
    </div>
    </div>
    </div>
    <div class="row">
    
    <div class="form-group col-md-4">
    <label class=" control-label"> Phone Number</label>
    <div class="">
    <input type="text" name="phone" value="" class="form-control" required="" placeholder="Phone Number">
    <span class="text-danger"></span>
    </div>
    </div>
   
    <div class="form-group col-md-4">
        <label class=" control-label">Doctor</label>
        <div class="">
            <select class="form-control doctor_id" id="doctor_id" onchange="if (!window.__cfRLUnblockHandlers) return false; loadSchedul(this.value);" name="doctor" required="">
                <option value="">--Select doctor--</option>
                @foreach ($doctor as $item)
               <option value="<?php echo \Crypt::decryptString($item->name)?>"><?php echo \Crypt::decryptString($item->name)?></option>
                @endforeach
            
            </select>
        </div>
        </div>
        <div class="form-group col-md-4">
        <label class=" control-label">Hospital</label>
        <div>
            <select class="form-control doctor_id" id="doctor_id" onchange="if (!window.__cfRLUnblockHandlers) return false; loadSchedul(this.value);" name="hospital" required="">
                <option value="">--Select Hospital--</option>
                @foreach ($hospital as $item)
                <option value="<?php echo \Crypt::decryptString($item->title)?>"><?php echo \Crypt::decryptString($item->title)?></option>
                @endforeach
            
            </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="form-group col-md-8">
    <label class="control-label"> Patient's Detail</label>
    <div class="">
    <textarea name="address" id="editor1" class="form-control" rows="3"></textarea>
    </div>
    </div>
    </div>
    <div class="row">
    {{-- <div class="form-group col-md-4">
    <label class="" control-label"="">Post Code</label>
    <div class="">
    <input type="text" value="" class="form-control" name="p_code">
    </div>
    </div> --}}
    <div class="form-group col-md-4">
    <label class="control-label">Blood Group </label>
    <div class="">
    <select class="form-control" name="blood">
    <option value="">--Select Blood Group--</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="Unknown">Unknown</option>
    </select>
    </div>
    </div>
    </div>
    </div>


    <div class="form-group row">
    <div class="col-offes-3 col-md-4" style="margin-right:15px;">
    <button class="btn btn-1"  type="reset" >Reset</button>
    <button class="btn btn-2"  type="submit" >Submit</button>
    </div>
    </div>
    </form> </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
@endsection