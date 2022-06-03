function showHint(str) {
if (str.length == 0) {
    // delete texthint id
    document.getElementById("txtHint").innerHTML = "";
    console.log("kosong");
    return;
//Code 4a
}
console.log("Isi");
xhttp = new XMLHttpRequest();

// if ready state is 4 and status is 200
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
    }
};

//Code 4b
xhttp.open("GET", "php11D_gethint.php?keyword="+str, false);
xhttp.send();
}