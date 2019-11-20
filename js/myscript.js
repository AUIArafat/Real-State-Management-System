var months    = ['January','February','March','April','May','June','July','August','September','October','November','December'];
var now       = new Date();
var thisMonth = months[now.getMonth()]; // getMonth method returns the month of the date (0-January :: 11-December)

var getflight = function(e){
	   // $.ajax({
        // url: "flights.php",
        // type: "post",
        // data: values ,
        // success: function (response) {
           // // you will get response from your php page (what you echo or print)                 

        // },
        // error: function(jqXHR, textStatus, errorThrown) {
           // console.log(textStatus, errorThrown);
        // }


    // });
	window.location.href = "flights.php";
}

jQuery(document).ready(function($) {
"use strict";

	var output = document.getElementById('output');
console.log(thisMonth);

 if(output.textContent !== undefined) {
    output.textContent = thisMonth;
  }
  else {
    output.innerText = thisMonth;
  }
});