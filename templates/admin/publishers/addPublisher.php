<?php include('templates/admin/layouts/header.php'); ?>
<div class="content-page">
    <div class="content">

        <form>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_id">Tên NXB</label>
                <div class="col-md-4">
                    <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_categorie">Trạng Thái</label>
                <div class="col-md-4">
                    <select id="product_categorie" name="product_categorie" class="form-control">
                        <option value="1">Hoạt động</option>
                        <option value="0">Tạm ngưng</option>
                    </select>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('templates/admin/layouts/footer.php'); ?>