<link rel="stylesheet" type="text/css" href="<?php echo base_url().'contents/styles/test.css';?> " />
<script src="<?php echo base_url().'contents/scripts/test.js' ?>"></script>


<script>
// $('#meroid').html(txtnext[1].no_of_room);

//$('#meroidnext').html(txtnext[2].no_of_room);
var predata='<table width="400px" style="background:#e6e9f2;padding-top: 20px;">'+
        '<tr style="background:#e6e9f2;font-weight: bold;border-bottom:solid thin #CCCCCC;" >'+
        '<td style="width:35%;">Rooms</td>'+
        '<td style="width:20%;">Booked</td>'+
        '<td style="width:20%;">Price</td>'+
        '<td style="width:25%;">Sub-Total</td></tr>';
var nextdata="";
    for(var i=0;i<txtnext.length;i++)
    {
        nextdata +='<tr style="border-bottom:solid thin #CCCCCC;"><td><span id="room_name">'+
                txtnext[i].room_name+'</span> </td><td><span id="booked_room">'+
                txtnext[i].no_of_room+'</span> </td><td><span id="room_price">'+
                txtnext[i].price+'</span></td><td><span id="sub_total"></span></td></tr>';
        
    
}

var postdata = '<tr style="border-bottom:solid thin #CCCCCC;"><td colspan="2">Total Price</td><td></td></tr></table>';
$('#table').html(predata + nextdata + postdata);

</script>

<script>
function roomBook()
{
      var dataString = 'hotelId=' + '1';
 $.ajax({
 type: "POST",
 url: "<?php echo base_url().'index.php/room_booking/personal_info' ;?>",
 data: dataString,
  success: function(msgs) 
        {
    
            $("#replaceMe").html(msgs);
            
        }
 });
 }
 </script>
 <div id="room_book">
<div style="float: left;">
    
 
    
    <div id="legend" style="background:#e6e9f2;padding-bottom: 40px;padding-left: 10px; width: 390px;padding-top:20px;">Booking Summary</div>
                
    <div id="table" style="background: e6e9f2;"></div>                  
                        
</div>
                            
                            
     <div  style="float:left;background: e6e9f2;">                       
<table style="background: e6e9f2;">
    <tr">
               
                <td  style="width:80px;"></td>
                <td style="width:400px;margin-right: -30px;background:#e6e9f2;">
                <fieldset>
            <legend>Personal Information</legend>
                <div class="input-prepend">
                <span class="add-on">Full Name</span>
                <input class="input input-large" type="text" placeholder="Full Name" required="required" name="FullName" >
                </div>
                
                <div class="clear"></div>
                <div class="input-prepend">
                <span class="add-on">Address</span>
                <input class="input input-large" type="text" placeholder="Full Address" required="required" name="Address" >
                </div>
                
                <div class="clear"></div>
                <div class="input-prepend">
                <span class="add-on">Occupation</span>
                <input class="input input-large" type="text" placeholder="Occupation" name="Occupation" >
                </div>
                
                <div class="clear"></div>
                <div class="input-prepend">
                <span class="add-on">Nationality</span>
                <input class="input input-large" type="text" placeholder="Nationality" required="required" name="Nationality" >
                </div>
                
                <div class="clear"></div>
                <div class="input-prepend">
                <span class="add-on">Contact No.</span>
                <input onkeypress='return isNumberKey(event)' class="input input-large" type="text" placeholder="Contact Number" required="required" name="ContactNumber" >
                </div>
                
                <div class="clear"></div>
                <div class="input-prepend">
                <span class="add-on">Email</span>
                <input class="input input-large" type="text" placeholder="Email Address" required="required" name="Email" >
                </div>
            </fieldset>
                    <textarea name="Remarks" placeholder="Remarks & Extra Instructions Like Pickup & Dropoff Information." style="width:330px;height:100px;resize:none;"></textarea>
                    
                </td>
            </tr>
        </table>
          <div style="text-align: right;">
<input type="submit" value="Next" id="popupBtn" onclick="javascript:roomBook();">
          </div>
    
        </div>
 </div>