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

     <div class="jumbotron">
        <div class="container text-center">
            <h1><strong>2019 African Cup Score Predictor</strong></h1><br>
              <h2 id="about"><strong>Pick the score</strong></h2>  <br> 
               <h3>Fri, 21 Jun 2019</h3><br>
    <form id="rezultati" action="http://localhost/afcon2019-master/proba-submit.php" class="booking-form-2" method="get">
        <ul class="list-group">
          <li class="list-group-item d-flex" >
           <div class="col-6 d-flex justify-content-end pr-2">
           <div>
             <label for="Egypt">Egypt <img src="images/egypt.png"></label>
             <input type="number" name="egypt_01" id="egypt" value="">
             <span>22:00</span>                   
           </div>
           </div>
           <div class="col-6 d-flex justify-content-start p-0">
           <div>
             <input type="number" name="zimbabwe_01" id="zimbabwe" value="">
             <label for="zimbabwe"  id ="home"><img src="images/zimbabwe.png">Zimbabwe</label>
           </div>
     
           </div>           
          </li>                     
      </ul><br>
        
          <h3>Sat, 22 Jun 2019</h3><br>
         <ul class="list-group">
            <li class="list-group-item d-flex" >
               <div class="col-6 d-flex justify-content-end pr-2">
               <div>
                 <label for="congo">Congo <img src="images/dr-congo.png"></label>
                 <input type="number" name="congo_01" id="congo" value="">
                 <span>16:30</span>
                  
               
               </div>
         
               </div>
            <div class="col-6 d-flex justify-content-start p-0">
               <div>
                 <input type="number" name="uganda_01" id="uganda" value="">
                 <label for="uganda"  id ="home"><img src="images/uganda.png">Uganda</label>
               </div>
         
             </div>
                           
           </li><br>
            <li class="list-group-item d-flex" >
                  <div class="col-6 d-flex justify-content-end pr-2">
                  <div>
                    <label for="nigeria">Nigeria <img src="images/nigeria.png"></label>
                    <input type="number" name="nigeria_01" id="nigeria" value="">
                    <span>19:00</span>
                      
                  
                  </div>
            
                  </div>
                  <div class="col-6 d-flex justify-content-start p-0">
                  <div>
                    <input type="number" name="burundi_01" id="burundi" value="">
                    <label for="burundi"  id ="home"><img src="images/burundi.png">Burundi</label>
                  </div>
            
                  </div>
                              
            </li><br>

            <li class="list-group-item d-flex" >
              <div class="col-6 d-flex justify-content-end pr-2">
              <div>
                <label for="guinea">Guinea <img src="images/guinea.png"></label>
                <input type="number" name="guinea_01" id="guinea" value="">
                <span>22:00</span>
                  
              
              </div>
        
              </div>
              <div class="col-6 d-flex justify-content-start p-0">
              <div>
                <input type="number" name="madagascar_01" id="madagascar" value="">
                <label for="madagascar"  id ="home"><img src="images/madagascar.png">Madagascar</label>
              </div>
        
              </div>
                          
        </li><br>
                            
          </ul><br>

          <h3>Sun, 23 Jun 2019</h3><br>
          <ul class="list-group">
             <li class="list-group-item d-flex" >
                <div class="col-6 d-flex justify-content-end pr-2">
                <div>
                  <label for="morocco">Morocco <img src="images/morocco.png"></label>
                  <input type="number" name="morocco_01" id="morocco" value="">
                  <span>16:30</span>
                   
                
                </div>
          
                </div>
             <div class="col-6 d-flex justify-content-start p-0">
                <div>
                  <input type="number" name="namibia_01" id="namibia" value="">
                  <label for="namibia"  id ="home"><img src="images/namibia.png">Namibia</label>
                </div>
          
              </div>
                            
            </li><br>
            <li class="list-group-item d-flex" >
                  <div class="col-6 d-flex justify-content-end pr-2">
                  <div>
                    <label for="senegal">Senegal <img src="images/senegal.png"></label>
                    <input type="number" name="senegal_01" id="senegal" value="">
                    <span>19:00</span>
                    
                  
                  </div>
            
                  </div>
                  <div class="col-6 d-flex justify-content-start p-0">
                  <div>
                    <input type="number" name="tanzania_01" id="tanzania" value="">
                    <label for="tanzania"  id ="home"><img src="images/tanzania.png">Tanzania</label>
                  </div>
            
                  </div>
                              
            </li><br>
 
            <li class="list-group-item d-flex" >
              <div class="col-6 d-flex justify-content-end pr-2">
              <div>
                <label for="algeria">Algeria <img src="images/algeria.png"></label>
                <input type="number" name="algeria_01" id="algeria" value="">
                <span>22:00</span>
                
              
              </div>
        
              </div>
              <div class="col-6 d-flex justify-content-start p-0">
              <div>
                <input type="number" name="kenya_01" id="kenya" value="">
                <label for="kenya"  id ="home"><img src="images/kenya.png">Kenya</label>
              </div>
        
              </div>
                          
        </li><br>
                             
           </ul><br>
 

           <h3>Mon, 24 Jun 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="cote">Cote d'ivoire<img src="images/cote-d-ivoire.png"></label>
                   <input type="number" name="cote_01" id="cote" value="">
                   <span>16:30</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="south_africa_01" id="south-africa" value="">
                   <label for="south-africa"  id ="home"><img src="images/south-africa.png">South Africa</label>
                 </div>
           
               </div>
                             
             </li><br>
              <li class="list-group-item d-flex" >
                    <div class="col-6 d-flex justify-content-end pr-2">
                    <div>
                      <label for="tunisia">Tunisia <img src="images/tunisia.png"></label>
                      <input type="number" name="tunisia_01" id="tunisia" value="">
                      <span>19:00</span>
                        
                    
                    </div>
              
                    </div>
                    <div class="col-6 d-flex justify-content-start p-0">
                    <div>
                      <input type="number" name="angola_01" id="angola" value="">
                      <label for="angola"  id ="home"><img src="images/angola.png">Angola</label>
                    </div>
              
                    </div>
                                
              </li><br>
  
              <li class="list-group-item d-flex" >
                <div class="col-6 d-flex justify-content-end pr-2">
                <div>
                  <label for="mali">Mali <img src="images/mali.png"></label>
                  <input type="number" name="mali_01" id="mali" value="">
                  <span>22:00</span>
                    
                
                </div>
          
                </div>
                <div class="col-6 d-flex justify-content-start p-0">
                <div>
                  <input type="number" name="mauritania_01" id="mauritania" value="">
                  <label for="mauritania"  id ="home"><img src="images/mauritania.png">Mauritania</label>
                </div>
          
                </div>
                            
            </li><br>
                              
            </ul><br>

            <h3>Tue, 25 Jun 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="cameroon">Cameroon <img src="images/cameroon.png"></label>
                   <input type="number" name="cameroon_01" id="cameroon" value="">
                   <span>19:00</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="guinea_bissau_01" id="guinea-bissau" value="">
                   <label for="guinea-bissau"  id ="home"><img src="images/guinea-bissau.png">Guinea-Bissau</label>
                 </div>
           
               </div>
                             
             </li><br>
              <li class="list-group-item d-flex" >
                    <div class="col-6 d-flex justify-content-end pr-2">
                    <div>
                      <label for="ghana">Ghana <img src="images/ghana.png"></label>
                      <input type="number" name="ghana_01" id="ghana" value="">
                      <span>22:00</span>
                        
                    
                    </div>
              
                    </div>
                    <div class="col-6 d-flex justify-content-start p-0">
                    <div>
                      <input type="number" name="benin_01" id="benin" value="">
                      <label for="benin"  id ="home"><img src="images/benin.png">Benin</label>
                    </div>
              
                    </div>
                                
              </li><br>
             </ul><br>

             <h3>Wed, 26 Jun 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="cote">Nigeria <img src="images/nigeria.png"></label>
                   <input type="number" name="nigeria_02" id="nigeria" value="">
                   <span>16:30</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="guinea_02" id="guinea" value="">
                   <label for="guinea"  id ="home"><img src="images/guinea.png">Guinea</label>
                 </div>
           
               </div>
                             
             </li><br>
              <li class="list-group-item d-flex" >
                    <div class="col-6 d-flex justify-content-end pr-2">
                    <div>
                      <label for="uganda">Uganda <img src="images/uganda.png"></label>
                      <input type="number" name="uganda_02" id="uganda" value="">
                      <span>19:00</span>
                        
                    
                    </div>
              
                    </div>
                    <div class="col-6 d-flex justify-content-start p-0">
                    <div>
                      <input type="number" name="zimbabwe_02" id="zimbabwe" value="">
                      <label for="zimbabwe"  id ="home"><img src="images/zimbabwe.png">Zimbabwe</label>
                    </div>
              
                    </div>
                                
              </li><br>
  
              <li class="list-group-item d-flex" >
                <div class="col-6 d-flex justify-content-end pr-2">
                <div>
                  <label for="egypt">Egypt <img src="images/egypt.png"></label>
                  <input type="number" name="egypt_02" id="egypt" value="">
                  <span>22:00</span>
                    
                
                </div>
          
                </div>
                <div class="col-6 d-flex justify-content-start p-0">
                <div>
                  <input type="number" name="congo_02" id="congo" value="">
                  <label for="congo"  id ="home"><img src="images/dr-congo.png">DR Congo</label>
                </div>
          
                </div>
                            
          </li><br>
                              
            </ul><br>

            <h3>Thu, 27 Jun 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="madagascar">Madagascar <img src="images/madagascar.png"></label>
                   <input type="number" name="madagascar_02" id="madagascar" value="">
                   <span>16:30</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="burundi_02" id="burundi" value="">
                   <label for="burundi"  id ="home"><img src="images/burundi.png">Burundi</label>
                 </div>
           
               </div>
                             
             </li><br>
              <li class="list-group-item d-flex" >
                    <div class="col-6 d-flex justify-content-end pr-2">
                    <div>
                      <label for="senegal">Senegal <img src="images/senegal.png"></label>
                      <input type="number" name="senegal_02" id="senegal" value="">
                      <span>19:00</span>
                        
                    
                    </div>
              
                    </div>
                    <div class="col-6 d-flex justify-content-start p-0">
                    <div>
                      <input type="number" name="algeria_02" id="algeria" value="">
                      <label for="algeria"  id ="home"><img src="images/algeria.png">Algeria</label>
                    </div>
              
                    </div>
                                
              </li><br>
  
              <li class="list-group-item d-flex" >
                <div class="col-6 d-flex justify-content-end pr-2">
                <div>
                  <label for="kenya">Kenya <img src="images/kenya.png"></label>
                  <input type="number" name="kenya_02" id="kenya" value="">
                  <span>22:00</span>
                    
                
                </div>
          
                </div>
                <div class="col-6 d-flex justify-content-start p-0">
                <div>
                  <input type="number" name="tanzania_02" id="tanzania" value="">
                  <label for="tanzania"  id ="home"><img src="images/tanzania.png">Tanzania</label>
                </div>
          
                </div>
                            
          </li><br>
                              
            </ul><br>

            <h3>Fri, 28 Jun 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="tunisia">Tunisia <img src="images/tunisia.png"></label>
                   <input type="number" name="tunisia_02" id="tunisia" value="">
                   <span>16:30</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="mali_02" id="mali" value="">
                   <label for="mali"  id ="home"><img src="images/mali.png">Mali</label>
                 </div>
           
               </div>
                             
             </li><br>
              <li class="list-group-item d-flex" >
                    <div class="col-6 d-flex justify-content-end pr-2">
                    <div>
                      <label for="morocco">Morocco <img src="images/morocco.png"></label>
                      <input type="number" name="morocco_02" id="morocco" value="">
                      <span>19:00</span>
                        
                    
                    </div>
              
                    </div>
                    <div class="col-6 d-flex justify-content-start p-0">
                    <div>
                      <input type="number" name="cote_02" id="cote" value="">
                      <label for="cote"  id ="home"><img src="images/cote-d-ivoire.png">Cote d'ivoire</label>
                    </div>
              
                    </div>
                                
              </li><br>

              <li class="list-group-item d-flex" >
                <div class="col-6 d-flex justify-content-end pr-2">
                <div>
                  <label for="south-africa">South Africa <img src="images/south-africa.png"></label>
                  <input type="number" name="south_africa_02" id="south-africa" value="">
                  <span>22:00</span>
                    
                
                </div>
          
                </div>
                <div class="col-6 d-flex justify-content-start p-0">
                <div>
                  <input type="number" name="namibia_02" id="namibia" value="">
                  <label for="namibia"  id ="home"><img src="images/namibia.png">Namibia</label>
                </div>
          
                </div>
                            
          </li><br>
                              
            </ul><br>

            <h3>Sat, 29 Jun 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="mauritania">Mauritania <img src="images/mauritania.png"></label>
                   <input type="number" name="mauritania_02" id="mauritania" value="">
                   <span>16:30</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="angola_02" id="angola" value="">
                   <label for="angola"  id ="home"><img src="images/angola.png">Angola</label>
                 </div>
           
               </div>
                             
             </li><br>
              <li class="list-group-item d-flex" >
                    <div class="col-6 d-flex justify-content-end pr-2">
                    <div>
                      <label for="cameroon">Cameroon <img src="images/cameroon.png"></label>
                      <input type="number" name="cameroon_02" id="cameroon" value="">
                      <span>19:00</span>
                        
                    
                    </div>
              
                    </div>
                    <div class="col-6 d-flex justify-content-start p-0">
                    <div>
                      <input type="number" name="ghana_02" id="ghana" value="">
                      <label for="ghana"  id ="home"><img src="images/ghana.png">Ghana</label>
                    </div>
              
                    </div>
                                
              </li><br>
  
                <li class="list-group-item d-flex" >
                  <div class="col-6 d-flex justify-content-end pr-2">
                  <div>
                    <label for="benin">Benin <img src="images/benin.png"></label>
                    <input type="number" name="benin_02" id="benin" value="">
                    <span>22:00</span>
                      
                  
                  </div>
            
                  </div>
                  <div class="col-6 d-flex justify-content-start p-0">
                  <div>
                    <input type="number" name="guinea_bissau_02" id="guinea-bissau" value="">
                    <label for="guinea-bissau"  id ="home"><img src="images/guinea-bissau.png">Guinea-Bissau</label>
                  </div>
            
                  </div>
                              
            </li><br>
                              
            </ul><br>

            <h3>Sun, 30 Jun 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="burundi">Burundi <img src="images/burundi.png"></label>
                   <input type="number" name="burundi_03" id="burundi" value="">
                   <span>18:00</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="guinea_03" id="guinea" value="">
                   <label for="guinea"  id ="home"><img src="images/guinea.png">Guinea</label>
                 </div>
           
               </div>
                             
             </li><br>
                        <li class="list-group-item d-flex" >
                              <div class="col-6 d-flex justify-content-end pr-2">
                              <div>
                                <label for="madagascar">Madagascar <img src="images/madagascar.png"></label>
                                <input type="number" name="madagascar_03" id="madagascar" value="">
                                <span>18:00</span>
                                 
                              
                              </div>
                        
                              </div>
                              <div class="col-6 d-flex justify-content-start p-0">
                              <div>
                                <input type="number" name="nigeria_03" id="nigeria" value="">
                                <label for="nigeria"  id ="home"><img src="images/nigeria.png">Nigeria</label>
                              </div>
                        
                              </div>
                                          
                        </li><br>
  
                        <li class="list-group-item d-flex" >
                          <div class="col-6 d-flex justify-content-end pr-2">
                          <div>
                            <label for="zimbabwe">Zimbabwe <img src="images/zimbabwe.png"></label>
                            <input type="number" name="zimbabwe_03" id="zimbabwe" value="">
                            <span>21:00</span>
                             
                          
                          </div>
                    
                          </div>
                          <div class="col-6 d-flex justify-content-start p-0">
                          <div>
                            <input type="number" name="congo_03" id="dr-congo" value="">
                            <label for="congo"  id ="home"><img src="images/dr-congo.png">DR Congo</label>
                          </div>
                    
                          </div>
                                      
                    </li><br>

                    <li class="list-group-item d-flex" >
                        <div class="col-6 d-flex justify-content-end pr-2">
                        <div>
                          <label for="uganda">Uganda <img src="images/uganda.png"></label>
                          <input type="number" name="uganda_03" id="uganda" value="">
                          <span>21:00</span>
                           
                        
                        </div>
                  
                        </div>
                        <div class="col-6 d-flex justify-content-start p-0">
                        <div>
                          <input type="number" name="egypt_03" id="egypt" value="">
                          <label for="egypt"  id ="home"><img src="images/egypt.png">Egypt</label>
                        </div>
                  
                        </div>
                                    
                  </li><br>
                              
            </ul><br>

            <h3>Mon, 1 Jul 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="namibia">Namibia <img src="images/namibia.png"></label>
                   <input type="number" name="namibia_03" id="namibia" value="">
                   <span>18:00</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="cote_03" id="cote" value="">
                   <label for="cote"  id ="home"><img src="images/cote-d-ivoire.png">Cote d'ivoire</label>
                 </div>
           
               </div>
                             
             </li><br>
                        <li class="list-group-item d-flex" >
                              <div class="col-6 d-flex justify-content-end pr-2">
                              <div>
                                <label for="south-africa">South Africa <img src="images/south-africa.png"></label>
                                <input type="number" name="south_africa_03" id="south-africa" value="">
                                <span>18:00</span>
                                 
                              
                              </div>
                        
                              </div>
                              <div class="col-6 d-flex justify-content-start p-0">
                              <div>
                                <input type="number" name="morocco_03" id="morocco" value="">
                                <label for="morocco"  id ="home"><img src="images/morocco.png">Morocco</label>
                              </div>
                        
                              </div>
                                          
                        </li><br>
  
                        <li class="list-group-item d-flex" >
                          <div class="col-6 d-flex justify-content-end pr-2">
                          <div>
                            <label for="kenya">Kenya <img src="images/kenya.png"></label>
                            <input type="number" name="kenya_03" id="kenya" value="">
                            <span>21:00</span>
                             
                          
                          </div>
                    
                          </div>
                          <div class="col-6 d-flex justify-content-start p-0">
                          <div>
                            <input type="number" name="senegal_03" id="senegal" value="">
                            <label for="senegal"  id ="home"><img src="images/senegal.png">Senegal</label>
                          </div>
                    
                          </div>
                                      
                    </li><br>

                    <li class="list-group-item d-flex" >
                        <div class="col-6 d-flex justify-content-end pr-2">
                        <div>
                          <label for="tanzania">Tanzania <img src="images/tanzania.png"></label>
                          <input type="number" name="tanzania_03" id="tanzania" value="">
                          <span>21:00</span>
                           
                        
                        </div>
                  
                        </div>
                        <div class="col-6 d-flex justify-content-start p-0">
                        <div>
                          <input type="number" name="algeria_03" id="algeria" value="">
                          <label for="algeria"  id ="home"><img src="images/algeria.png">Algeria</label>
                        </div>
                  
                        </div>
                                    
                  </li><br>
                              
            </ul><br>

            <h3>Tue, 2 Jul 2019</h3><br>
           <ul class="list-group">
              <li class="list-group-item d-flex" >
                 <div class="col-6 d-flex justify-content-end pr-2">
                 <div>
                   <label for="benin">Benin <img src="images/benin.png"></label>
                   <input type="number" name="benin_03" id="benin" value="">
                   <span>18:00</span>
                    
                 
                 </div>
           
                 </div>
              <div class="col-6 d-flex justify-content-start p-0">
                 <div>
                   <input type="number" name="cameroon_03" id="cameroon" value="">
                   <label for="cameroon"  id ="home"><img src="images/cameroon.png">Cameroon</label>
                 </div>
           
               </div>
                             
             </li><br>
              <li class="list-group-item d-flex" >
                    <div class="col-6 d-flex justify-content-end pr-2">
                    <div>
                      <label for="guinea-bissau">Guinea-Bissau <img src="images/guinea-bissau.png"></label>
                      <input type="number" name="guinea_bissau_03" id="guinea-bissau" value="">
                      <span>18:00</span>
                        
                    
                    </div>
              
                    </div>
                    <div class="col-6 d-flex justify-content-start p-0">
                    <div>
                      <input type="number" name="ghana_03" id="ghana" value="">
                      <label for="ghana"  id ="home"><img src="images/ghana.png">Ghana</label>
                    </div>
              
                    </div>
                                
              </li><br>
  
              <li class="list-group-item d-flex" >
                <div class="col-6 d-flex justify-content-end pr-2">
                <div>
                  <label for="angola">Angola <img src="images/angola.png"></label>
                  <input type="number" name="angola_03" id="angola" value="">
                  <span>21:00</span>
                    
                
                </div>
          
                </div>
                <div class="col-6 d-flex justify-content-start p-0">
                <div>
                  <input type="number" name="mali_03" id="mali" value="">
                  <label for="mali"  id ="home"><img src="images/mali.png">Mali</label>
                </div>
          
                </div>
                            
          </li><br>

            <li class="list-group-item d-flex" >
                <div class="col-6 d-flex justify-content-end pr-2">
                <div>
                  <label for="mauritania">Mauritania <img src="images/mauritania.png"></label>
                  <input type="number" name="mauritania_03" id="mauritania" value="">
                  <span>21:00</span>
                    
                
                </div>
          
                </div>
                <div class="col-6 d-flex justify-content-start p-0">
                <div>
                  <input type="number" name="tunisia_03" id="tunisia" value="">
                  <label for="tunisia"  id ="home"><img src="images/tunisia.png">Tunisia</label>
                </div>
          
                </div>
                            
          </li><br>
                              
      </ul><br>

      <div class="col-12 row justify-content-center p-0">
          <button class="mr-3 btn btn-success" type="submit" id="btn">Send</button>
      </div>
  </form>
              

  </div>
</div>
</body>
</html>