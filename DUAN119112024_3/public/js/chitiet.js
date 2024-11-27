

document.addEventListener('DOMContentLoaded', function () {
    const decrementButtons = document.querySelectorAll('.decrement');
    const incrementButtons = document.querySelectorAll('.increment');
    const quantityInputs = document.querySelectorAll('.quantity-input');

    decrementButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            let input = quantityInputs[index];
            let value = parseInt(input.value, 10);
            if (!isNaN(value) && value > 1) {
                input.value = value - 1;
            }
        });
    });

    incrementButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            let input = quantityInputs[index];
            let value = parseInt(input.value, 10);
            if (!isNaN(value)) {
                input.value = value + 1;
            }
        });
    });

    quantityInputs.forEach((input) => {
        input.addEventListener('input', () => {
            let value = parseInt(input.value, 10);
            if (isNaN(value) || value <= 0) {
                input.value = 1;
            }
        });
    });
});


// Lắng nghe sự kiện click trên các kích thước
document.querySelectorAll('.size-option').forEach(function(sizeOption) {
    sizeOption.addEventListener('click', function() {
        // Loại bỏ lớp 'selected' từ tất cả các phần tử
        document.querySelectorAll('.size-option').forEach(function(option) {
            option.classList.remove('selected');
        });

        // Thêm lớp 'selected' vào phần tử mà người dùng vừa chọn
        this.classList.add('selected');
    });
});
