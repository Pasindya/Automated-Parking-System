function checkPassowrd() {
    var Name = document.getElementById("name").value;
    var password = document.getElementById("pssword").value;
    var Mobile = document.getElementById("mobile").value;

    
    if(Name.length==0){
        alert("Please enter your name!");

        return false;

    }
     if(Name.length<4){
        alert("Enter Your full name!");
        return false;

    }

    if(Mobile.length==0){
        alert("Please enter your mobile number");
        return false;
    }

    if(Mobile.length!==10){
        alert("Phone number should be 10 digits!");

        return false;
    }
  
   
    if (password.length > 0) {
        alert("Valid Password ! Registration successful");

    } else {
        alert("Password length is incomplete.Try Again");
    }
}
