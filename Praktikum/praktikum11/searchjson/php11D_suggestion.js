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
        let get = JSON.parse(this.responseText);
        // if there is no data
        if (get.length == 0) {
            document.getElementById("txtHint").innerHTML = "no suggestion";
            return;
        }

        let tampil = "";
        for (let i = 0; i < get.length; i++) {
            tampil += get[i].name;
            if(i != get.length - 1){
                tampil += ", ";
            }
            
        }

        console.log(tampil);
        document.getElementById("txtHint").innerHTML = tampil;
    }
};

//Code 4b
xhttp.open("GET", "php11D_gethint.php?keyword="+str, false);
xhttp.send();
}