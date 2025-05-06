let currentIndex = 0;
const imageHeight = 100; // px
const maxIndex = 3; // Nếu có 7 ảnh mà chỉ hiển thị 4 => maxIndex = 3

function scrollDown() {
  if (currentIndex < maxIndex) {
    currentIndex++;
    document.querySelector('.slider-inner').style.transform =
      `translateY(-${currentIndex * imageHeight}px)`;
  }
}

function scrollUp() {
  if (currentIndex > 0) {
    currentIndex--;
    document.querySelector('.slider-inner').style.transform =
      `translateY(-${currentIndex * imageHeight}px)`;
  }
}



var coll = document.getElementsByClassName("product-description-item");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}