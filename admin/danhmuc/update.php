<?php
    if(is_array($dmuc)){
        extract($dmuc);
    }

?>
        <div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="ma_loai" placeholder="mã loại tự tăng =))" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="ten_loai" value="<?= ($ten_loai != "") ? $ten_loai : "" ?>" id="">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="ma_loai" value="<?php if(isset($ma_loai)&&($ma_loai>0)) echo $ma_loai; ?>" id="">
                        <input type="submit" name="capnhat" value="Cập nhật" id="">
                        <input type="reset" value="Nhập lại" id="">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách" id=""></a>
                    </div>
                    <?php 
                        if(isset($messeger)&&($messeger!="")){
                            echo($messeger);
                        }
                    ?>
                </form>
            </div>
        </div>

