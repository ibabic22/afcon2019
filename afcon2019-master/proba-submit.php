<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Afcon 2019</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
  <link rel="shortcut icon" href="#"/>

  <!-- JQuery -->
  <script src="js/jquery v3.3.1.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <script src="js/bootstrap.min.js"></script>

</head>
<body>

  <?php 
  // UTAKMICE PETAK
  $zimbabwe_01 =  $_GET["zimbabwe_01"];
  $egypt_01 =  $_GET["egypt_01"]; 


  // UTAKMICE SUBOTA
  $congo_01 =  $_GET["congo_01"];
  $uganda_01 =  $_GET["uganda_01"];

  $nigeria_01 = $_GET["nigeria_01"];
  $burundi_01 = $_GET["burundi_01"];

  $guinea_01 = $_GET["guinea_01"];
  $madagascar_01 = $_GET["madagascar_01"];

  // UTAKMICE NEDELJA
  $morocco_01 = $_GET["morocco_01"];
  $namibia_01 = $_GET["namibia_01"];

  $senegal_01 = $_GET["senegal_01"];
  $tanzania_01 = $_GET["tanzania_01"];

  $algeria_01 = $_GET["algeria_01"];
  $kenya_01 = $_GET["kenya_01"];

  // UTAKMICE PONEDELJAK
  $cote_01 = $_GET["cote_01"];
  $south_africa_01 = $_GET["south_africa_01"];

  $tunisia_01 = $_GET["tunisia_01"];
  $angola_01 = $_GET["angola_01"];

  $mali_01 = $_GET["mali_01"];
  $mauritania_01 = $_GET["mauritania_01"];
  
  // UTAKMICE UTORAK
  $cameroon_01 = $_GET["cameroon_01"];
  $guinea_bissau_01 = $_GET["guinea_bissau_01"];

  $ghana_01 = $_GET["ghana_01"];
  $benin_01 = $_GET["benin_01"];
  //var_dump($zimbabwe_01);

  // UTAKMICE SREDA 02
  $nigeria_02 = $_GET["nigeria_02"];
  $guinea_02 = $_GET["guinea_02"];

  $uganda_02 = $_GET["uganda_02"];
  $zimbabwe_02 = $_GET["zimbabwe_02"];

  $egypt_02 = $_GET["egypt_02"];
  $congo_02 = $_GET["congo_02"];

  // UTAKMICE CETVRTAK
  $madagascar_02 = $_GET["madagascar_02"];
  $burundi_02 = $_GET["burundi_02"];

  $senegal_02 = $_GET["senegal_02"];
  $algeria_02 = $_GET["algeria_02"];

  $kenya_02 = $_GET["kenya_02"];
  $tanzania_02 = $_GET["tanzania_02"];

  // UTAKMICE PETAK
  $tunisia_02 = $_GET["tunisia_02"];
  $mali_02 = $_GET["mali_02"];

  $morocco_02 = $_GET["morocco_02"];
  $cote_02 = $_GET["cote_02"];

  $south_africa_02 = $_GET["south_africa_02"];
  $namibia_02 = $_GET["namibia_02"];

  // UTAKMICE SUBOTA
  $mauritania_02 = $_GET["mauritania_02"];
  $angola_02 = $_GET["angola_02"];

  $cameroon_02 = $_GET["cameroon_02"];
  $ghana_02 = $_GET["ghana_02"];

  $benin_02 = $_GET["benin_02"];
  $guinea_bissau_02 = $_GET["guinea_bissau_02"];

  //UTAKMICE NEDELJA 03
  $burundi_03 = $_GET["burundi_03"];
  $guinea_03 = $_GET["guinea_03"];

  $madagascar_03 = $_GET["madagascar_03"];
  $nigeria_03 = $_GET["nigeria_03"];

  $zimbabwe_03 = $_GET["zimbabwe_03"];
  $congo_03 = $_GET["congo_03"];

  $uganda_03 =  $_GET["uganda_03"];
  $egypt_03 = $_GET["egypt_03"];
  //UTAKMICE PONEDELJAK
  $namibia_03 = $_GET["namibia_03"];
  $cote_03 = $_GET["cote_03"];

  $south_africa_03 = $_GET["south_africa_03"];
  $morocco_03 = $_GET["morocco_03"];

  $kenya_03 = $_GET["kenya_03"];
  $senegal_03 = $_GET["senegal_03"];

  $tanzania_03 = $_GET["tanzania_03"];
  $algeria_03 = $_GET["algeria_03"];
  //UTAKMICA UTORAK
  $benin_03 = $_GET["benin_03"];
  $cameroon_03 = $_GET["cameroon_03"];

  $guinea_bissau_03 = $_GET["guinea_bissau_03"];
  $ghana_03 = $_GET["ghana_03"];

  $angola_03 = $_GET["angola_03"];
  $mali_03 = $_GET["mali_03"];

  $mauritania_03 = $_GET["mauritania_03"];
  $tunisia_03 = $_GET["tunisia_03"];
  ?>
  <script>
    /* ovako mozemo takodje preuzeti adresu iz get-a*/
