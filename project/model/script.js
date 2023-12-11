
function validateForm() {
    let currentpassword = document.getElementById("currentpassword").value;
    let newpassword = document.getElementById("newpassword").value;
    let repassword = document.getElementById("repassword").value;

    if (currentpassword == "" || newpassword == "" || repassword == "") {
        alert("All fields must be filled out");
        return false;
    }

    if (newpassword !== repassword) {
        alert("New password and Retype password do not match");
        return false;
    }

    ajax()
    return true;
}




function ajax(){
  let currentpassword = document.getElementById("currentpassword").value;
  let xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controller/changepasscheak.php', true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send('currentpassword='+currentpassword)
  xhttp.onreadystatechange = function(){

      if(this.readyState == 4 && this.status == 200){
          alert(this.responseText);
          //document.getElementById('head').innerHTML = this.responseText;
      }
  }
}


