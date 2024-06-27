<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <style>
        img {
            border-radius: 50%;
            }
        .logo {
            width: 70px;
            height:50px;
            }
            body{
                background:linear-gradient(180deg, #2d767f, #b4f1f1);
            }
        //body{
            background-image:url('images/home.jpg');
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        
        .container {
                    padding: 16px;
                    
                    text-align: center;
                }
/* Set a style for the submit/register button */
        .searchbtn {
                    background-color: #e2f3f5;
                    text-align: center;
                    color: black;
                    padding: 16px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                    opacity: 0.9;
                    }

        .searchbtn:hover {
                    opacity:1;
                    font-family: 'Quicksand', sans-serif;
                    font-weight: bold;
                    height: 3rem;
                    line-height: 3rem;
                    padding: 0 3rem;
                    border: 0;
                    border-radius: 3rem;
                    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
                    background-size: 300% 100%;
                    transition: all 0.3s ease-in-out;}
        .searchbtn{

                    font-family: 'Quicksand', sans-serif;
                    font-weight: bold;
                    height: 3rem;
                    line-height: 3rem;
                    padding: 0 3rem;
                    border: 0;
                    border-radius: 3rem;
                    background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);
                    background-size: 300% 100%;
                    transition: all 0.3s ease-in-out;
                    }

/* Add a blue text color to links */
        a {
  color: dodgerblue;
        }
        .center{
            margin-left:auto;
            margin-right:auto;
        }


        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #a1eafb;
  font-family: Arial;
  text-align: center;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 20px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 20px;
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #88bef5;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #3d5af1;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
<div class="navbar">

<a href="#"><img src="images/logo.jpg" alt="Logo" class="logo"></a> 
  <a href="home.php"><b>ပင်မစာမျက်နှာ</b></a>
  <div class="dropdown">
    <button class="dropbtn"><b>ဝန်ဆောင်မှုများ</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="BvsE.php"><b>Business Class နှင့် Economy Class</b></a>
      <a href="service.php"><b>ခရီးဆောင်အိတ်ကီလိုအပိုယူရန်</b></a>
      <a href="rule.php"><b>စည်းမျဉ်းစည်းကမ်းနှင့်သတ်မှတ်ချက်များ</b></a>
      <a href="otherservice.php"><b>အစားအစာနှင့်အခြားဝန်ဆောင်မှုများ</b></a>
    </div>
  </div>
  <a href="refund.php"><b>ပြန်အမ်းငွေ</b></a>
  <div class="dropdown">
    <button class="dropbtn"><b>ခရီးစဉ်များအကြောင်း</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="famous.php"><b>မြန်မာခရီးစဉ်များအကြောင်း</b></a>
      <a href="india.php"><b>အိန္ဒိယနိုင်ငံမှလည်ပတ်ရန်နေရာဒေသများ</b></a>
      <a href="singapore.php"><b>စင်္ကာပူနိုင်ငံမှလည်ပတ်ရန်နေရာဒေသများ</b></a>
      <a href="thai.php"><b>ထိုင်းနိုင်ငံမှလည်ပတ်ရန်နေရာဒေသများ</b></a>
      <a href="china.php"><b>တရုတ်နိုင်ငံမှလည်ပတ်ရန်နေရာဒေသများ</b></a>
    </div>
  </div>
  <a href="contactus.php"><b>ဆက်သွယ်ရန်</b></a>
