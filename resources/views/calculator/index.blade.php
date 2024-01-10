<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <title> Glassmorphism Calculator| CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  width: 100%;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(#ffc0cb , #ff1493);
}

h2{
    align-items: center;
}
h3{
    align-items: center;
}
h2, h3 {
    position: absolute;
    top: 10px; /* Sesuaikan posisi vertikalnya */
    left: 50%;
    transform: translateX(-50%);
    color: white; /* Tambahkan warna teks sesuai kebutuhan */
    z-index: 2; /* Mengatur z-index agar lebih tinggi dari container */
}

.container{
  z-index: 1;
  position: relative;
  width: 360px;
  padding: 15px;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
  border-top: 1px solid rgba(255, 255, 255, 0.5);
  border-left: 1px solid rgba(255, 255, 255, 0.5);
}
.container input[type="text"]{
  width: 100%;
  height: 90px;
  margin: 0 3px;
  outline: none;
  border: none;
  color: #fff;
  font-size: 20px;
  text-align: right;
  padding-right: 10px;
  pointer-events: none;
  background: transparent;
}
.container input[type="button"]{
  height: 65px;
  color: #fff;
  width: calc(100% / 4 - 5px);
  background: transparent;
  border-radius: 12px;
  margin-top: 15px;
  outline: none;
  border: none;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.container input[type="button"]:hover{
  background: rgba(255, 255, 255, 0.1);
}
    </style>
   </head>

<body>
 <div class="container">
   <form action="#" name="forms">
     <input type="text" name="answer">
     <div class="buttons">
       <input type="button" value="AC" onclick="forms.answer.value = ''">
       <input type="button" value="DEL" onclick="forms.answer.value = forms.answer.value.substr(0 , forms.answer.value.length -1)">
       <input type="button" value="%" onclick="forms.answer.value += '%'">
       <input type="button" value="/" onclick="forms.answer.value += '/'">
     </div>
     <div class="buttons">
       <input type="button" value="7" onclick="forms.answer.value += '7'">
       <input type="button" value="8" onclick="forms.answer.value += '8'">
       <input type="button" value="9" onclick="forms.answer.value += '9'">
       <input type="button" value="*" onclick="forms.answer.value += '*'">
     </div>
     <div class="buttons">
       <input type="button" value="4" onclick="forms.answer.value += '4'">
       <input type="button" value="5" onclick="forms.answer.value += '5'">
       <input type="button" value="6" onclick="forms.answer.value += '6'">
       <input type="button" value="-" onclick="forms.answer.value += '-'">
     </div>
     <div class="buttons">
       <input type="button" value="1" onclick="forms.answer.value += '1'">
       <input type="button" value="2" onclick="forms.answer.value += '2'">
       <input type="button" value="3" onclick="forms.answer.value += '3'">
       <input type="button" value="+" onclick="forms.answer.value += '+'">
     </div>
     <div class="buttons">
       <input type="button" value="0"  onclick="forms.answer.value += '0'">
       <input type="button" value="00" onclick="forms.answer.value += '00'">
       <input type="button" value="." onclick="forms.answer.value += '.'">
       <input type="button" value="=" onclick="forms.answer.value = eval(forms.answer.value)">
     </div>
   </form>
 </div>

</body>

<script>
    const calculate = (btnValue) => {
      // ... (fungsi kalkulasi)
    };

    const buttons = document.querySelectorAll("input[type='button']");
    buttons.forEach((button) => {
      button.addEventListener("click", (e) => calculate(e.target.value));
    });

</script>

</html>


<!--silahkan dicoba pak-->
<!--dibedain**/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Menyusun radio button dalam bentuk kotak */
    .operator-group {
        display: flex;
        flex-direction: row;
        margin-top: 10px;
    }

    .operator-group label {
        display: inline-block;
        width: 40px; /* Sesuaikan lebar sesuai kebutuhan */
        height: 40px; /* Sesuaikan tinggi sesuai kebutuhan */
        text-align: center;
        line-height: 40px;
        border: 1px solid #ccc; /* Garis pinggir untuk menunjukkan kotak */
        cursor: pointer;
        margin-right: 10px;
    }

    .operator-group input[type="radio"] {
        display: none; /* Sembunyikan radio button asli */
    }

    .operator-group input[type="radio"]:checked + label {
        background-color: #2196F3; /* Warna latar saat dipilih */
        color: white; /* Warna teks saat dipilih */
    }

    /* Menyusun tombol angka */
    .number-buttons {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .number-buttons button {
        width: 40px;
        height: 40px;
        margin-right: px;
        margin-bottom: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>
<div>
    <div>
        <label for="number1"></label>
        <input type="number" id="number1" required>
    </div>

    <div>
        <label for="number2"></label>
        <input type="number" id="number2" required>
    </div>

    <p id="result"></p>

    <!-- Menampilkan radio button sebagai kotak -->
    <!--<div class="operator-group" style="text-align: center;">
        <input type="radio" name="operator" value="+" id="add">
        <label for="add">+</label>

        <input type="radio" name="operator" value="-" id="subtract">
        <label for="subtract">-</label>

        <input type="radio" name="operator" value="*" id="multiply">
        <label for="multiply">×</label>

        <input type="radio" name="operator" value="/" id="divide">
        <label for="divide">÷</label>

        <button onclick="calculate()">=</button>

    </div>

</div>

<!--<script>
    function appendNumber(number) {
        // Mendapatkan elemen input yang sedang aktif
        var activeInput = document.activeElement;

        // Memastikan elemen aktif adalah input
        if (activeInput.tagName === "INPUT" && activeInput.type === "number") {
            // Menambahkan angka ke dalam input yang sedang aktif
            activeInput.value += number;
        }
    }

    function calculate() {
        var number1 = parseFloat(document.getElementById('number1').value);
        var number2 = parseFloat(document.getElementById('number2').value);
        var result;

        if (document.getElementById('add').checked) {
            result = number1 + number2;
        } else if (document.getElementById('subtract').checked) {
            result = number1 - number2;
        } else if (document.getElementById('multiply').checked) {
            result = number1 * number2;
        } else if (document.getElementById('divide').checked) {
            result = number1 / number2;
        } else {
            result = "Invalid operator";
        }

        document.getElementById('result').innerHTML = "Hasil: " + result;
    }
</script>
</body>
</html>-->


