console.log('Hello World');
let nama = 'rizki adalah orang meduro rizki';

console.log("Menggunakan exec   : " + /rizki/g.exec(nama));
console.log("Menggunakan test   : " + /rizki/i.test(nama));
console.log("Menggunakan match  : " + nama.match(/rizki/g));
console.log("Menggunakan search : " + nama.search(/rizki/i));
console.log("Menggunakan replace: " + nama.replace(/rizki/i, 'kiki'));
console.log("Menggunakan split: " + nama.split(" "));

var tanggal = new Date();
console.log("Copyright " + tanggal.getFullYear());


// new object
var obj = new Object();
obj.nama = "rizki";
obj.umur = "20";
obj.alamat = "jakarta";
obj.hobi = "membaca";
obj.status = "single";
obj.tampilkan = function () {
    console.log(this.nama + " " + this.umur + " " + this.alamat + " " + this.hobi + " " + this.status);
}
obj.tampilkan();

var arr = new Array("nomor1", 3, function name() {
    return "hello";
});
console.log(arr);
arr.push("nomor2");
console.log(arr);
arr.shift();
console.log(arr);
arr[10] = "nomor3";
console.log(arr);

arr.forEach(element => {
    console.log(element);
});