</div>
<h1 style="text-align:center">Burmese Wings- လေကြောင်းလက်မှတ်ကြိုတင်စာရင်းပေးခြင်းစနစ်</h1>
<form id="Form">
<table class="center">
<div class="container">
<h2>လေယာဉ်လမ်းကြောင်းရှာဖွေရန်</h2>


    <tr>
      <td colspan="2"><b><input type="radio" name="link" value="round" onclick="Change_Form()" >အသွားအပြန်</b></td>
      <td colspan="2"><b><input type="radio" name="link" value="oneway" onclick="Change_Form()">အသွားတစ်ကြောင်း</b></td>
    </tr>
    <tr>
      <td><label for="lplace"><b>ထွက်ခွါမည့်နေရာ</b></label></td>
      <td><select name="lplace" id="lplace">
                <option value="lplace"></option>
                <optgroup label="မြန်မာ(Myanmar)">
                    <option value="">ရန်ကုန်</option>
                    <option value="">ထားဝယ်</option>
                    <option value="">ကော့သောင်း</option>
                    <option value="">မန္တလေး</option>
                    <option value="">မြိတ်</option>
                    <option value="">မြစ်ကြီးနား</option>
                    <option value="">စစ်တွေ</option>
                </optgroup>
                <optgroup label="ဩစတြေးလျ(Australia)">
                    <option value="">Sydney(SYD)</option>
                    <option value="">Melbourne(MEL)</option>
                </optgroup>
                <optgroup label="ကမ္ဘောဒီးယား(Combodia)">
                    <option value="">Phnom Penh(PNH)</option>
                </optgroup>
                <optgroup label="တရုတ်(China)">
                    <option value="">Guangzhou(CAN)</option>
                </optgroup>
                <optgroup label="အိန္ဒီယ(India)">
                    <option value="">Chennai(MAA)</option>
                    <option value="">Delhi(DEL)</option>
                    <option value="">Kolkata(CCU)</option>
                </optgroup>
                <optgroup label="မလေးရှား(Malaysia)">
                    <option value="">Kota Kinabalu(BKI)</option>
                    <option value="">Kuala Terengganu(TGG)</option>
                    <option value="">Kuching(KCH)</option>
                    <option value="">Sandakan(SDK)</option>
                    <option value="">Johor Bahru(JHL)</option>
                </optgroup>
                <optgroup label="ရုရှား(Russia)">
                    <option value="">Novosibirsk(OVB)</option>
                </optgroup>
                <optgroup label="စင်္ကာပူ(Singapore)">
                    <option value="">Singapore(SIN)</option>
                </optgroup>
                <optgroup label="တောင်ကိုရီးယား(South Korea)">
                    <option value="">Incheon(ICN)</option>
                </optgroup>
                <optgroup label="ထိုင်း(Thailand)">
                    <option value="">Bangkok(BKK)</option>
                    <option value="">Chiang Mai(CNX)</option>
                    <option value="">Don Mueang International(DMK)</option>
                    <option value="">Phuket(HKT)</option>
                </optgroup>
                <optgroup label="ဗီယက်နမ်(Vietnam)">
                    <option value="">Hanoi(HAN)</option>
                    <option value="">Ho Chi Minh(Singapore)</option>
                </optgroup>
            </select></td>
    </tr>

    <tr>
    <td><label for="lday"><b>ထွက်ခွါမည့်ရက်</b></label></td>
    <td><input type="date" placeholder="" name="lday" id="lday" required></td>
    <td colspan="2">
    <select name="time" id="time">
                <option value="time"></option>
                <option value="time1">1:00AM</option>
                <option value="time2">2:00AM</option>
                <option value="time3">3:00AM</option>
                <option value="time4">4:00AM</option>
                <option value="time5">5:00AM</option>
                <option value="time6">6:00AM</option>
                <option value="time7">7:00AM</option>
                <option value="time8">8:00AM</option>
                <option value="time9">9:00AM</option>
                <option value="time10">10:00AM</option>
                <option value="time11">11:00AM</option>
                <option value="time12">12:00AM</option>
                <option value="time13">1:00PM</option>
                <option value="time14">2:00PM</option>
                <option value="time15">3:00PM</option>
                <option value="time16">4:00PM</option>
                <option value="time17">5:00PM</option>
                <option value="time18">6:00PM</option>
                <option value="time19">7:00PM</option>
                <option value="time20">8:00PM</option>
                <option value="time21">9:00PM</option>
                <option value="time22">10:00PM</option>
                <option value="time23">11:00PM</option>
                <option value="time24">12:00PM</option>
            </select></td></tr>

    

    <tr>
    <td><label for="number"><b>ခရီးသည်ဦးရေ</b></label></td>
    <td><input type="number" placeholder="" name="number" id="number" required></td>

    <td><label for="class"><b>Classအမျိုးအစား</b></label></td>
    <td><select name="cabin" id="cabin">
                <option value="business">BUSINESS</option>
                <option value="economy">ECONOMY</option>
            </select>
</td></tr>
    <tr>
    <td colspan="4"><button type="submit" class="searchbtn"><b>ရှာဖွေရန်</b></button></td></tr>
   
</div>
</table>
</form>
<script type="text/javascript">
    function Change_Form(){
        var selectvalue=$('input[name=link]:checked','#Form').val();
        if(selectvalue=="round"){
           window.open('home.php');
            return true;
        }
        else{
            window.open('home1.php');
            return true;
        }
    }
     function changelink(){
        alert('1');
        var selectvalue=$('input[name=link]:checked','#Form').val();
        if(selectvalue=="round"){
           $('#lplace').show();
           $('#lday').show();
        }
        else{
            $('#lplace').hide();
           $('#lday').hide();
        }
     }   
</script>
</body>
</html>

