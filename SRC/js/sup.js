function validate(){
    var mobile = document.getElementById("mobile").value;


    if(mobile.length==0){
        alert("Please enter your mobile number");
        return false;
    }

    if(mobile.length!==10){
        alert("Phone number should be 10 digits!");

        return false;
    }

}