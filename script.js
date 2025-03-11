function cemail(){
    let email = document.getElementById("email").value;
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+[a-zA-Z]/;
    let message = document.getElementById("message");
    
    if (emailPattern.test(email)) {
        
    } else {
    
        alert("Invalid Email");
    }
    }