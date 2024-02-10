<div class="row">
            <div class="row formtitle">
                <h1>Bảng Loại Hàng Hóa</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <!-- tr Cột -->
                        <tr>
                            <!-- th-td Hàng -->
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $updatedm = "index.php?act=suadm&id=".$ma_loai; // Sử dụng ma_loai thay vì id
                                $deletedm = "index.php?act=xoadm&id=".$ma_loai; // Sử dụng ma_loai thay vì id
                                echo '
                                <!-- tr Cột -->
                                <tr>
                                    <!-- th-td Hàng -->
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$ma_loai.'</td>
                                    <td>'.$ten_loai.'</td>
                                    <td>
                                        <a href="'.$updatedm.'"><input type="button" name="" value="sửa" id=""></a>                            
                                        <a href="'.$deletedm.'"><input type="button" value="xóa" name="" id=""></a>
                                    </td>
                                </tr>
                                ';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả" id="">
                    <input type="button" value="Bỏ chọn tất cả" id="">
                    <input type="button" value="Xóa mục đã chọn" id="">
                    <a href="index.php?act=adddm"><input type="button" value="Thêm mới" id=""></a>
                </div>
            </div>
        </div>