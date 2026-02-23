<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WINTENT GLASS</title>
  <link rel="stylesheet" href="css/style.css">
  
</head>
<?php
function send_whatsapp($message="Test"){
   $phone="+37378235087";  // Enter your phone number here
   $apikey="219613";       // Enter your personal apikey received in step 3 above

   $url='https://api.callmebot.com/whatsapp.php?source=php&phone='.$phone.'&text='.urlencode($message).'&apikey='.$apikey;

   if($ch = curl_init($url))
   {
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
       $html = curl_exec($ch);
       $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
       // echo "Output:".$html;  // you can print the output for troubleshooting
       curl_close($ch);
       return (int) $status;
   }
   else
   {
       return false;
   }
}





if (isset($_POST["telephone"])) {
send_whatsapp("Telefon: ".$_POST["telephone"]." Nume: ".$_POST["name"]); 
}

?>

<body>

<section id="header">
   <div class="container-fluid">
<div class="row">
   <div class="col-2" id="leftside">
      <div class="rotate_txt d-flex justify-content-end">
     <a href="https://www.facebook.com/profile.php?id=100079448334161"><span >Facebook</span></a>
     <a href="https://www.instagram.com/wintentglass/?hl=ro" style="margin-left:50%;"><span >Instagram</span></a> 
</div>

 <div class="language d-flex justify-content-end align-self-end">
   <a href="/" class="passive_lang">EN</a><a href="" class="active_lang">RO</a>  
</div>  

   </div>
   <div class="col-10" id="rightside"> 
      <img  src="image/logo.png" alt="" class="logo_img">
      <img class="" id="main" style="width: 100%;height: auto;" src="image/main_img_1.jpg" alt="">
   </div>

</div>

 </div>


 <div class="container-fluid mt-4">
<div class="row align-center">
 <div class="col-3 text-center">
   
</div>  
<div class="col-2 text-center">
   <span class="underimg_txt align-middle">Str. Babanovac nr8</span>
</div>
<div class="col-2 text-center">
   <a href="mailto:wintentglass@gmail.com" class="underimg_txt align-middle">wintentglass@gmail.com</a>
</div>
<div class="col-2 text-center">
   <a href="tel:+40732467730" class="underimg_txt align-middle">+40732467730</a>
</div>
<div class="col-3 text-center">
<a style="margin-right:10px;" id="arrow"><img src="image/arrow.png" type=""></a> 
   <img id="number" src="image/01.png" type="">
   <img src="image/033.png" type="">
</div>


</div>

 </div>
 </section>
 




 <section id="header_m">
   <div class="container-fluid">
<div class="row">
   <div class="col-1" id="leftside">
      <div class="rotate_txt_m d-flex justify-content-end">
     <a href="https://www.facebook.com/profile.php?id=100079448334161"><span >Facebook</span></a>
     <a href="https://www.instagram.com/wintentglass/?hl=ro" style="margin-left:10%;"><span >Instagram</span></a> 
</div>
<center>
 <div class="language_m">
  <a href="" class="active_lang_m">RO</a>
<a href="/" class="pasive_lang_m">EN</a>
</div>  
</center>
   </div>
   <div class="col-11" id="rightside"> 
      <img  src="image/logo.png" alt="" class="logo_img" width="104px" height="36px">
      <img class="" id="main_m" style="width: 100%;height: auto;" src="image/main_img_1.jpg" alt="">
   </div>

</div>

 </div>


 <div class=" mt-4 d-flex justify-content-center">
<div class="row">
 

<div class="col-auto  text-center-m">
   <a href="mailto:wintentglass@gmail.com" class="underimg_txt_m align-middle">wintentglass@gmail.com</a>
</div>
<div class="col-auto text-center-m">
   <a href="tel:+40732467730" class="underimg_txt_m align-middle">+40732467730</a>
</div>
<div class="col-auto text-center-m">
<a class="" id="arrow_m"><img src="image/arrow.png" type=""></a> 
   <img id="number_m" src="image/01.png" type="" width="25px" height="20px">
   <img src="image/033.png" type="">
</div>


</div>

 </div>
</section>



<section id="about" class="mt-3" >
<div class="container-fluid">
   <div class="row">
      <div class="col-1"></div>
      <div class="col-11">
<span class="about_us_txt">Despre noi</span>

<div class="row mt-5">
<div class="col-5">
<span class="about_txt">
Compania WintentGlass lucrează cu succes pe piața din Romania si R.Moldova. Lucrăm pe principiul satisfacerii nevoilor și dorințelor fiecărui client. Am reușit să adunăm o echipă de profesioniști competenți și cu o vastă experiență în acest domeniu.  Aici veți găsi cea mai mare selecție de pergole, terase și sisteme de umbrire din Romania si R.Moldova.  </span>
</div>
<div class="col-7" style="padding: 0;">
   <img src="image/about_img.jpg" alt="" style="width: 100%;height:auto;">
