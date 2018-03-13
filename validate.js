function validateForm() {
    
    var x = document.forms["myform"]["uname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    
    var x = document.forms["myform"]["password"].value;
    if (x == "") {
        alert("Password must be filled out");
        return false;
    }
    
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function proceed(){
    $('#changin_content').html("<div style=\"text-align:center;\"><h1>Room Booked</h1><br/>You have successfully booked a room</div>");
}