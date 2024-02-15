
        <div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/from-data">
                    <div class="row mb10">
                        Mã Hàng Hóa <br>
                        <input type="text" name="ma_hh" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Loại <br>
                        <input type="text" name="ten_hh" id="">
                    </div>
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="don_gia" id="">
                    </div>
                    <div class="row mb10">
                        Hình ảnh <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb10">
                        Ngày nhập <br>
                        <input type="date" name="ngay_nhap" id="">
                    </div>
                    <div class="row mb10">
                        Mô Tả <br>
                        <input type="text" name="mo_ta" id="">
                    </div>
                    <div class="row mb10">
                        Mã Loại <br>
                        <input type="text" name="ma_loai" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Thêm mới" id="">
                        <input type="reset" value="Reset" id="">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách" id=""></a>
                    </div>
                </form>
            </div>
        </div>