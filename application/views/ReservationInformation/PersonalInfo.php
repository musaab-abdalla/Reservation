<link rel="stylesheet" type="text/css" href="<?php echo base_url().'contents/styles/test.css';?> " />
<script src="<?php echo base_url().'contents/scripts/test.js' ?>"></script>
<script>



</script>



            <div style="float: left; margin-top: 20px;">
    
 
    
    <div id="legend" style="margin-bottom:30px;">Booking Information</div>
                    <table width="420px">
                        <tr style="background: #edebeb;font-weight: bold;">
                            <td style="width:40%;">Rooms</td>
                            <td style="width:20%;">Booked</td>
                            <td style="width:20%;">Price</td>
                            <td style="width:20%;">Sub-Total</td>
                        </tr>
                        
                         
                            <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                             </tr>
                      
 
                             
                        <tr>
                            <td colspan="2">Total Price</td>
                            <td></td>
                        </tr>
                    </table>
</div>
                            
                            
                            
<table style="float:left;">
        	<tr>
               
                <td  style="width:20px;"></td>
                <td style="width:400px;">
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

 <div>
    
        <input type="submit" value="Continue" onclick="javascript:book();"></div>