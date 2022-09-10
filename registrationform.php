<?php
$provinces = array(
                "bagmati",
                "gandaki",
                "karnali",
                "lumbini",
                "province1",
                "province2",
                "sudurpaschim"
            );

$districts = array(
					"achham",
					"arghakhanchi",
					"baglung",
					"baitadi",
					"bajhang",
					"bajura",
					"banke",
					"bara",
					"bardiya",
					"bhaktapur",
					"bhojpur",
					"chitwan",
					"dadeldhura",
					"dailekh",
					"dang deukhuri",
					"darchula",
					"dhading",
					"dhankuta",
					"dhanusa",
					"dholkha",
					"dolpa",
					"doti",
					"gorkha",
					"gulmi",
					"humla",
					"ilam",
					"jajarkot",
					"jhapa",
					"jumla",
					"kailali",
					"kalikot",
					"kanchanpur",
					"kapilvastu",
					"kaski",
					"kathmandu",
					"kavrepalanchok",
					"khotang",
					"lalitpur",
					"lamjung",
					"mahottari",
					"makwanpur",
					"manang",
					"morang",
					"mugu",
					"mustang",
					"myagdi",
					"nawalparasi",
					"nuwakot",
					"okhaldhunga",
					"palpa",
					"panchthar",
					"parbat",
					"parsa",
					"pyuthan",
					"ramechhap",
					"rasuwa",
					"rautahat",
					"rolpa",
					"rukum",
					"rupandehi",
					"salyan",
					"sankhuwasabha",
					"saptari",
					"sarlahi",
					"sindhuli",
					"sindhupalchok",
					"siraha",
					"solukhumbu",
					"sunsari",
					"surkhet",
					"syangja",
					"tanahu",
					"taplejung",
					"terhathum",
					"udayapur"
                
            );

?>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign up</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="scroll.css">
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
  background:#3e963e;
  }
  #form{
    width: 100%;
    height: 100%;
    overflow: scroll;
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
  padding:5px 30px 5px 30px;
  width:95vw;
  scroll-snap-align: start;
  
  
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.error{
  color:red;
}
</style>
</head>

<body>