</div>
</div>

<div class="row mt-5 align-center">
   <div class="col-2"></div>
<div class="col-3" >
   <span class="big_txt">30</span><br>
   <span class="under_txt">Ani expiriență</span>
</div>
<div class="col-3 ">
   <span class="big_txt">1000+</span><br>
      <span class="under_txt">Proiecte finisate</span>
   </div>
<div class="col-3 ">
   <span class="big_txt">50</span><br>
   <span class="under_txt">Persoane angajate</span>
</div>
</div>
      </div>
   </div>
</div>

</section>

<section id="about_m" class="mt-3">
<div class="container-fluid">
   <div class="row">

      <div class="col-12">
<span class="about_us_txt_m">Despre noi</span>



<span class="about_txt_m">
Compania WintentGlass lucrează cu succes pe piața din Romania si R.Moldova. Lucrăm pe principiul satisfacerii nevoilor și dorințelor fiecărui client. Am reușit să adunăm o echipă de profesioniști competenți și cu o vastă experiență în acest domeniu.  Aici veți găsi cea mai mare selecție de pergole, terase și sisteme de umbrire din Romania si R.Moldova.  </span>


   <img src="image/about_img.jpg" alt="" style="width: 100%;height:auto;">



<div class="row mt-2  align-center align-bottom">

<div class="col-4 " >
   <span class="big_txt_m">30</span><br>
   <span class="under_txt_m">Ani expirienta</span>
</div>
<div class="col-4 ">
   <span class="big_txt_m">1000+</span><br>
      <span class="under_txt_m">Proiecte finisate</span>
   </div>
<div class="col-4 ">
   <span class="big_txt_m">50</span><br>
   <span class="under_txt_m">Persoane angajate</span>
</div>
</div>
      </div>
   </div>
</div>

</section>



<section id="project" class="mt-5 mb-5" >

<div class="container">
<span class="about_us_txt" style="margin-bottom:160px;">Proiecte</span>
<div class="row mt-4">
<div class="col-3 proj_img" style="margin: 0;padding:0;"><img src="image/proiecte_1.jpg" alt="" style="width: 80%;height:auto;">
<span class="project_vertical" style="margin-left: -30px;">MANGALIA<br>OLIMPIC</span>
</div>
<div class="col-3 proj_img" style="margin: 0;padding:0;"><img src="image/proiecte_2.jpg" alt="" style="width: 80%;height:auto;">
<span class="project_vertical" style="margin-left: -25px;">Ballroom</span>
</div>
<div class="col-3 proj_img" style="margin: 0;padding:0;"><img src="image/proiecte_3.jpg" alt="" style="width: 80%;height:auto;">
<span class="project_vertical" style="margin-left: -60px;">GEAM BALCON</span>
</div>
<div class="col-3 proj_img" style="margin: 0;padding:0;"><img src="image/proiecte_4.jpg" alt="" style="height:90%;max-width: 80%;">
<span class="project_vertical"  style="margin-left: -60px;">CASA PRIVATA</span>
</div>

   </div>
<center class="" style="margin-top: 100px;">
   <a href="proiect.html" class="radial-out btn-advanced btn_more d-flex justify-content-center">Mai multe proecte</a>
</center>
</div>
     
</section>


<section id="project_m" class="mt-5">

<div class="container-fluid">
<span class="about_us_txt_m">Proiecte</span>
</div>
<img src="image/proiecte_1_m.jpg" class="mt-2" alt="" style="width: 100%;height:auto;">
<span class="project_vertical_m"style="margin-left: 10px;">MANGALIA OLIMPIC</span>

<img src="image/proiecte_2_m.jpg" class="mt-2" alt="" style="width: 100%;height:auto;">
<span class="project_vertical_m"style="margin-left: 10px;">Ballroom</span>

<img src="image/proiecte_3_m.jpg" class="mt-2" alt="" style="width: 100%;height:auto;">
<span class="project_vertical_m" style="margin-left: 10px;">GEAM BALCON</span>

<img src="image/proiecte_4_m.jpg" class="mt-2" alt="" style="width: 100%;height:auto;">
<span class="project_vertical_m" style="margin-left: 10px;" >CASA PRIVATA</span>


   
<center class="mt-3">
   <button onclick="location.href = 'proiect.html';" class="btn_more_m d-flex justify-content-center">Mai multe proecte</button>
</center>

     
</section>


