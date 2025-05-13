// Scroll image slider up and down
let currentIndex = 0;
const imageHeight = 100; // px
const maxIndex = 3; // Nếu có 7 ảnh mà chỉ hiển thị 4 => maxIndex = 3

function scrollDown() {
  if (currentIndex < maxIndex) {
    currentIndex++;
    document.querySelector(".slider-inner").style.transform = `translateY(-${
      currentIndex * imageHeight
    }px)`;
  }
}

function scrollUp() {
  if (currentIndex > 0) {
    currentIndex--;
    document.querySelector(".slider-inner").style.transform = `translateY(-${
      currentIndex * imageHeight
    }px)`;
  }
}

// All DOM event listeners
document.addEventListener("DOMContentLoaded", () => {
  // Display product description item content when click on product description item
  const coll = document.getElementsByClassName("product-description-item");
  for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
      const content = this.nextElementSibling;
      const isCurrentlyOpen = content.style.display === "block";

      // Đóng tất cả các content khác
      for (let j = 0; j < coll.length; j++) {
        coll[j].classList.remove("active");
        const otherContent = coll[j].nextElementSibling;
        if (otherContent && otherContent.style.display === "block") {
          otherContent.style.display = "none";
        }
      }

      // Nếu content hiện tại đang mở, đóng nó; nếu không, mở nó
      if (isCurrentlyOpen) {
        this.classList.remove("active");
        content.style.display = "none";
      } else {
        this.classList.add("active");
        content.style.display = "block";
      }
    });
  }

  // Display product size item is selected when click on product size item
  const sizeItems = document.querySelectorAll(".product-size-item");
  sizeItems.forEach((item) => {
    item.addEventListener("click", () => {
      sizeItems.forEach((size) => {
        size.style.border = "none";
      });
      item.style.border = "1px solid black";
    });
  });

  // Display product color item is selected when click on product color item
  const colorItems = document.querySelectorAll(".product-color-item");
  colorItems.forEach((item) => {
    item.addEventListener("click", () => {
      colorItems.forEach((color) => {
        color.style.border = "none";
      });
      item.style.border = "1px solid black";
    });
  });

  // Change product image when clicking on image in slider-item
  const sliderImages = document.querySelectorAll(".slider-item img");
  const mainImage = document.querySelector(".product-images img");
  console.log("Slider images found:", sliderImages.length);
  console.log("Main image:", mainImage);

  sliderImages.forEach((img) => {
    img.addEventListener("click", () => {
      console.log("Clicked image src:", img.src);
      if (img.src && mainImage) {
        mainImage.src = img.src + "?t=" + new Date().getTime(); // Thêm tham số để tránh cache
      }
    });
  });
  // Hide the product watched item if it has no src
  const watchedItems = document.querySelectorAll(".product-watched-item");
  watchedItems.forEach((item) => {
    const img = item.querySelector("img");
    if (img && img.getAttribute("src") === "") {
      item.style.display = "none";
    }
  });
});

function redirectToPaymentPage() {
  window.location.href = "/Website/payment.html";
}
