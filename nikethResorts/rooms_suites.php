<?php
include("view/header.php");
?>
<div class="pageheader">Rooms & Suites</div>
<div id="roomswrapper">
<div id="room1" class="room">
  <div class="roomimg"><img src="resources/kabani.jpg" width="234" height="152" alt=""/>
    <form action="reservation.php?available=true&roomid=103" method="post">
      <input type="hidden" value="" name="kabani">
      <input type="submit" name="bookkabani" value="Book Now" class="bookbtn">
      </form>
    </div>
  <div class="roomdetails">
    <h3>Kabani</h3>
    <p>Looking for some extra room to stretch out and relax?
      Our Rooms are spacious, comfortable and convenient.
      Rooms inspired by traditional Kerala architecture with generous use of wood,
      balconies with splendid views of the forest.</p>
    <h4>Features</h4>
    <ul>
      <li>Continental breakfast</li>
      <li>Travel Assistance</li>
      <li>Health Club</li>
      <li>Hot & Cold Water</li>
      </ul>
    </div>
</div>


<div id="room2" class="room">
<div class="roomimg"><img src="resources/kaveri.jpg" width="234" height="152" alt=""/>
<form action="reservation.php?available=true&roomid=104" method="post">
  <input type="hidden" value="" name="kaveri">
  <input type="submit" name="bookkaveri" value="Book Now" class="bookbtn">
  </form>
  </div>
  <div class="roomdetails">
    <h3>Kaveri</h3>
    <p>With far more space than an ordinary hotel room,
      our condominium- sized suites provide you with plenty of room to stretch out and relax.
      Rooms inspired by traditional Kerala architecture with generous use of wood,
      balconies with splendid views of the forest.</p>
    <h4>Features</h4>
    <ul>
    <li>Bathroom with shower within room</li>
    <li>Multi-Cuisine Restaurant</li>
    <li>Direct dial phone with voicemail & wake-up calls</li>
    <li>Continental breakfast</li>
    <li>Hot & Cold Water</li>
    </ul>
  </div>
</div>


<div id="room3" class="room">
<div class="roomimg"><img src="resources/chaliyar.jpg" width="234" height="152" alt=""/>
<form action="reservation.php?available=true&roomid=101" method="post">
  <input type="hidden" value="" name="chaliyar">
  <input type="submit" name="bookchaliyar" value="Book Now" class="bookbtn">
  </form>
  </div>
<div class="roomdetails">
  <h3>Chaliyar</h3>
  <p>Rooms inspired by traditional Kerala architecture with generous use of wood, balconies with splendid views of the forest.</p>
  <h4>Features</h4>
  <ul>
  <li>Multi-Cuisine Restaurant</li>
  <li>Flat Screen Television with Freeview Channels</li>
  <li>Continental breakfast</li>
  <li>Non-smoking rooms</li>
  <li>Hot & Cold Water</li>
  <li>Travel Assistance</li>
  </ul>
</div>
</div>


<div id="room4" class="room">
<div class="roomimg"><img src="resources/ganga.jpg" width="234" height="152" alt=""/>
<form action="reservation.php?available=true&roomid=105" method="post">
  <input type="hidden" value="" name="pamba">
  <input type="submit" name="bookpamba" value="Book Now" class="bookbtn">
  </form>
  </div>
<div class="roomdetails">
  <h3>Pamba</h3>
  <p>Looking for some extra room to stretch out and relax?
    Our Rooms are spacious, comfortable and convenient.
    Rooms inspired by traditional Kerala architecture with generous use of wood,
    balconies with splendid views of the forest.</p>
  <h4>Features</h4>
  <ul>
  <li>Coffee Shop</li>
  <li>Ayurveda Centre</li>
  <li>Continental breakfast</li>
  <li>Travel Assistance</li>
  <li>Health Club</li>
  <li>Hot & Cold Water</li>
  </ul>
</div>
</div>


<div id="room5" class="room">
<div class="roomimg"><img src="resources/pampa.jpg" width="234" height="152" alt=""/>
<form action="reservation.php?available=true&roomid=102" method="post">
  <input type="hidden" value="" name="ganga">
  <input type="submit" name="bookganga" value="Book Now" class="bookbtn">
  </form>
  </div>
<div class="roomdetails">
  <h3>Ganga</h3>
  <p>Looking for some extra room to stretch out and relax?
    Our Rooms are spacious, comfortable and convenient.
    Rooms inspired by traditional Kerala architecture
    with generous use of wood, balconies with splendid views of the forest.</p>
  <h4>Features</h4>
  <ul>
  <li>Coffee Shop</li>
  <li>Ayurveda Centre</li>
  <li>Continental breakfast</li>
  <li>Travel Assistance</li>
  <li>Health Club</li>
  <li>Hot & Cold Water</li>
  </ul>
</div>
</div>


<div id="room6" class="room">
<div class="roomimg"><img src="resources/kabani.jpg" width="234" height="152" alt=""/>
<form action="reservation.php?available=true&roomid=106" method="post">
  <input type="hidden" value="" name="yamuna">
  <input type="submit" name="bookyamuna" value="Book Now" class="bookbtn">
  </form>
  </div>
<div class="roomdetails">
  <h3>Yamuna</h3>
  <p>Looking for some extra room to stretch out and relax?
    Our Rooms are spacious, comfortable and convenient.
    Rooms inspired by traditional Kerala architecture with
    generous use of wood, balconies with splendid views of the forest.</p>
  <h4>Features</h4>
  <ul>
  <li>Coffee Shop</li>
  <li>Ayurveda Centre</li>
  <li>Continental breakfast</li>
  <li>Travel Assistance</li>
  <li>Health Club</li>
  <li>Hot & Cold Water</li>
  </ul>
</div>
</div>
</div>

</div>
    </main>

    <?php
	include("view/footer.php");
	?>
