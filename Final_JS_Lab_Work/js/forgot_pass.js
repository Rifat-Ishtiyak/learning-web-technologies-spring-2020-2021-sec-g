function validate(){
    let newP=document.getElementById('newP').value;

    newPcheck();

    function newPcheck(){
        if (newP=="") {
            document.getElementById('msg1').innerHTML="**field cannot be empty";
        }
        if (newP.length<6) {
            document.getElementById('msg1').innerHTML="**password must contain at least 6 charecters";
        }
    }
}