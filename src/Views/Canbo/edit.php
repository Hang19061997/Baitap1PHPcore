<h1>SỬA DANH SÁCH CÁN BỘ</h1>
<form method='post' action='#'>
	<div class="form-group">
		<label for="hoten">Họ tên</label>
		<input type="text" class="form-control" id="hoten" placeholder="nhập họ tên" name="hoten" value ="<?php if (isset($cb["hoten"])) echo $cb["hoten"];?>">
	</div>

	<div class="form-group">
		<label for="gioitinh">Giới tính</label>
		<input type="text" class="form-control" id="gioitinh" placeholder="nhập giới tính" name="gioitinh" value ="<?php if (isset($cb["gioitinh"])) echo $cb["gioitinh"];?>">
	</div>

	<div class="form-group">
		<label for="ngaysinh">Ngày sinh</label>
		<input type="text" class="form-control" id="ngaysinh" placeholder="nhập ngày sinh" name="ngaysinh" value ="<?php if (isset($cb["ngaysinh"])) echo $cb["ngaysinh"];?>">
	</div>


	<div class="form-group">
		<label for="diachi">Địa chỉ</label>
		<input type="text" class="form-control" id="diachi" placeholder="Nhập địa chỉ" name="diachi" value ="<?php if (isset($cb["diachi"])) echo $cb["diachi"];?>">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>