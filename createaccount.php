<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign up</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="createuserjs.js"></script>

<style>
  *{
    scroll-behavior:smooth; 
    transition:.4s;
  }
  .aa{
  text-decoration:none;
  color:white;
  font-style:bold;
  padding:10px;
  background:#5cb85c;
  }
  .aa:hover{
  text-decoration:none;
  color:white;
  font-style:bold;
  padding:10px;
  background:3e963e;
  }

  #form{
    width: 100%;
    height: 100%;
    overflow: hidden;
    -ms-overflow-style: none;
    scrollbar-width: none;
    
  }
  #contain{
    
    display: flex;
    justify-content: center;
    height: fit-content;
    gap: 10px;
    width: max-content;
    position: relative;
    scroll-snap-type:x mandatory;
    
    
  }
.forms{
  flex:none;
  padding:10px 30px 10px 30px;
  width:95vw;
  scroll-snap-align: start;
  
  
}
</style>

</head>

<body >

<form action="create-account.php" id="form" method="post" enctype="multipart/form-data"onload="clickedfunc()">
  <div id="contain">
    <div class=" forms" id="sec1">
    <div class="col-12">
    
   <input type="radio" name="gender" value="mr">MR
   <input type="radio" name="gender" value="mrs">MRs
   <input type="radio" name="gender" value="miss">Ms

  
    </div>
    <br>
    <div class="row g-3 py-0 ">
    <div class="col-md-4">
      <label for="firstname" class="form-label">Firstname</label>
      <input type="text" class="form-control" name="fname" Minlength="3" required>
    </div>
    <div class="col-md-4">
      <label for="mnamw" class="form-label">Middlename</label>
      <input type="text" class="form-control" name="mname">
    </div>
    <div class="col-md-4">
      <label for="lname" class="form-label">Lastname</label>
      <input type="text" class="form-control" name="lname" required>
    </div>
    
    <div class="col-md-4">
      <label for="inputAddress" class="form-label">Number</label>
      <input type="text" class="form-control" name="number" placeholder="" required Maxlength="10" Minlength="10">
    </div>
    <div class="col-md-4">
      <label for="inputAddress1" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" placeholder="ram@gmail.com"required>
    </div>
    <div class="col-md-4">
      <label for="dob" class="form-label">Date Of Birth(AD)</label>
      <input type="date" class="form-control" name="dob" placeholder="1009-01-11"required>
    </div>
    <div class="col-md-4">
      <label for="" class="form-label">Recent pp size photo</label>
      <input type="file" class="form-control" name="ppphoto" required >
    </div>
    <div class="col-md-4">
      <label for="inputfather" class="form-label">Fathers name(full)</label>
      <input type="text" class="form-control" name="fathername" required>
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Fathers citizenship</label>
      <input type="file" class="form-control" name="fcitizen" required>
    </div>
    <div class="col-md-4">
      <label for="inputZip" class="form-label">Citizenship (yours)</label>
      <input type="file" class="form-control" name="citizen" required >
    </div>
    <div class="col-md-2">
      <label for="inputcip" class="form-label">Citizenship number</label>
      <input type="text" class="form-control" name="cnumber" required placeholder="1123-453" required>
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">Profession</label>
      <select id="inputState" class="form-select" name="profession" required>
        <option selected>Choose..</option>
        
        <option value="student">student</option>
        <option value="housewife">house wife</option>
        <option value="teaching">teaching</option>
        <option value="buiseness">buiseness</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Source of income</label>
      <select id="inputState" class="form-select" name="sourceofincome"required>
        <option selected>Choose...</option>
        <option value="profession">Profession</option>
        <option value="grant">Grant</option>
      </select>
    </div>
  
    <div class="col-md-4">
      <label for="inputState" class="form-label">Preferred Branch</label>
      <select id="inputState" class="form-select" name="branch" required>
        <option selected>Choose...</option>
        <option value="simaltar">Simaltar</option>
        <option value="kapan">Kapan</option>
        <option value="boudha">Boudha</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Account Type</label>
      <select id="inputState" class="form-select"name="accounttype" required>
        <option selected>Choose...</option>
        <option value="current">Current</option>
        <option value="saving">Saving</option>
        <option value="fixeddeposit">Fixed Deposit</option>
      </select>
    </div>
   <div class="col-12 my-3">
    <a href="#sec2"class="aa my-3" style="float:right;"id="nextbtn" >Next -></a>
   </div>
  </div>
</div>
    <div class="forms"id="sec2">
    <div class="row g-3 py-2 ">
    <label for="" class="form-label"><b>(Permanent Address)</b></label>
  <div class="col-md-4">
    <label for="firstname" class="form-label">Province </label>
    <input type="text" class="form-control" name="perprovince" required placeholder="bagmati" id="pprovince">
  </div>
  <div class="col-md-4">
    <label for="mnamw" class="form-label">District</label>
    <input type="text" class="form-control" name="perdistrict" required placeholder="kathmandu" id="pdistrict">
  </div>
  <div class="col-md-4">
    <label for="lname" class="form-label">Municipality/vdc</label>
    <input type="text" class="form-control" name="permun" required placeholder="kathmandu" id="pmun">
  </div>
  
  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Tole/Village</label>
    <input type="text" class="form-control" name="pertole" placeholder="kharibot"required id="ptole">
  </div>
  <div class="col-md-4">
    <label for="inputAddress1" class="form-label">Ward no</label>
    <input type="text" class="form-control" name="perward" placeholder="07" required id="pward">
  </div>
 
  <label for="" class="form-label"><b>(Temporary address)</b></label>
  <!-- <div class="form-check">
    <input class="form-check-input" type="checkbox" id="same1" >
    <label class="form-check-label" for="gridCheck">
     same as permananent
</label>
</div> -->

  <div class="col-md-4">
    <label for="firstname" class="form-label">Province </label>
    <input type="text" class="form-control" name="tprovince" required placeholder="bagmati" id="tprovince">
  </div>
  <div class="col-md-4">
    <label for="mnamw" class="form-label">District</label>
    <input type="text" class="form-control" name="tdistrict" required placeholder="kathmandu" id="tdistrict">
  </div>
  <div class="col-md-4">
    <label for="lname" class="form-label">Municipality/vdc</label>
    <input type="text" class="form-control" name="tmun" required placeholder="kathmandu" id="tmun">
  </div>
  
  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Tole/Village</label>
    <input type="text" class="form-control" name="ttole" placeholder="kharibot" required id="ttole">
  </div>
  <div class="col-md-4">
    <label for="inputAddress1" class="form-label">Ward no</label>
    <input type="text" class="form-control" name="tward" placeholder="07" required id="tward">
  </div>
  
  <div class="col-md-4">
    <label for=" " class="form-label">Deposit</label>
    <input type="text" class="form-control" name="deposit" required placeholder="200">
  </div>
 
<div class="col-12">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck" name="ibank" value="yes">
    <label class="form-check-label" for="gridCheck">
     Internet Banking
    </label>
  </div>
</div>
<br>
<div class="d-flex justify-content-between">
 <a href="#sec1" class="aa px-2 py-2 my-3"id="prevbtn" ><- previous</a>
  
   
  <button class="btn btn-success px-2 py-2 my-3"type="submit" name="submitbtn">create account</button>
    </div>
</div>
  </div>
</form>



<script type="text/javascript">
function clickedfunc(){
 alert('habibi');
}
</script>
</body>
</html>