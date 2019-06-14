<h1><?php echo "Nhập để tìm kiếm"; ?></h1>
<div align="center">
    <form action="#" method="post">
        Search: <input type="text" placeholder="Nhập tên để tìm kiếm" name="search" />
        <input class="mb-5" type="submit" value="search" />
    </form>
</div>
<table class="table table-striped custab">
    <?php
    if(isset($canbo))
    {
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Họ tên</th>'; 
        echo '<th>Giới tính</th>';  
        echo '<th>Địa chỉ</th>';  
        echo '<th class="text-center">Action</th>';  
        echo '</tr>'; 
        echo '</thead>';
    
    
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
    }
    ?>
</table>