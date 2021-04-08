<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/add-products.css">
</head>

<body>
    <?php
    if (isset($_POST['btnSubmit'])) {
        $productName = $_POST['product_name'];
        $detail = $_POST['detail'];
        $categorie = $_POST['product_categorie'];
        $quatily = $_POST['quatily'];
    }
    ?>
    <form class="form-horizontal" method="POST">
        <fieldset>

            <!-- Form Name -->
            <legend>Thêm sản phẩm</legend>

            <!-- Text input-->
            <div class="conten">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name">Tên sản phẩm</label>
                    <div class="col-md-4">
                        <input id="product_name" name="product_name" class="form-control input-md" required=""
                            type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_name_fr"> Miêu tả sản phẩm</label>
                    <div class="col-md-4">
                        <input id="product_name_fr" name="detail" class="form-control input-md" required="" type="text">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_categorie"> Loại sản phẩm</label>
                    <div class="col-md-4">
                        <select id="product_categorie" name="product_categorie" class="form-control">


                        </select>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="available_quantity"> Số lượng</label>
                    <div class="col-md-4">
                        <input id="available_quantity" name="quantity" class="form-control input-md" required=""
                            type="text">

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="available_quantity"> Giá tiền</label>
                    <div class="col-md-4">
                        <input id="available_quantity" name="price" class="form-control input-md" required=""
                            type="text">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="available_quantity"> Trạng thái</label>
                    <div class="col-md-4">
                        <input id="available_quantity" name="status" class="form-control input-md" required=""
                            type="text">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="available_quantity"> Nhà xuất bản</label>
                    <div class="col-md-4">
                        <input id="available_quantity" name="publisher" class="form-control input-md" required=""
                            type="text">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="product_description">Miêu tả chi tiết sản phẩm</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="description" name="product_description"></textarea>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="online_date">Ngày thêm</label>
                    <div class="col-md-4">
                        <input id="online_date" name="online_date" class="form-control input-md" required=""
                            type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="author"> Tác giả</label>
                    <div class="col-md-4">
                        <input id="author" name="author" class="form-control input-md" required="" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">

                    <div class="col-md-4">

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Hình sản phẩm</label>
                            <div class="col-md-4">
                                <input id="filebutton" name="filebutton" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">

                            <div class="col-md-4">
                                <button id="singlebutton" name="btnSubmit" class="btn btn-primary"
                                    style="margin-left: 286%;">Thêm sản phẩm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
    </form>

</body>

</html>