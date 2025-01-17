<!-- Quy tắc đặt tên -->
<!-- Biến, Hàm: dùng kiểu camleCase - Bắt đầu bằng chữ thường và
   viết hoa chữ cái đầu của các từ tiếp theo -->
<!-- Ví dụ: -->
<?php
// $myName;
// function getMyName(){
//     //....
// }
?>

<!-- Lớp: class: Dùng kiểu PascalCase - Viết hoa chữ cái đầu tiên -->
<?php
class Bien {}

// Hằng số: Dùng kiểu SNAKE_CASE -
// Viết hoa toàn bộ và phân cách các từ bằng dấu gạch dưới
const PI = 3.14;
?>


<!-- Mảng và hàm -->
<!-- Mảng là một biến có thể chứa nhiều giá trị -->
<!-- Mảng mấy loại: 
        - Mảng chỉ số: Mảng có key là số (0 -> n - 1)
        - Mảng kết hợp: Mảng có key là chuỗi
        - Mảng đa chiều: Mảng trong mảng 
      -->

<!-- Bài tập: Lấy ví dụ các loại mảng (Khai báo, truy xuất giá trị) -->
<?php
$Mang_chi_so = [1, 2, 3];
$Mang_ket_hop = ['ABK', 'CDE', 'FDR'];
$Mang_da_chieu = [
  ['A', 'B', 'C'],
  ['D', 'E', 'F'],
  ['G', 'H', 'I']
];
?>

<!-- Hàm: là 1 đoạn chương trình hoặc 1 chức năng được đóng gói để tái sử dụng nhiều lần  -->
<!-- Hàm có trả về -->
<!-- có tham số -->
<!-- không có tham số -->
<!-- Hàm không có trả về -->
<!-- có tham số -->
<!-- không có tham số -->

<!-- Lưu ý: Hàm có bao nhiêu tham số thì phải chuyền vào bấy nhiêu giá trị -->

<!-- MVC -->
<!-- Model: Dữ liệu -->
<!-- View: Hiển thị dữ liệu -->
<!-- Controller: Xử lý logic -->