<section id="services">
<div class="container mt-5">
<span class="about_us_txt">Servicii</span>
<p class="text_serv mt-4">Doar aici veți găsi o soluție pentru cele mai complexe structuri cu produse de înaltă calitate montaj competent și precis. Fiecare dintre specialiștii noștri își îmbunătățește constant abilitățile la traininguri și seminarii practice
Apelând la noi veți evalua calitatea serviciilor și bunurilor pe care suntem gata să vi le oferim cu plăcere. Ne cunoaștem afacerea perfect!</p>
<p class="txt_serv">Oferim clienților noștri o gamă largă de servicii</p>
<p class="txt_serv">Livrare și instalare de înaltă calitate de către specialiști competenți</p>


<div class="row justify-content-between mt-5">
<div class="col-auto">
<embed src="image/vehicol.svg" type="">
<p class="img_serv_t">Plecarea unui <br>specialist la obiect<br>locuinta, birou din,<br> Bucuresti si nu <br>numai </p>
</div>
<div class="col-auto">
<embed src="image/ruler.svg" type="">
<p class="img_serv_t">Masurarea<br> ferestrelor si<br> demonstrarea<br> cataloagelor,<br> modelelor, culorilor</p>
</div>
<div class="col-auto">
<embed src="image/document.svg" type="">
<p class="img_serv_t">Calculul costului<br> comenzii la<br> unitate</p>

</div>
<div class="col-auto">
<embed src="image/discounts.svg" type="">
<p class="img_serv_t">Sistem flexibil de<br> reduceri</p>
</div>
<div class="col-auto">
<embed src="image/repair.svg" type="">
<p class="img_serv_t">Service  garanție și<br> post-garanție</p>
</div>
</div>
</div>
</section>




<section id="services_m">
<div class="container mt-5">
<span class="about_us_txt_m">Servicii</span>
<p class="text_serv_m mt-4">Doar aici veți găsi o soluție pentru cele mai complexe structuri cu produse de înaltă calitate montaj competent și precis. Fiecare dintre specialiștii noștri își îmbunătățește constant abilitățile la traininguri și seminarii practice
<br><br>Apelând la noi veți evalua calitatea serviciilor și bunurilor pe care suntem gata să vi le oferim cu plăcere. Ne cunoaștem afacerea perfect!</p>
<!-- <p class="text_serv_m">We offer our customers a wide range of services</p> -->
<p class="text_serv_m_h">Livrare și instalare de înaltă calitate de către specialiști competenți</p>


<div class="row mt-3">
<div class="col-4 mt-md-2" style="height: 100px;">
<embed src="image/vehicol.svg" type="">
</div>
<div class="col-8 mt-md-2" style="height: 100px;">
<p class="img_serv_t">Plecarea unui specialist la obiect locuinta, birou din Bucuresti si nu numai</p>
</div>
<div class="col-4 mt-md-2" style="height: 100px;">
<embed src="image/ruler.svg" type="">
</div>
<div class="col-8 mt-md-2" style="height: 100px;">
<p class="img_serv_t">Masurarea ferestrelor si demonstrarea cataloagelor, modelelor, culorilor</p>
</div>


<div class="col-4 mt-md-2" style="height: 100px;">
<embed src="image/document.svg" type="">
</div>
<div class="col-8 mt-md-2" style="height: 100px;">
<p class="img_serv_t">Calculul costului comenzii la unitate</p>
</div>


<div class="col-4 mt-md-2" style="height: 100px;">
<embed src="image/discounts.svg" type="">
</div>
<div class="col-8 mt-md-2" style="height: 100px;">
<p class="img_serv_t">Sistem flexibil de reduceri</p>
</div>

<div class="col-4 mt-md-2" style="height: 100px;">
<embed src="image/repair.svg" type="">
</div>
<div class="col-8 mt-md-2" style="height: 100px;">
<p class="img_serv_t">Service  garanție și post-garanție</p>
</div>
</div>
</div>
</section>


<section id="order">
<div class="container">
<span class="order_txt">Comandă un sunet</span>
<div class="row mt-3" >
   <div class="col-6">
<form id="formId" method="POST">
   <input type="text" name="name" class="input_t" placeholder="Name" required><br>
   <input type="telephone" name="telephone" id="" class="input_t" placeholder="Phone" required><br>
   
   <!-- <input type="submit" value="Send the message" class="send_btn d-flex justify-content-center mt-2"> -->
  <a class="radial-out btn-advanced send_btn" onclick="myFunction()">Trimite mesajul</a>

 
<script>
            function myFunction() {
                document.getElementById("formId").submit();
                
            }
        </script>
