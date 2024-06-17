function checkpay(){
    var Mobile = document.getElementById("mobile").value;

    if(Mobile.length==0){
        alert("Please enter your mobile number");
        return false;
    }

    if(Mobile.length!==10){
        alert("Phone number should be 10 digits!");

        return false;
    }



}


