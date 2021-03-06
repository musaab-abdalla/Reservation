    <!dictype html>
    <html>
    <head>
    <title>Online reservation system</title>
    <script src="<?php echo base_url(); ?>contents/demo/jquery.js" ></script> 
    <script src="<?php echo base_url(); ?>contents/demo/sampleJs.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>contents/demo/sampleCss.css" /> 
    </head>
    <body>      
            <div id="reservation">
        <span class="error"><span class="error_sign">!</span> Invalid Date. Enter (yyyy/mm/dd) date format. </span>
        <form method="post" action="#" id="checkin_room">
            <div class="input-prepend input-append">
                <span class="add-on">Check In</span>
                <input name="CheckIn" type="text" required="required" style="width:185px; cursor:pointer;" id="CheckIn">
                <span onclick="movecursor()" class="add-on" style="width:auto; cursor:pointer; "><img src="<?php echo base_url(); ?>contents/images/ParkReserve.png" alt="" width="15" height="20" ></span>
            </div> 
            <div class="input-prepend input-append">
                <span class="add-on">Adults</span> 
                    <select name="adults" id="adults" style="border-radius:0px 5px 5px 0px;">
                        <option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option>                    </select>
            </div>
            <div class="clear"></div>
            <div class="input-prepend input-append">
                <span class="add-on">Check Out</span>
                <input name="CheckOut" type="text" style="width:185px; cursor:pointer;" id="CheckOut" value=""  required="required">
                <span onclick="movecursornext()" class="add-on" style="width:auto; cursor:pointer;"><img src="<?php echo base_url(); ?>contents/images/ParkReserve.png" alt="" width="15" height="20" ></span>
            </div>
            <div class="input-prepend input-append">
                <span class="add-on">Children</span>
                    <select name="children" required id="childs" style="border-radius:0px 5px 5px 0px;">
                        <option value="0" > Select</option>
                        <option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option>                    </select>
            </div>
            <input type="hidden" id="hotelId" value="sample hotel"/>
            <input type ="button" value="Check availability" class="checkinbtn" id="checkinbtn">           
        </form>
       </div>

        <div class="popup" id="pop_up"style="display: none">
         <div>
          <div id="popupTitleBox" style="width:100%;">
            <span class="back" style="float:left;width:40%;text-align: left;">  <!--<a href="" id="back"> < </a>--></span>
            <span class="popupTitleText" style="float:left;width:10%;color: white;margin-top: 5px;">Booking</span>
            <span style="float:right;width:40%;text-align: right; color: white;"><a href="#" id="closePopup" > X </a></span>
          </div> 
         </div><br/>
        <div id="changePopup">
    
        <div id="path" style="display: none;">
         <hr id="nav">
         <div id="mainNav">
        
        <div class="number" id="one">1</div><span id="nav_description" class="first">Select Plan</span>
        <div class="number" id="two" style="margin-left: 18%;">2</div><span id="nav_description" class="second" style="left: -70px;">Booking Summary</span>
        <div class="number" id="three" style="margin-left: 18%;">3</div><span id="nav_description" class="third">Billing & Payments</span>
        <div class="number" id="four" style="margin-left: 10%;">4</div><span id="nav_description" class="fourth">Thank You</span>
        </div>
        <br/>
       <hr style="display: block; height: 1px; border: 0; border-top: 1px solid #ccc; padding: 0; margin-top: 18px;">
       </div>
    <div id="loading"> <img width="30" src="<?php echo base_url(); ?>contents/images/page-loader.gif" alt="loading.."/><br><b>Loading...</b></div>
    <div id="replaceMe">   
    </div>
    </div>
   </div>
   <div class="middleLayer" style="display:none"></div>

                            
 </body>
</html>  