</form>
 
   </div>
   <div class="col-6">
   <a href="mailto:wintentglass@gmail.com" class="about_info" style="padding: 0px;"><embed src="image/mail.svg" type="" style="margin-right:20px;margin-bottom:-10px;">wintentglass@gmail.com</a><br>
   <a href="tel:+40732467730" class="about_info"><embed src="image/whatsapp.svg" type="" style="margin-right:20px;margin-top:20px;"> +40732467730</a><br>
   <a href="tel:+37369045169" class="about_info"><embed src="image/phone.svg" type="" style="margin-right:24px;"> +37369045169</a><br>
   <span class="about_info"><embed src="image/pin.svg" type="" style="margin-right:20px;margin-top:20px;">Str. Babanovac nr8</span><br>     
   <a href="https://www.facebook.com/profile.php?id=100079448334161"><embed src="image/facebook.png" type="" style="margin-right:20px;margin-top:20px;"></a><a href="https://www.instagram.com/wintentglass/?hl=ro"><embed src="image/instagram.png" type=""></a><br>

</div>
</div>

</div>
</section>


<section id="order_m">
<div class="container-fluid mt-4">
<span class="order_txt_m">Comandă un sunet</span>


<form action="" class="mt-4" method="POST">
   <input type="text" name="name" class="input_t_m d-flex justify-content-center" placeholder="Name" required><br>
   <input type="telephone" name="telephone" id="" class="input_t_m d-flex justify-content-center" placeholder="Phone" required><br>
   <input type="submit" value="Trimite mesajul" class="send_btn_m d-flex justify-content-center mt-2">
</form>
  

   <a href="mailto:wintentglass@gmail.com" class="about_info_m mt-4"><embed src="image/mail.svg" type="" style="margin-right:20px; margin-bottom:-10px;">wintentglass@gmail.com</a><br>
   <a href="tel:+40732467730" class="about_info_m"><embed src="image/whatsapp.svg" type="" style="margin-right:20px;margin-top:20px;"> +40732467730</a><br>
   <a href="tel:+37369045169" class="about_info_m"><embed src="image/phone.svg" type="" style="margin-right:24px;"> +37369045169</a><br>
   <span class="about_info_m"><embed src="image/pin.svg" type="" style="margin-right:20px;margin-top:20px;">Str. Babanovac nr8</span><br>     
   <a href="https://www.facebook.com/profile.php?id=100079448334161"><embed src="image/facebook.png" type="" style="margin-right:20px;margin-top:20px;"></a><a href="https://www.instagram.com/wintentglass/?hl=ro"><embed src="image/instagram.png" type=""></a><br>



</div>
</section>

<footer>
   <center>
       <span class="footer_txt" style="display: none;">©  2022 Wintentglass Romania. Construit folosind WordPress și tema Mesmerize</span> 
      <span class="footer_txt_m" style="display: none;">©  2022 Wintentglass Romania. Construit folosind WordPress și tema Mesmerize</span>
   </center>
</footer>

</body>

<script>
$( document ).ready(function() {
   if($( window ).width()>800){
$('#header').show();
$('#about').show();
$('#project').show();
$('#services').show();
$('#order').show();
$('.footer_txt').show();
   }
   else{
$('#header_m').show();
$('#about_m').show();
$('#project_m').show();
$('#services_m').show();
$('#order_m').show();
$('.footer_txt_m').show();
   }
});

var i=1;

$("#arrow").click(function(){
   var selected = $(this).val();
    var image = $("#number");
    var mainimg = $("#main");

    switch(i){
      case 1: {i=2;break;}
      case 2: {i=3;break;}
      case 3: {i=1;break;}     
    }
    image.fadeOut('fast', function () {
        image.attr('src', 'image/0'+i+'.png');
        image.fadeIn('normal');
    });

    mainimg.fadeOut(4, function () {
        mainimg.attr('src', 'image/main_img_'+i+'.jpg');
        mainimg.fadeIn('fast');
    });
})

$("#arrow_m").click(function(){
   var selected = $(this).val();
    var image = $("#number_m");
    var mainimg = $("#main_m");

    switch(i){
      case 1: {i=2;break;}
      case 2: {i=3;break;}
      case 3: {i=1;break;}     
    }
    image.fadeOut('fast', function () {
        image.attr('src', 'image/0'+i+'.png');
        image.fadeIn('normal');
    });

    mainimg.fadeOut(4, function () {
        mainimg.attr('src', 'image/main_img_'+i+'.jpg');
        mainimg.fadeIn('fast');
    });
})


$( window ).resize(function() {


    if($( window ).width()>800){
$('#header').show();
$('#about').show();
$('#project').show();
$('#services').show();
$('#order').show();
$('.footer_txt').show();

$('#header_m').hide();
$('#about_m').hide();
$('#project_m').hide();
$('#services_m').hide();
$('#order_m').hide();
$('.footer_txt_m').hide();
   }
   else{
$('#header_m').show();
$('#about_m').show();
$('#project_m').show();
$('#services_m').show();
$('#order_m').show();
$('.footer_txt_m').show();

$('#header').hide();
$('#about').hide();
$('#project').hide();
$('#services').hide();
$('#order').hide();
$('.footer_txt').hide();

   }
   
   
});

</script>
</html>