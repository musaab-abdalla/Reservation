//Global variable 

var base_url = "http://localhost/reservation/";

function calculateSum() {   //function to calculate the total price of the booked room.
    var ab = 0;
    var sum = 0;
// iterate through each td based on class and add the values
    $(".subTotal").each(function() {
    var value = $(this).text();
    // add only if the value is number
    if (!isNaN(value) && value.length != 0) {
        sum += parseFloat(value);
    }
    });
    $("#total_price").text(sum);

}

function makeActiveLink()    //function to make the link deactive when no rooms number is selected.
{
    if (($("#total_price").text() == '.00') || ($("#total_price").text() == '0'))
    {
        $('#disablebtn').val('yes');
        //$('#popupBtn').attr('disabled', 'disabled');
    }
    else
    {
        $('#disablebtn').val('no');
        //$('#popupBtn').removeAttr('disabled');            
    }

}

function book()         //function to be calle for personal info view.
{
    var dataString = 'hotelId=' + '1';

    $.ajax({
        type: "POST",
        url: base_url + 'index.php/room_booking/book_now',
        data: dataString,
        success: function(msgs)
        {

            $("#room_book").html(msgs);

        }
    });
}


function roomBook()      // function to call for payment info view.
{
    var dataString = 'hotelId=' + '1';
    $.ajax({
        type: "POST",
        url: base_url + 'index.php/room_booking/personal_info',
        data: dataString,
        success: function(msgs)
        {

            $("#replaceMe").html(msgs);

        }
    });
    $('#one').css({'background-color': '#999999'});
}





function changeFunc() {
    var checkin = $("#CheckIn").val();
    var checkout = $("#CheckOut").val();
    var adult = $("#adult").val();
    var child = $("#child").val();

    $.ajax({
        type: "POST",
        url: base_url + "index.php/room_booking/post_action",
        data: {
            'checkin': checkin,
            'checkout': checkout,
            'adult': adult,
            'child': child,
            'hotelId': "1"
        },
        success: function(msg)
        {

            $("#replaceMe").html(msg);

        }
    });
}


function closeloading() {
$("#loading").fadeOut('fast');
}


$(document).ready(function(){
         $("#checkin").click(function(){
$(".middleLayer").show();
        $(".popup").show();
        
       // loading(); // loading

        setTimeout(function(){ // then show popup, deley in .5 second
        closeloading();
                path();
                $('#one').css({'background-color': '#0077b3'});
                $('.first').css({'color': '#0077b3'});
                $('.first').css({'font-weight': 'bold'});
                changeFunc(); // function show popup
        }, 1000);
        
        });
    
var replaced = $("#changePopup").html();
        var room_id;
        $("#closePopup").click(function(){
$("#changePopup").html(replaced);
});
        room_id = $(this).parent().prev().prev().prev('td').parent().attr('id');
        var booked = $(this).val();
        for (var i = 0; i < txtnext.length; i++) {
if (txtnext[i].id == room_id) {
txtnext[i].no_of_room = booked;
        break;
}
}

        
      

$(".personalInfo").click(function() {

        $('#one').css({'background-color': '#999999'});
        $('.first').css({'color': 'black'});
        $('.first').css({'font-weight': 'normal'});
        $('#two').css({'background-color': '#999999'});
        $('.second').css({'color': 'black'});
        $('.second').css({'font-weight': 'normal'});
        $('#three').css({'background-color': '#0077b3'});
        $('.third').css({'color': '#0077b3'});
        $('.third').css({'font-weight': 'bold'});
        roomBook();
        personal_info();
});
});


$(document).keydown(function(e){
if (e.keyCode == 27)
{
$(".popup").hide();
        $(".middleLayer").fadeOut(300);
}
});



function path() {
$("#path").show();
}