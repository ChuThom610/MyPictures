# PicApp - Ứng dụng quản lý và chia sẻ ảnh
Giới thiệu 
==========
* **Tên sản phẩm:** PicApp

* **Công nghệ sử dụng:**  Ruby on Rails 5 (Mô hình MVC), Bootstrap 4, Mysql2...


Cài đặt môi trường
==================
Hướng dẫn cài đặt dưới đây thực hiện trên môi trường hệ điều hành Ubuntu/Linux. Bạn có thể giả lập môi trường hoặc cài đặt trên chính hệ điều hành bạn đang sử dụng:

* https://docs.google.com/document/d/1Sb1ki6J1_nPq-B7yj3LcZN-hpo6fy4YBAiFA9Ss7ZVs/edit?usp=sharing

Tìm hiểu thêm tại các trang web uy tín: 

* https://www.codehub.vn/

* https://viblo.asia/ ...

Chạy ứng dụng trên localhost
============================

**1. Cấu hình file *database.yml***

* Trong file *config/database.yml*, đặt lại user và pass đăng nhập (Nếu đã không có mật khẩu thì để trống dòng password):

<img src="https://i.imgur.com/kJ62CpQ.png">

**2. Cài đặt các Gem:**

Chạy lệnh: bundle install

**3. Tạo database**

* rake db:create
* rake db:migrate

**4. Chạy ứng dụng**

* rails s

Mở trình duyệt, truy cập địa chỉ localhost:3000
