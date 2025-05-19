document.addEventListener("DOMContentLoaded", function () {
    const priceFilterHeader = document.querySelector(".price-filter-header");
    const priceFilter = document.querySelector(".price-filter");

    priceFilterHeader.addEventListener("click", function () {
        priceFilter.classList.toggle("collapsed");
    });

    const priceSlider = document.getElementById("price-slider");
    const minPriceText = document.querySelector(".price-range__min");
    const maxPriceText = document.querySelector(".price-range__max");

    noUiSlider.create(priceSlider, {
        start: [100000, 800000],
        connect: true,
        step: 10000,
        range: {
            min: 0,
            max: 1000000,
        },
        format: {
            to: function (value) {
                return Math.round(value);
            },
            from: function (value) {
                return Number(value);
            },
        },
    });

    // Cập nhật giá hiển thị
    priceSlider.noUiSlider.on("update", function (values) {
        const formatPrice = (val) =>
            new Intl.NumberFormat("vi-VN").format(val) + "đ";
        minPriceText.textContent = formatPrice(values[0]);
        maxPriceText.textContent = formatPrice(values[1]);
    });

   
});
