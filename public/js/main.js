function redirectToManageProductPage() {
    window.location.href = "/Admin/manage-product.html";
}

function redirectToOrdersPage() {
    window.location.href = "/Admin/orders.html";
}

function redirectToAddProductPage() {
    window.location.href = "/Admin/addproduct.html";
}

function redirectToUpdateProductPage() {
    window.location.href = "/Admin/update-product.html";
}

function redirectToCreateCouponPage() {
    window.location.href = "/Admin/create-coupon.html";
}

document.addEventListener("DOMContentLoaded", function () {
    const mainImageInput = document.getElementById("myFile");
    const previewArea = document.getElementById("imgpreview");
    const previewImage = previewArea ? previewArea.querySelector("img") : null;

    if (mainImageInput && previewArea && previewImage) {
        // Khi người dùng chọn tệp qua input
        mainImageInput.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewArea.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                previewArea.style.display = "none";
                previewImage.src = "";
                alert("Vui lòng chọn một tệp hình ảnh!");
            }
        });

        const uploadArea = document.getElementById("upload-file");
        if (uploadArea) {
            uploadArea.addEventListener("dragover", function (e) {
                e.preventDefault();
                uploadArea.classList.add("dragover");
            });
            uploadArea.addEventListener("dragleave", function () {
                uploadArea.classList.remove("dragover");
            });
            uploadArea.addEventListener("drop", function (e) {
                e.preventDefault();
                uploadArea.classList.remove("dragover");
                const file = e.dataTransfer.files[0];
                if (file && file.type.startsWith("image/")) {
                    mainImageInput.files = e.dataTransfer.files;
                    mainImageInput.dispatchEvent(new Event("change"));
                } else {
                    alert("Vui lòng thả một tệp hình ảnh!");
                }
            });
        }
    }
});
