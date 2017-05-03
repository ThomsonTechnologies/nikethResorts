
var activeMenu = null;
var clipHgt = 0;
var timeID;

function addEvent(object, evName, fnName, cap) {
   if (object.attachEvent)
       object.attachEvent("on" + evName, fnName);
   else if (object.addEventListener)
       object.addEventListener(evName, fnName, cap);
}

addEvent(window, "load", initPage, false);

function initPage() {
//Call slideshow function to start slideshow
     startSlideShow();

//Show manus
var menus = new Array();
   var allElems = document.getElementsByTagName("*");

   for (var i = 0; i < allElems.length; i++) {
      if (allElems[i].className == "menu") menus.push(allElems[i]);
   }

   for (var i = 0; i < menus.length; i++) {
      menus[i].onclick = changeMenu;
      menus[i].onmouseover = moveMenu;
   }

//Date picker for reservation
     $( function() {
           $( "#datepicker" ).datepicker({
             dateFormat: 'yy-mm-dd',
             minDate: new Date
           });
           $( "#datepicker2" ).datepicker({
             dateFormat: 'yy-mm-dd',
             minDate: new Date
           });
     } );

//Available room selection
     $('tr', 'table.roomstable tbody').click(function(){
          // alert($(this).text());
            var customerId = $(this).find(".roomIdCell").html();
            // alert(customerId);

            $('#selectedroom').val(customerId);
     });


//Main blocks image animations
     $(".column_img").mouseenter(function() {
      var imgid = $(this).attr('id');
            $('#' + imgid).animate({'margin-top': '15px'}, 400);
      }).mouseout(function() {
            $('.column_img').animate({'margin-top': '30px'}, 500);
      });

//Package informations expand collapse
    $(".pkglistheader").click(function () {

        $header = $(this);
        //getting the next element
        $content = $header.next();
        //$content.show();
        //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
        $content.slideToggle(500, function () {
            //execute this after slideToggle is done
            //change text of header based on visibility of content div
            $header.text(function () {
                //change text based on condition
                //return $content.is(":visible") ? "Collapse" : "Expand";
            });
        });

    });

}

//Function to start the slide show
function startSlideShow(){
  $('#slideshow').show();
  $("#slideshow > div:gt(0)").hide();

	setInterval(function() {
	  $('#slideshow > div:first')
		.fadeOut(2000)
		.next()
		.fadeIn(2000)
		.end()
		.appendTo('#slideshow');
	},  8000);
}

//function to move from one title to another
function moveMenu() {
     if (activeMenu) {
      closeOldMenu();

      menuID = this.id + "List";
      activeMenu = document.getElementById(menuID);
      activeMenu.style.clip = "rect(0px, 150px, 0px, 0px)";
      activeMenu.style.display = "block";
      timeID = setInterval("rollDown()", 1);
   }//end if
}//moveMenu()

//function to change the pull down menu
function changeMenu() {
   closeOldMenu();

   menuID = this.id + "List";
   activeMenu = document.getElementById(menuID);
   activeMenu.style.clip = "rect(0px, 200px, 0px, 0px)";
   activeMenu.style.display = "block";
   timeID = setInterval("rollDown()", 1);
}//changeMenu()

//function to close old menu
function closeOldMenu() {
   if (activeMenu) {
      clearInterval(timeID);
      activeMenu.style.display = "none";
      activeMenu = null;
   }//end if
}//closeOldMenu()

//function to give the roldown effect
function rollDown() {
   clipHgt = clipHgt + 10;
   if (clipHgt < 400) {
      activeMenu.style.clip = "rect(0px, 200px," + clipHgt + "px, 0px)";
   } else {
      clearInterval(timeID);
      clipHgt = 0;
   }//end if
}//rollDown()
