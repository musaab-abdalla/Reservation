<script src="<?php echo base_url() . "contents/scripts/jquery.js"; ?>"></script>
<script>
    var txtnext;
    txtnext = <?php echo $json . ';'; ?>;
    
    for (var i = 0; i < txtnext.length; i++) {
        txtnext[i].no_of_room = "0";
    }
</script>


<script>
$(document).ready(function(){   
        //close popup.
        $(".backBtn").click(function(){
           $("#pop_up").hide();
            $(".middleLayer").fadeOut(300);
        });
          
    });
    $(document).ready(function() {
        makeActiveLink();
        $('.available-room').change(function() {            //action performs when no of  rooms is selected

            $("#disablebtnInfo").hide()                  //hides the information about disable button info.

            var rooms = $(this).val();
            var price = $(this).parent().prev('td').children('span.priceTag').text();
            var total = rooms * price;
            $(this).parent().next('td').children('span.subTotal').text(total);
            calculateSum();
            makeActiveLink();


            // for updating the json data.
            var room_id;
            room_id = $(this).parent().prev().prev().prev('td').parent().attr('id');
            var booked = $(this).val();
            for (var i = 0; i < txtnext.length; i++) {
                if (txtnext[i].id == room_id) {
             
                    txtnext[i].no_of_room = booked;
                    break;
                }
            }
        });



        //action perform when next button is clicked
        $(".choosedRoom").click(function(e) {
            if ($('#disablebtn').val() == 'yes')
            {
                e.preventDefault();
                $("#disablebtnInfo").html('<span class="error_sign">!</span>&nbsp;' + 'Please select the rooms');
                $("#disablebtnInfo").fadeIn(1000);
                return false;
            }
            else
            {

               // $('#one').css({'background-color': '#999999'});
              //  $('.first').css({'color': 'black'});
               // $('.first').css({'font-weight': 'normal'});
              //  $('#two').css({'background-color': '#0077b3'});
              //  $('.second').css({'color': '#0077b3'});
              //  $('.second').css({'font-weight': 'bold'});
              $(".fst").css({'display':'none'});
              $(".snd").css({'display':'block'});
                book();
            }
        });
    });
</script>


<!--loading currency_helper  -->
<?php
 header("Access-Control-Allow-Origin: *");
$this->load->helper('currency');
$this->load->helper('availableroom'); ?>

<table class="room-listing-tbl" style="width: 85%;">
    <tr id="checkinStyle">
    
        <td><b>Checkin Date:</b><input type="text" id="checkin" value="<?php echo $abc['checkin']; ?>" readonly style="border:none;"/></td>
        <td><b>Checkout Date:</b><input type="text" id="checkout" value="<?php echo $abc['checkout']; ?>" readonly style="border:none;"/></td>
        <td><b>No. of Adults:</b><input type="text" id="adult" value="<?php echo $abc['adult']; ?>" readonly style="border:none;"/></td>
        <td><b>No. of Children:</b><input type="text" id="child" value="<?php if ($abc['child'] == "Select") {
    echo "0";
} else {
    echo $abc['child'];
} ?>" readonly style="border:none;"/></td>
    </tr>
</table>
<input type="hidden" id="title" value="<?php echo $abc['title']; ?>" >
<input type="hidden" id="selectedHotelId" value="<?php echo $abc['hotelId']; ?>" >
<!-- ----------------->
<div id="room_book">
    <table width="100%" id="popuptbl">
        <tr style="color:#0077b3">
            <th width="25%">Room</th>
            <th width="30%">Facilities</th>
            <th width="15%">Price</th>
            <th width="20%">Select No. of Rooms</th>
            <th width="10%">Total Price</th>
            <?php
            if (isset($query)) {
                foreach ($query as $book) {
                    ?>
                <tr id="<?php echo $book->id; ?>"> <td>
                        <div style="float: left; margin-right: 10px;"><img src="<?php echo base_url() . 'uploads/thumb_' . $book->image; ?>" width="50px" height="50px"></div>
                        <div style="font-size: 16px;width: 60%; float: left;" id="room-name"><?php echo $book->room_name; ?></div><br>  


                    </td> 
                    <td><?php echo $book->description; ?></td>
                    <td>
        <?php get_currency($book->price); ?>
                    </td>
                    <td> 
        <?php check_available_room($abc['checkin'], $abc['checkout'], $book->room_name);  ?>

                    </td>

                    <td>    
                        <span>Rs.</span> <span class="subTotal">.00</span>
                    </td>

                </tr>

                <?php
            }
        }
        ?>
        <tr>
            <td colspan="3" style="text-align:right;"><td><b>Total</b></td>
            <td><span>Rs.</span>
                <span id="total_price">.00</span></td>
        </tr>
    </table>
    <div id="action"><span id="disablebtnInfo"></span>
        <input type="hidden" name="disablebtn" id="disablebtn" value="yes"/>
         <input type="submit" value="Back" id="popupBtn" class="backBtn">
        <input type="submit" value="Next" id="popupBtn" class="choosedRoom">
       
    </div>
</div>