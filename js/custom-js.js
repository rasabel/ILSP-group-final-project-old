/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//this js for automatic scrolling the page
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("#navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  });
  
  
  // this for category navegation with close option
  function ilps_open_nav(x) {
  if (document.getElementById("nav_" + x).style.display == "block") {
    ilps_close_nav(x);
  } else {
     ilps_close_nav("category");
    
    document.getElementById("nav_" + x).style.display = "block";
    if (document.getElementById("navbtn_" + x)) {
      document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
      document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
    } 
    if (x == "search") {
      if (document.getElementById("gsc-i-id1")) {document.getElementById("gsc-i-id1").focus(); }
    }
  }
}
function ilps_close_nav(x) {
  document.getElementById("nav_" + x).style.display = "none";
  if (document.getElementById("navbtn_" + x)) {
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "inline";
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "none";
  }
}

// This for form validation 

//function formValidation(){
    //var org_name =document.getElentById("org_name").value;
    //var org_name =document.myform.org_name.value;
    //var  org_email=document.getElentById("email").value;
      //var  org_phone=document.getElentById("org_phone").value;
        //var  org_location=document.getElentById("org_location").value;
        
       
        
    


