<?php
include("view/header.php");
?>

<div id="slideshowbase">
      <div id="slideshadow"><img src="resources/slideshadow.png" width="840" height="142" alt=""/></div>
<div id="slidewrapper">
<div id="slideshow">
          <div>
       		 <img src="resources/slide01.jpg" width="800" height="240" alt=""/></div>
          <div>
     		 <img src="resources/slide02.jpg" width="800" height="240" alt=""/></div>
          <div>
     		 <img src="resources/slide05.jpg" width="800" height="240" alt=""/></div>
          <div>
   		     <img src="resources/slide04.jpg" width="800" height="240" alt=""/></div>
          <div>
	         <img src="resources/slide03.jpg" width="800" height="240" alt=""/></div>
          <div>
	         <img src="resources/slide06.jpg" width="800" height="240" alt=""/></div>
        </div>
      </div>
      </div>
      <div id="introbox">
        <div id="intrographics_top"><h1><img src="resources/doubLine.png" width="563" height="7" alt=""/></h1></div>
        <p>Think of a place where nature has been untouched for hundreds of years...<br>
                        Where life goes on unhindered by the hand of man. <br>
                        A place where the cicada's cry is nestled against the soft petals of an orchid. <br>
                        Where squirrels glide free in canopies of mahogany. Where deer drink from the gushing stream. <br>
                        You too can experience the purest water on earth, or gaze like hornbills from 100ft up. <br>
        The place is Niketh Resort.</p>
        <div id="intrographics_down"><h1><img src="resources/mainTxt.png" width="151" height="43" alt=""/></h1>
        </div>
      </div>
      <div id="contentsbase">
        <div id="cont_shadowup"><img src="resources/shade_up.png" width="588" height="23" alt=""/></div>

       	  <table border="0" id="cont_table">
            <tbody>
              <tr>
                <td>
                  <div class="cont_column">
          		    <div class="column_shadow"><img src="resources/column_shadow.png" /></div>
                  <div class="column_img" id="colimg1"><img src="resources/tiger.png" width="170" /></div>
                  <div class="columntext"><h4>Muthanga Wild Life Sanctuary - 40kms</h4>
                                            <p>Wayanad Wildlife Sanctuary is an animal sanctuary in Wayanad, Kerala, south India.
                                            It is on the way from Mysore to Sultan Battery.
                                            A variety of large wild animals such as Indian Bison, elephant,
                                            deer and tiger are found there.</p>
                   </div>
                  </div>
                </td>
                <td>
                  <div class="cont_column">
          		    <div class="column_shadow"><img src="resources/column_shadow.png" /></div>
                  <div class="column_img" id="colimg2"><img src="resources/dam.png" width="170" /></div>
                  <div class="columntext"><h4>Banasura Sagar Dam - 15kms</h4>
                                            <p>Banasura Sagar Dam, which impounds
                                              the Karamanathodu tributary of the Kabini River,
                                              is part of the Indian Banasurasagar
                                              Project consisting of a dam and a canal
                                              project started in 1979..</p>
                   </div>
                  </div>
                </td>
                <td></td>
                <td><div id="newletter_block" class="comblock">
                  <div class="newsheader">News Letter</div>
                  <p>By subscribing to our mailing list you will always be updated with the latest news from us.</p>
                  <form action="index.php" method="post">
                  <input type="email" placeholder="Your email" name="email" class="newemail"></br>
                  <input type="submit" name="newsletter" class="newsbtn">
                  </form>
                </div></td>

              </tr>
              <tr>
                <td>
                  <div class="cont_column">
          		    <div class="column_shadow"><img src="resources/column_shadow.png" /></div>
                  <div class="column_img" id="colimg3"><img src="resources/lake.png" width="170" /></div>
                  <div class="columntext"><h4>Pookode Lake - 3.5kms</h4>
                                            <p>Pookode Lake is a scenic freshwater lake in the Wayanad district in Kerala, South India...</p>
                   </div>
                  </div>
                </td>
                <td>
                  <div class="cont_column">
          		    <div class="column_shadow"><img src="resources/column_shadow.png" /></div>
                  <div class="column_img" id="colimg4"><img src="resources/cave.png" width="170" /></div>
                  <div class="columntext"><h4>Edakkal Caves - 26kms</h4>
                                            <p>Edakkal Caves are two natural caves
                                              at a remote location at Edakkal,
                                              25 km from Kalpetta in the Wayanad
                                              district of Kerala in India's Western Ghats..</p>
                   </div>
                  </div>
                </td>
                <td></td>
                <td><div id="getintouch" class="comblock">
                  <div class="newsheader" >Get in touch</div>
                  <p id="phone">T (+91) 944 751 5736</p>
                  <p>e-Mail: viji.vettukattil@gmail.com</p>
                  <p id="address">Niketh Resorts
                    Old Vythiri, Wayanand
                    Kerala, India</p>
                </div></td>
              </tr>
            </tbody>
          </table>


      <footer id="footer">
      	<div id="footernav">
        home | about | rooms | gallary | contact
        </div>
      </footer>
    </div>
    </main>

    <?php
	include("view/footer.php");
	?>