<form action="verify-account.php" id="form" method="post" enctype="multipart/form-data">
  <div id="contain" class="pt-5">
    <div class=" forms" id="sec1">
    <div class="col-12">
    
   <input type="radio" name="gender" value="mr">MR
   <input type="radio" name="gender" value="mrs">MRs
   <input type="radio" name="gender" value="miss">Ms

  
    </div>
    <br>
    <div class="row g-3 py-0 ">
    <div class="col-md-4">
      <label for="firstname" class="form-label" >Firstname</label>
      <input type="text" class="form-control" autocomplete="off" name="fname" required minlength="3" maxlength="8" required>
      <span class="error"></span>
       
    </div>
    <div class="col-md-4">
      <label for="mnamw" class="form-label">Middlename</label>
      <input type="text" class="form-control" autocomplete="off" name="mname" >
      <span class="error"></span>
    </div>
    <div class="col-md-4">
      <label for="lname" class="form-label">Lastname</label>
      <input type="text" class="form-control" autocomplete="off" minlength="3" name="lname" required>
      <span class="error"></span>
    </div>
    
    <div class="col-md-4">
      <label for="inputAddress" class="form-label">Number</label>
      <input type="number" class="form-control" autocomplete="off" name="number"  min="9000000000" max="9999999999" placeholder="9880343223"  required>
      
    </div>
    <div class="col-md-4">
      <label for="inputAddress1" class="form-label">Email</label>
      <input type="email" class="form-control" autocomplete="off" name="email" placeholder="ram@gmail.com" required>
        
    </div>
    <div class="col-md-4">
      <label for="dob" class="form-label">Date Of Birth(AD)</label>
      <input type="date" class="form-control" autocomplete="off" name="dob" required placeholder="1009-01-11">
    </div>
    <div class="col-md-4">
      <label for="" class="form-label">Recent pp size photo</label>
      <input type="file" class="form-control" autocomplete="off" name="ppphoto" required >
        <span class="error"></span>
    </div>
    <div class="col-md-4">
      <label for="inputfather" class="form-label">Fathers name(full)</label>
      <input type="text" class="form-control" autocomplete="off" name="fathername" minlength="3" required>
        <span class="error"></span>
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Fathers citizenship</label>
      <input type="file" class="form-control" autocomplete="off" name="fcitizen">
        <span class="error"></span>
    </div>
    <div class="col-md-4">
      <label for="inputZip" class="form-label">Citizenship (yours)</label>
      <input type="file" class="form-control" autocomplete="off"  name="citizen" required>
        <span class="error"></span>
    </div>
    <div class="col-md-2">
      <label for="inputcip" class="form-label">Citizenship number</label>
      <input type="text" class="form-control" autocomplete="off" name="cnumber" required>
       
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">Profession</label>
      <select id="inputState" class="form-select" name="profession" required>
         
        <option value="student">student</option>
        <option value="housewife">house wife</option>
        <option value="teaching">teaching</option>
        <option value="buiseness">buiseness</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Source of income</label>
      <select id="inputState" class="form-select" name="sourceofincome"required>
       
        <option value="profession">profession</option>
        <option value="grant">grant</option>
      </select>
    </div>
  
    <div class="col-md-4">
      <label for="inputState" class="form-label">Preferred branch</label>
      <select id="inputState" class="form-select" name="branch" required>
      
        <option value="simaltar">Simaltar</option>
        <option value="kapan">Kapan</option>
        <option value="boudha">Boudha</option>
      </select>
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Account type</label>
      <select id="inputState" class="form-select"name="accounttype" required>
        <option value="current">Current</option>
        <option value="saving">Saving</option>
        <option value="fixeddeposit">Fixed Deposit</option>
      </select>
    </div>
  <label for="" class="form-label"><b>(Temporary Address)</b></label>
  
 <div class="col-md-4">
      <label for="inputState" class="form-label" >Province</label>
      <select id="inputState" class="form-select" auto-complete="off" name="tprovince" required>
      
      <?php for($i=0; $i<=6;$i++){?><option value="<?php echo $provinces[$i]?>"><?php echo $provinces[$i]?></option><?php }?>
        
      </select>
    </div>
   <div class="col-md-4">
      <label for="inputState" class="form-label" >District</label>
      <select id="inputState" class="form-select"name="tdistrict" auto-complete="off" required>
      
      <?php for($i=1; $i<=count($districts)-1;$i++){?><option value="<?php echo $districts[$i]?>"><?php echo $districts[$i]?></option><?php }?>
        
      </select>
    </div>
  <div class="col-md-4">
    <label for="lname" class="form-label">Municipality/vdc</label>
    <input type="text" class="form-control" autocomplete="off" id="tmun" name="tmun" required placeholder="kathmandu">
      <span class="error"></span>
  </div>
  
  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Tole/Village</label>
    <input type="text" class="form-control" autocomplete="off" id="ttole" name="ttole" required placeholder="kharibot">
      <span class="error"></span>
  </div>
  <div class="col-md-4">
    <label for="inputAddress1" class="form-label">Ward no</label>
    <input type="number" class="form-control" autocomplete="off" id="tward" name="tward" required placeholder="07" min="00" maxlength="2">
      
  </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="ibank" value="yes">
      <label class="form-check-label" for="gridCheck">
        Internet Banking
      </label>
    </div>
  </div>
  
  <div class="d-flex justify-content-between">
    <a href="#sec1" class="aa my-3 text-light" id="prevbtn">
      back</a>
  
        <button class="btn btn-success px-2 py-2 my-3 text-light" style="float:right;" type="submit"
          name="submitbtn">create account</button>
  </div>
  </div>
</div>

</form>

<script src="validate.js"></script>

</body>

</html>