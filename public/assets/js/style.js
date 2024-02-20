// Hàm định dạng số
function formatNumberForVietnameseCurrency(number) {
    return number.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}

// Lấy danh sách các phần tử có class 'currency' và cập nhật nội dung của chúng khi trang được tải
document.addEventListener('DOMContentLoaded', function () {
    var currencyCells = document.getElementsByClassName('currency');

    // Kiểm tra xem có ít nhất một ô có class 'currency' hay không
    if (currencyCells.length > 0) {
        for (var i = 0; i < currencyCells.length; i++) {
            var originalNumber = parseFloat(currencyCells[i].textContent.trim().replace(/\./g, '').replace(',', '.'));

            // Kiểm tra nếu giá trị trong ô là một số hợp lệ
            if (!isNaN(originalNumber)) {
                var formattedNumber = formatNumberForVietnameseCurrency(originalNumber);
                currencyCells[i].textContent = formattedNumber;
            } else {
                console.error('Invalid number in cell with class "currency" at index ' + i);
            }
        }
    } else {
        console.error('No element with class "currency" found.');
    }
});