// var zimbabwe_utakmica_01 = "<?php echo $zimbabwe_01; ?>";
/* ovako stujes vrednost nekog polja */
// jQuery("#id-input-polja").val( zimbabwe_utakmica_01 );
</script>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/afcon-2019.png"></a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><strong><h1>Afcon 2019</h1></strong></li>

    </ul>
  </div>
</nav>

<?php 
  // inicijalna funkcija za proveru 
function provera($tim_1, $tim_2) { 
  if( isset($_GET[$tim_1]) && ( strlen($_GET[$tim_1]) > 0 ) && isset($_GET[$tim_2]) && ( strlen($_GET[$tim_2]) > 0 )  ) {
    return true; 
}
else { 
  return false; 
} }
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1><strong>2019 African Cup Score Predictor</strong></h1><br>
    <h2 id="about"><strong>Pick the score</strong></h2>  <br> 
    <h3>Fri, 21 Jun 2019</h3><br>
    <form id="rezultati">
      <ul class="list-group">
       

       <?php 
       // PROVERAVAMO DA LI SU UNETI REZULTATI ZA OVA 2 MEČA: 
       if( provera( "egypt_01", "zimbabwe_01" ) ) { 
        ?>

        <li class="list-group-item d-flex li-match" >
         <div class="col-6 d-flex justify-content-end pr-2">
           <div>

             <label class="label-1" for="Egypt">Egypt <img src="images/egypt.png"></label>
             <input type="number" class="match-1" name="egypt" id="egypt" value="<?php echo $egypt_01; ?>" disabled>
             <span>22:00</span>


           </div>

         </div>
         <div class="col-6 d-flex justify-content-start p-0">
           <div>
             <input type="number" class="match-2" name="zimbabwe" id="zimbabwe" value="<?php echo $zimbabwe_01; ?>" disabled>
             <label class="label-2" for="zimbabwe"  id="home"><img src="images/zimbabwe.png">Zimbabwe</label>
           </div>
         </div>
       </li>
       <?php 
}
       ?>

     </ul><br>
     <h3>Sat, 22 Jun 2019</h3><br>
     <ul class="list-group">
     <?php 
     if( provera( "congo_01", "uganda_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="congo">Congo <img src="images/dr-congo.png"></label>
           <input class="match-1" type="number" name="congo" id="congo" value="<?php echo $congo_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="uganda" id="uganda" value="<?php echo $uganda_01; ?>" disabled>
           <label class="label-2" for="uganda"  id ="home"><img src="images/uganda.png">Uganda</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
     
   

  </ul><br>
  <ul class="list-group">
     <?php 
     if( provera( "nigeria_01", "burundi_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="nigeria">Nigeria <img src="images/nigeria.png"></label>
           <input class="match-1" type="number" name="nigeria" id="nigeria" value="<?php echo $nigeria_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="burundi" id="burundi" value="<?php echo $burundi_01; ?>" disabled>
           <label class="label-2" for="burundi"  id ="home"><img src="images/burundi.png">Burundi</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
     
   

  </ul><br>
  <ul class="list-group">
     <?php 
     if( provera( "guinea_01", "madagascar_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="guinea">Guinea <img src="images/guinea.png"></label>
           <input class="match-1" type="number" name="guinea" id="guinea" value="<?php echo $guinea_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="madagascar" id="madagascar" value="<?php echo $madagascar_01; ?>" disabled>
           <label class="label-2" for="madagascar"  id ="home"><img src="images/madagascar.png">Madagascar</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>

  </ul><br>

  <h3>Sun, 23 Jun 2019</h3><br>
  <ul class="list-group">
     <?php 
     if( provera( "morocco_01", "namibia_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="morocco">Marocco <img src="images/morocco.png"></label>
           <input class="match-1" type="number" name="morocco" id="morocco" value="<?php echo $morocco_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="namibia" id="namibia" value="<?php echo $namibia_01; ?>" disabled>
           <label class="label-2" for="namibia"  id ="home"><img src="images/namibia.png">Namibia</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  
  <ul class="list-group">
     <?php 
     if( provera( "senegal_01", "tanzania_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="senegal">Senegal <img src="images/senegal.png"></label>
           <input class="match-1" type="number" name="senegal" id="senegal" value="<?php echo $senegal_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="tanzania" id="tanzania" value="<?php echo $tanzania_01; ?>" disabled>
           <label class="label-2" for="tanzania"  id ="home"><img src="images/tanzania.png">Tanzania</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>


  <ul class="list-group">
     <?php 
     if( provera( "algeria_01", "kenya_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="algeria">Algeria <img src="images/algeria.png"></label>
           <input class="match-1" type="number" name="algeria" id="algeria" value="<?php echo $algeria_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="kenya" id="kenya" value="<?php echo $kenya_01; ?>" disabled>
           <label class="label-2" for="kenya"  id ="home"><img src="images/kenya.png">Kenya</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Mon, 24 Jun 2019</h3><br>
  <ul class="list-group">
     <?php 
     if( provera( "cote_01", "south_africa_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="cote">Cote d'ivoire  <img src="images/cote-d-ivoire.png"></label>
           <input class="match-1" type="number" name="cote" id="cote" value="<?php echo $cote_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="south-africa" id="south-africa" value="<?php echo $south_africa_01; ?>" disabled>
           <label class="label-2" for="south-africa"  id ="home"><img src="images/south-africa.png">South Africa</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "tunisia_01", "angola_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="tunisia">Tunisia<img src="images/tunisia.png"></label>
           <input class="match-1" type="number" name="tunisia" id="tunisia" value="<?php echo $tunisia_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="angola" id="angola" value="<?php echo $angola_01; ?>" disabled>
           <label class="label-2" for="angola"  id ="home"><img src="images/angola.png">Angola</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "mali_01", "mauritania_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="mali">Mali<img src="images/mali.png"></label>
           <input class="match-1" type="number" name="mali" id="mali" value="<?php echo $mali_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="mauritania" id="angola" value="<?php echo $mauritania_01; ?>" disabled>
           <label class="label-2" for="mauritania"  id ="home"><img src="images/mauritania.png">Mauritania</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Tue, 25 Jun 2019</h3><br>

  <ul class="list-group">
     <?php 
     if( provera( "cameroon_01", "guinea_bissau_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="cameroon">Cameroon<img src="images/cameroon.png"></label>
           <input class="match-1" type="number" name="cameroon" id="cameroon" value="<?php echo $cameroon_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="guinea-bissau" id="angola" value="<?php echo $guinea_bissau_01; ?>" disabled>
           <label class="label-2" for="guinea-bissau"  id ="home"><img src="images/guinea-bissau.png">Guinea Bissau</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "ghana_01", "benin_01" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="ghanna">Ghana<img src="images/ghana.png"></label>
           <input class="match-1" type="number" name="ghana" id="ghana" value="<?php echo $ghana_01; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="benin" id="benin" value="<?php echo $benin_01; ?>" disabled>
           <label class="label-2" for="benin"  id ="home"><img src="images/benin.png">Benin</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Wed, 26 Jun 2019</h3><br>

  <ul class="list-group">
     <?php 
     if( provera( "nigeria_02", "guinea_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="nigeria">Nigeria<img src="images/nigeria.png"></label>
           <input class="match-1" type="number" name="nigeria" id="nigeria" value="<?php echo $nigeria_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="guinea" id="guinea" value="<?php echo $guinea_02; ?>" disabled>
           <label class="label-2" for="guinea"  id ="home"><img src="images/guinea.png">Guinea</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "uganda_02", "zimbabwe_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="uganda">Uganda<img src="images/uganda.png"></label>
           <input class="match-1" type="number" name="uganda" id="uganda" value="<?php echo $uganda_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="zimbabwe" id="zimbabwe" value="<?php echo $zimbabwe_02; ?>" disabled>
           <label class="label-2" for="zimbabwe"  id ="home"><img src="images/zimbabwe.png">Zimbabwe</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "egypt_02", "congo_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="egypt">Egypt<img src="images/egypt.png"></label>
           <input class="match-1" type="number" name="egypt" id="egypt" value="<?php echo $egypt_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="dr-congo" id="dr-congo" value="<?php echo $congo_02; ?>" disabled>
           <label class="label-2" for="dr-congo"  id ="home"><img src="images/dr-congo.png">DR Congo</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Thu, 27 Jun 2019</h3><br>

  <ul class="list-group">
     <?php 
     if( provera( "madagascar_02", "burundi_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="madagascar">Madagascar<img src="images/madagascar.png"></label>
           <input class="match-1" type="number" name="madagascar" id="madagascar" value="<?php echo $madagascar_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="burundi" id="burundi" value="<?php echo $burundi_02; ?>" disabled>
           <label class="label-2" for="burundi"  id ="home"><img src="images/burundi.png">Burundi</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "senegal_02", "algeria_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="senegal">Senegal<img src="images/senegal.png"></label>
           <input class="match-1" type="number" name="senegal" id="senegal" value="<?php echo $senegal_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="algeria" id="algeria" value="<?php echo $algeria_02; ?>" disabled>
           <label class="label-2" for="algeria"  id ="home"><img src="images/algeria.png">Algeria</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "kenya_02", "tanzania_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="kenya">Kenya<img src="images/kenya.png"></label>
           <input class="match-1" type="number" name="kenya" id="kenya" value="<?php echo $kenya_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="tanzania" id="tanzania" value="<?php echo $tanzania_02; ?>" disabled>
           <label class="label-2" for="tanzania"  id ="home"><img src="images/tanzania.png">Tanzania</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Fri, 28 Jun 2019</h3><br>

  <ul class="list-group">
     <?php 
     if( provera( "tunisia_02", "mali_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="tunisia">Tunisia<img src="images/tunisia.png"></label>
           <input class="match-1" type="number" name="tunisia" id="tunisia" value="<?php echo $tunisia_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="mali" id="mali" value="<?php echo $mali_02; ?>" disabled>
           <label class="label-2" for="mali"  id ="home"><img src="images/mali.png">Mali</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "morocco_02", "cote_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="morocco">Morocco<img src="images/morocco.png"></label>
           <input class="match-1" type="number" name="morocco" id="morocco" value="<?php echo $morocco_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="cote" id="cote" value="<?php echo $cote_02; ?>" disabled>
           <label class="label-2" for="cote"  id ="home"><img src="images/cote-d-ivoire.png">Cote d'ivoire</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "south_africa_02", "namibia_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="south-africa">South Africa <img src="images/south-africa.png"></label>
           <input class="match-1" type="number" name="south-africa" id="south-africa" value="<?php echo $south_africa_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="namibia" id="namibia" value="<?php echo $namibia_02; ?>" disabled>
           <label class="label-2" for="namibia"  id ="home"><img src="images/namibia.png">Namibia</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Sat, 29 Jun 2019</h3><br>

  <ul class="list-group">
     <?php 
     if( provera( "mauritania_02", "angola_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="mauritania">Mauritania<img src="images/mauritania.png"></label>
           <input class="match-1" type="number" name="mauritania" id="mauritania" value="<?php echo $mauritania_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="angola" id="angola" value="<?php echo $angola_02; ?>" disabled>
           <label class="label-2" for="angola"  id ="home"><img src="images/angola.png">Angola</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "cameroon_02", "ghana_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="cameroon">Cameroon<img src="images/cameroon.png"></label>
           <input class="match-1" type="number" name="cameroon" id="cameroon" value="<?php echo $cameroon_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="ghana" id="ghana" value="<?php echo $ghana_02; ?>" disabled>
           <label class="label-2" for="ghana"  id ="home"><img src="images/ghana.png">Ghana</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "benin_02", "guinea_bissau_02" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="benin">Benin <img src="images/benin.png"></label>
           <input class="match-1" type="number" name="benin" id="benin" value="<?php echo $benin_02; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="guinea-bissau" id="guinea-bissau" value="<?php echo $guinea_bissau_02; ?>" disabled>
           <label class="label-2" for="guinea-bissau"  id ="home"><img src="images/guinea-bissau.png">Guinea-Bissau</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Sun, 30 Jun 2019</h3><br>

  <ul class="list-group">
     <?php 
     if( provera( "burundi_03", "guinea_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="burundi">Burundi<img src="images/burundi.png"></label>
           <input class="match-1" type="number" name="burundi" id="burundi" value="<?php echo $burundi_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="guinea" id="guinea" value="<?php echo $guinea_03; ?>" disabled>
           <label class="label-2" for="guinea"  id ="home"><img src="images/guinea.png">Guinea</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "madagascar_03", "nigeria_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="madagascar">Madagascar<img src="images/madagascar.png"></label>
           <input class="match-1" type="number" name="madagascar" id="madagascar" value="<?php echo $madagascar_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="nigeria" id="nigeria" value="<?php echo $nigeria_03; ?>" disabled>
           <label class="label-2" for="nigeria"  id ="home"><img src="images/nigeria.png">Nigeria</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "zimbabwe_03", "congo_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="zimbabwe">Zimbabwe <img src="images/zimbabwe.png"></label>
           <input class="match-1" type="number" name="zimbabwe" id="zimbabwe" value="<?php echo $zimbabwe_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="congo" id="congo" value="<?php echo $congo_03; ?>" disabled>
           <label class="label-2" for="congo"  id ="home"><img src="images/dr-congo.png">DR Congo</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>
  <ul class="list-group">
     <?php 
     if( provera( "uganda_03", "egypt_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="uganda">Uganda <img src="images/uganda.png"></label>
           <input class="match-1" type="number" name="uganda" id="uganda" value="<?php echo $uganda_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="egypt" id="egypt" value="<?php echo $egypt_03; ?>" disabled>
           <label class="label-2" for="egypt"  id ="home"><img src="images/egypt.png">Egypt</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Mon, 1 Jul 2019</h3><br>

<ul class="list-group">
     <?php 
     if( provera( "namibia_03", "cote_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="namibia">Namibia<img src="images/namibia.png"></label>
           <input class="match-1" type="number" name="namibia" id="namibia" value="<?php echo $namibia_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="cote" id="cote" value="<?php echo $cote_03; ?>" disabled>
           <label class="label-2" for="cote"  id ="home"><img src="images/cote-d-ivoire.png">Cote d'ivoire</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "south_africa_03", "morocco_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="madagascar">South Africa<img src="images/south-africa.png"></label>
           <input class="match-1" type="number" name="madagascar" id="madagascar" value="<?php echo $south_africa_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="morocco" id="morocco" value="<?php echo $morocco_03; ?>" disabled>
           <label class="label-2" for="morocco"  id ="home"><img src="images/morocco.png">Morocco</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "kenya_03", "senegal_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="kenya">Kenya <img src="images/kenya.png"></label>
           <input class="match-1" type="number" name="kenya" id="kenya" value="<?php echo $kenya_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="senegal" id="senegal" value="<?php echo $senegal_03; ?>" disabled>
           <label class="label-2" for="senegal"  id ="home"><img src="images/senegal.png">Senegal</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>
  <ul class="list-group">
     <?php 
     if( provera( "tanzania_03", "algeria_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="tanzania">Tanzania <img src="images/tanzania.png"></label>
           <input class="match-1" type="number" name="tanzania" id="tanzania" value="<?php echo $tanzania_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="algeria" id="algeria" value="<?php echo $algeria_03; ?>" disabled>
           <label class="label-2" for="algeria"  id ="home"><img src="images/algeria.png">Algeria</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <h3>Tue, 2 Jul 2019</h3><br>

  <ul class="list-group">
     <?php 
     if( provera( "benin_03", "cameroon_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="benin">Benin<img src="images/benin.png"></label>
           <input class="match-1" type="number" name="benin" id="benin" value="<?php echo $benin_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="cameroon" id="cameroon" value="<?php echo $cameroon_03; ?>" disabled>
           <label class="label-2" for="cameroon"  id ="home"><img src="images/cameroon.png">Cameroon</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "guinea_bissau_03", "ghana_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="guinea-bissau">Guinea Bissau<img src="images/guinea-bissau.png"></label>
           <input class="match-1" type="number" name="guinea-bissau" id="guinea-bissau" value="<?php echo $guinea_bissau_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="ghana" id="ghana" value="<?php echo $ghana_03; ?>" disabled>
           <label class="label-2" for="ghana"  id ="home"><img src="images/ghana.png">Ghana</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>

  <ul class="list-group">
     <?php 
     if( provera( "angola_03", "mali_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="angola">Angola <img src="images/angola.png"></label>
           <input class="match-1" type="number" name="angola" id="angola" value="<?php echo $angola_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="mali" id="mali" value="<?php echo $mali_03; ?>" disabled>
           <label class="label-2" for="mali"  id ="home"><img src="images/mali.png">Mali</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br>
  <ul class="list-group">
     <?php 
     if( provera( "mauritania_03", "tunisia_03" ) ) { 
        ?>
      <li class="list-group-item d-flex li-match" >
       <div class="col-6 d-flex justify-content-end pr-2">
         <div>
           <label class="label-1" for="mauritania">Mauritania <img src="images/mauritania.png"></label>
           <input class="match-1" type="number" name="mauritania" id="mauritania" value="<?php echo $mauritania_03; ?>" disabled>
           <span>16:30</span>


         </div>
         
       </div>
       <div class="col-6 d-flex justify-content-start p-0">
         <div>
           <input class="match-2" type="number" name="tunisia" id="tunisia" value="<?php echo $tunisia_03; ?>" disabled>
           <label class="label-2" for="tunisia"  id ="home"><img src="images/tunisia.png">Tunisia</label>
         </div>
         
       </div>

     </li>
   <?php } ?>
     <br>
  </ul><br><br>

  <form name="contactform" method="post" action="contact.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="First name">First name</label>
          <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
        </div>
        <div class="form-group col-md-6">
          <label for="last name">Last name</label>
          <input type="text" class="form-control"  name="last_name" id="last_name" placeholder="Last name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Email</label>
        <input type="email" class="form-control"  name="email" id="email" placeholder="email">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Results</label>
        <textarea id="all-results" name="all-results" class="form-control" rows="4" cols="50">
          
    </textarea>
      </div>
      
      <input type="submit" value="Submit">   <a href="http://localhost/afcon2019-master/contact.php">Email Form</a>
</form>
 
      




  

</form>
<p id="create"></p>





</div>
</div>
<script>
  
  $( ".li-match" ).each( function() {
    var prvi_tim = $( this ).find(".label-1").text();
    var drugi_tim = $( this ).find(".label-2").text();
   
    var prvi_score =  $( this ).find(".match-1").val();
    var drugi_score =  $( this ).find(".match-2").val();
   
    $("#all-results").append( prvi_tim + prvi_score + " - " + drugi_score + " " + drugi_tim + "&#013;&#010;&#013;&#010;" );
    // console.log( prvi_tim.get() + drugi_tim.get( 0 ) );
});
</script>

</body>
</html>