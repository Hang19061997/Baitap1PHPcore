<h1>CHI TIẾT CÁN BỘ</h1>
<table class="table table-striped custab">
    <thead>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Giới tinh</th>
            <th>ngày sinh</th>
            <th>Địa chỉ</th>
        </tr>
        <tr>
        <td><?php if (isset($cb["id"])) echo $cb["id"]?></td>
            <td><?php if (isset($cb["hoten"])) echo $cb["hoten"]?></td>
            <td><?php if (isset($cb["gioitinh"])) echo $cb["gioitinh"]?></td>
            <td><?php if (isset($cb["ngaysinh"])) echo $cb["ngaysinh"]?></td>
            <td><?php if (isset($cb["diachi"])) echo $cb["diachi"]?></td>
        </tr>
    </thead>

</table>