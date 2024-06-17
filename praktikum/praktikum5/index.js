/*alert("selamat datang")
console.log(10 * 10)
console.error("terjadi kesalahan saat mengambil data")

//deklarasi variabel
//var, let, const
let nama = "Yusma"
nama = "Cantika"
console.log(nama)

//aturan const tidak boleh diubah
const nama = "Yusma"
nama = "Cantika"
console.log(nama)

//tipe data primitif
//number, string, array, object, boolean, float
/*let i = "Yusma"*/

let mahasiswa = [
    "Yusma Cantika",
    "Enen Arienda",
    "Andari Yasinta",
    "Alviani Putri"
]

document.write("<ul>")
let i = 0;
while(i < mahasiswa.length){
    document.write("<li>"+mahasiswa[i]+"</li><br>")
    i++;
}
document.write("</ul>")

document.write("<ul>")
for(let i = 0; i < mahasiswa.length; i++){
    document.write("<li>"+mahasiswa[i]+"</li><br>")
}
document.write("</ul>")
