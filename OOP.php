<?php
// chia ra thành 2 mô phỏng mvc:

// 1. Đối tượng:
// đối tượng được chia làm 2 phần: 

// + Đặc điểm: là những thuộc tính của đối tượng.
// Ví dụ: 
// Đối tượng: Sinh viên
// Tên, Mã sinh viên, Ngày sinh, địa chỉ, email...

// + Hành động: là các phương thức của đối tượng (thực hiện được)
// Ví dụ:
// Ăn, Ngủ, Học, Chơi(90%), ....

//Bài tập: Lấy ví dụ 3 đối tượng (Liệt kê đặc điểm và hành động):
// Ví dụ 1: 
// Tên: bạn thân
// Mã sinh viên: TP25601
// Ngày sinh: 24/2/2005
// Email: ntp2422005@gmail.com
// Sở thích: Ăn, Ngủ 

// Ví dụ 2:
// Tên: bạn thân 2
// Mã sinh viên: TP25646
// Ngày sinh: 18/4/2005
// Email: nth1842005@gmail.com
// Sở thích: Ngủ, Chơi

// Ví dụ 3:
// Tên: bạn thân 3
// Mã sinh viên: TH24665
// Ngày sinh: 25/5/2005
// Email: ntk2552005@gmail.com
// Sở thích: Game, Ngủ

// 2. Lớp:
// Lớp (Class) là khuôn mẫu để tạo ra nhiều đối tượng có chung thuộc tính và phương thức
// Ví dụ: 
// class SinhVien
// {
    // khai báo đặc điểm (thuộc tính == Biến)
    // Công thức: phạm vi truy cập $tên thuộc tính = giá_trị;
    // phạm vi truy cập: public, protected, private (Học vào buổi sau);
    // public $ten;
    // public $maSV;
    // public $ngaySinh;

    // khai báo hành động (Phương thức == Hàm)
    // Công thức: phạm vi truy cập function tên_ham($tham_số){// code}
//     public function an(): void{
//         echo "Sinh viên đang ăn";
//     }
//     public function ngu(): void{
//         echo "Sinh viên đang ngủ";
//     }
// }

// 4. Tính chất của OOP: đóng gói, kế thừa, đa hình và trừu tượng 
// + Đóng gói là cho phép che giấu thông tin của đối tượng và chỉ cho phép truy cập thông qua các phương thức
// đã được định nghĩa trong các lớp đó mới có thể truy cập và sử dụng các thuộc tính và phương thức đó.
// Nó giúp che giấu thông tin và ngăn chặn truy cập trực tiếp từ bên ngoài. Điều này giúp giảm thiểu sự phụ thuộc
// giữa các đối tượng và tăng tính bảo mật.
// Thể hiện qua: public, protected, private
// Ví dụ:
// class SinhVien{
//     // Thuộc tính 90% private
//     private $ten = "Nguyen Van A"; // chỉ được truy cập trực tiếp trong class 
//     protected $maSV = "PH000125"; //chỉ được truy cập trong class và class kế thừa
//     public $ngaySinh = "01/01/2200"; // có thể truy cập từ bên ngoài

    // Phương thức get và set
    // Get: Lấy giá trị của thuộc tính
    // Set: Gán giá trị cho thuộc tính

//     public function getTen(){
//         return $this->ten;
//     }
    
//     public function setTen($ten){
//         $this->ten = $ten;
//     }
// }

// $sv1 = new SinhVien();
// echo $sv1->getTen();
// echo $sv1->ten;
// echo $sv1->ngaySinh; // 01/01/2200

// + Kế thừa là cho phép xây dựng các lớp mới dựa trên cơ sở của lớp đã tồn tại (Lớp cha). 
// Lớp mới (lớp con) sẽ được kế thừa 1 hoặc toàn bộ thuộc tính và phương thức của lớp cha.
// Ví dụ: 
// class Animal{
//     private $name;
//     protected $color;
//     public $size;

//     public function eat(){
//         echo $this->name. "is eating";
//     }
// }

// class Dog extends Animal{
//     const PI = 3.14;
//     public $leg;
//     public function eatDog(){
//         echo $this->eat(). $this->color;
//     }
// }

// Hằng trong OOP (Constant)
// Truy xuất hằng: Tên lớp::tên hằng
// echo Dog::PI;

// Đa hình: (Polymorphism): interface không phải là class.
// Vì thế chúng cũng không có thuộc tính và phương thức 
// Interface: là một khuôn mẫu chứa các phương thức mà các lớp khác phải triển khai
// Ví dụ:
interface DiChuyen{
    public function diChuyen();
}
class OTo implements DiChuyen{
    public function diChuyen(){
        echo "ô tô di chuyển";
    }
}

// Lưu ý: interface và abstract đều là bản thiết kế của dự án phần mềm 
// interface là bản thiết kế cho các class có chung hành động (Phương thức)
// nhưng không chung bản chất
// abstract là bản thiết kế cho các class có chung đặc điểm về bản chất
// interface có khả năng mở rộng lớn hơn 

// Trừu tượng
// Ví dụ
abstract class Animal{
    abstract public function eat();
    abstract public function diChuyen();
    
}
class Dog extends Animal{
    public function eat(){
        echo "Dog is eating";
    }
    public function diChuyen(){
        echo "Dog is running";
    }
}

class Cat extends Animal{
    public function eat(){
        echo "Cat is eating";
    }
    public function diChuyen(){
        echo "Cat is meowing";
    }
}

// Trait: 
// Trong PHP chỉ có đơn kế thừa 
// Trait giúp giải quyết vấn đề này
// Trait là một tập hợp các phương thức có thể được sử dụng trong class 
// Ví dụ:
trait TongHieu{
    public function tinhTong($a, $b){
        return $a + $b;
    }
    private function tinhHieu($a, $b){
        return $a - $b;
    }
}
trait TichThuong{
    protected function tinhTich($a, $b){
        return $a * $b;
    }
    public function tinhThuong($a, $b){
        return $a / $b;
    }
}
class TinhToan implements DiChuyen{
    use TongHieu, TichThuong;
    
    public function diChuyen(){
        echo "TinhToan is moving";
    }
    public function tinhTongHieuTichThuong($a, $b){
        return $this->tinhTong($a, $b) + $this->tinhHieu($a, $b) + $this->tinhTich($a, $b) + $this->tinhThuong($a, $b);
    }
}
$tt = new TinhToan();
?>