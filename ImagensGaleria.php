<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
    include_once './TemplateMenu.php';
    include_once './Seguranca.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>
<body>

<h2 style="text-align:center">Lightbox</h2>

<div class="row">
  <div class="column">
    <img src="img/fotos/img1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
      <div class="column">
    <img src="img/fotos/img5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
    <div class="column">
    <img src="img/fotos/img6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img9.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
      <div class="column">
    <img src="img/fotos/img10.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
    <div class="column">
    <img src="img/fotos/img11.jpg" style="width:100%" onclick="openModal();currentSlide(111)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img12.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img13.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img14.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
  </div>
      <div class="column">
    <img src="img/fotos/img15.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
    <div class="column">
    <img src="img/fotos/img16.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img17.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/fotos/img18.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
  </div>
  
</div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

      <div class="mySlides">
          <div class="numbertext">1 / 18</div>
          <img src="img/fotos/img1.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">2 / 18</div>
          <img src="img/fotos/img2.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">3 / 18</div>
              <img src="img/fotos/img3.jpg" style="width:100%">
          </br> 
      </div>
      <div class="mySlides">
          <div class="numbertext">4 / 18</div>
          <img src="img/fotos/img4.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">5 / 18</div>
          <img src="img/fotos/img5.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">6 / 18</div>
          <img src="img/fotos/img6.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">7 / 18</div>
          <img src="img/fotos/img7.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">8 / 18</div>
          <img src="img/fotos/img8.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">9 / 18</div>
          <img src="img/fotos/img9.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">10 / 18</div>
          <img src="img/fotos/img10.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">11 / 18</div>
          <img src="img/fotos/img11.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">12 / 18</div>
          <img src="img/fotos/img12.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">13 / 18</div>
          <img src="img/fotos/img13.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">14 / 18</div>
          <img src="img/fotos/img14.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">15 / 18</div>
          <img src="img/fotos/img15.jpg" style="width:100%">
          </br>
      </div>
      <div class="mySlides">
          <div class="numbertext">16 / 18</div>
          <img src="img/fotos/img16.jpg" style="width:100%">
          </br>
      </div>
       <div class="mySlides">
          <div class="numbertext">17 / 18</div>
          <img src="img/fotos/img17.jpg" style="width:100%">
          </br>
      </div>
       <div class="mySlides">
          <div class="numbertext">18 / 18</div>
          <img src="img/fotos/img18.jpg" style="width:100%">
          </br>
      </div>
      

    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img/fotos/img1.jpg" style="width:100%" onclick="currentSlide(1)" alt="img1 and img2">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="img2, img3">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="img3 and img4">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="img4 and img5">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img5.jpg" style="width:100%" onclick="currentSlide(5)" alt="img5 and img6">
    </div>
    
    <div class="column">
      <img class="demo cursor" src="img/fotos/img6.jpg" style="width:100%" onclick="currentSlide(6)" alt="img6 and img7">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img7.jpg" style="width:100%" onclick="currentSlide(7)" alt="img7 and img8">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img8.jpg" style="width:100%" onclick="currentSlide(8)" alt="img8 and img9">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img9.jpg" style="width:100%" onclick="currentSlide(9)" alt="img9 and img10">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img10.jpg" style="width:100%" onclick="currentSlide(10)" alt="img10 and img11">
    </div>
    
    <div class="column">
      <img class="demo cursor" src="img/fotos/img11.jpg" style="width:100%" onclick="currentSlide(11)" alt="img11 and img12">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img12.jpg" style="width:100%" onclick="currentSlide(12)" alt="img12 and img13">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img13.jpg" style="width:100%" onclick="currentSlide(13)" alt="img13 and img14">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img14.jpg" style="width:100%" onclick="currentSlide(14)" alt="img14 and img15">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img15.jpg" style="width:100%" onclick="currentSlide(15)" alt="img15 and img16">
    </div>
     <div class="column">
      <img class="demo cursor" src="img/fotos/img16jpg" style="width:100%" onclick="currentSlide(16)" alt="img16 and img17">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img17.jpg" style="width:100%" onclick="currentSlide(17)" alt="img17 and img18">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/fotos/img18.jpg" style="width:100%" onclick="currentSlide(18)" alt="img17 and img18">
    </div>
    
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
