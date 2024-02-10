        <div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="ma_loai" placeholder="mã loại tự tăng =))" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="ten_loai" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới" id="">
                        <input type="reset" value="Reset" id="">
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
