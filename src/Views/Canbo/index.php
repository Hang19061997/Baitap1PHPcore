<h1>CÁN BỘ </h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
            <a href="/Baitap/canbo/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Thêm mới</a>
            <a href="/Baitap/canbo/search/" class="btn btn-primary btn-xs pull-left" ><b>+</b> Tìm kiếm</a>

            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <?php
        foreach ($canbo as $cb)
        {
            echo '<tr>';
            echo "<td>" . $cb['id'] . "</td>";
            echo "<td>" . $cb['hoten'] . "</td>";
            echo "<td>" . $cb['gioitinh'] . "</td>";
            echo "<td>" . $cb['diachi'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/Baitap/canbo/edit/" . $cb["id"] . "' ><span class='glyphicon glyphicon-edit'></span> sửa</a> <a class='btn btn-info btn-xs' href='/Baitap/canbo/get/" . $cb["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Chi tiết</a><a href='/Baitap/canbo/delete/" . $cb["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Xóa</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>