<?php
    include("class/classxuly.php");
    $obj=new xuly();
    include("page/themnv/xuly.php");
?>
<section>
        <div class="container mt-5">
            <h2 class="text-center">Thêm Nhân Viên</h2>
    
            <!-- Form thêm nhân viên -->
            <div class="card mb-4">
                <div class="card-body">
                    <form id="employeeForm" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="employeeName">Tên Nhân Viên</label>
                            <input type="text" class="form-control" name="tennv" placeholder="Nhập tên nhân viên" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ</label>
                            <input type="text" class="form-control"  name="diachi" placeholder="Nhập địa chỉ" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Password</label>
                            <input type="text" class="form-control"name="password" placeholder="Nhập password" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số Điện Thoại</label>
                            <input type="tel" class="form-control" name="sdt" placeholder="Nhập số điện thoại" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="position">Chức Vụ</label>
                            <select class="form-control" name="position" required>
                                <option value="">Chọn chức vụ</option>
                                <?php echo $obj->selectchucvu(); ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Nhập email" required>
                        </div>
                        <button type="submit" name="btnThem" class="btn btn-primary">Thêm</button>
                        <a href="index.php?page=quanly" class="btn btn-secondary">Quay Lại</a>
                    </form>
                </div>
            </div>
        </div>
    </section>