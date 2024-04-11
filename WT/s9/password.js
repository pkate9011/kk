var attempt = 3; 
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "vishal" && password == "vishal@123"){
alert ("Login successfully");
window.location = "login.php"; 
return false;
}
else{
attempt --;
alert("Your Password or username  is incorrect You have left "+attempt+" attempt;");
   if( attempt == 0){
     document.getElementById("username").disabled = true;
     document.getElementById("password").disabled = true;
     document.getElementById("submit").disabled = true;
  return false;
}
}
}
