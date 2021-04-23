<?php
            include_once "mail/PHPMailer.php";
            include_once "mail/SMTP.php";
            include_once "mail/Exception.php";

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
class ProductModel
{
    public function getFeaturedProduct()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE featured = 1
            LIMIT 12
            "
        );
        $products = array();

        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getFeaturedProductDetail()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE featured = 1
            LIMIT 4
            "
        );
        $products = array();

        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getAllProducts()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            "
        );
        $products = array();

        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getProductByid($id)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE id = '$id'
            "
        );
        $product = mysqli_fetch_assoc($result);
        return $product;
    }

    public function orderProductByid($firstname, $lastname, $address, $phone, $email, $note)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }

        $sql = "INSERT INTO `order` (firstname,lastname,address,phone,email,note,created_at,updated_at)  VALUES('$firstname','$lastname','$address','$phone','$email','$note',now(),now())";


        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            $content = "<table border='1' style='width:600px;margin:0px auto'>";
            $content .= "<tr>
                                <td style='text-center'><strong>Thứ tự</strong></td>
                                <td style='text-center'><strong>Tên sản phẩm</strong></td>
                                <td style='text-center'><strong>Hình ảnh</strong></td>
                                <td style='text-center'><strong>Số lượng</strong></td>
                                <td style='text-center'><strong>Giá</strong></td>
                                <td style='text-center'><strong>Thành tiền</strong></td>
                        </tr>
                            ";
            $i = 0;
            foreach ($_SESSION['cart'] as $item) {
                $i++;
                $productId = $item['id'];
                $productName = $this->convertProductById($item['id']);
                $productImage = "templates/images/products/".$this->convertProductByIdToImage($item['id']);
                // print_r($productImage);die();
                $quantity = $item['quantity'];
                $price = $item['price'];
                $total = $item['quantity'] * $item['price'];
                $query = "INSERT INTO `order_detail` (order_id,product_id,quantity,price,created_at,updated_at) VALUES('$last_id','$productId','$quantity','$price',now(),now())";
                $content .= "<tr>
                                <td style='text-center'>$i</td>
                                <td style='text-center'>$productName</td>
                                <td style='text-center'>
                                <img src='https://salt.tikicdn.com/cache/w444/ts/product/e6/a5/3a/14338e7ae795f56d66996b611070b173.jpg' width='80px'></td>
                                <td style='text-center'>$quantity</td>
                                <td style='text-center'>$price</td>
                                <td style='text-center'>$total</td>
                            </tr>
                            ";
                if (mysqli_query($conn, $query)) {
                    echo "ok";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
            }

            $content .= '</table>';
            $content .= '<table cellspacing="0" cellpadding="0" border="0" style="width:600px;margin:20px auto">';
            $content .= " <thead>
            <tr>
                <th align='left' width='50%' style='padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold'>
                    Thông tin thanh toán</th>
                <th align='left' width='50%' style='padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold'>
                    Địa chỉ giao hàng</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td valign='top' style='padding:3px 9px 9px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal'>
                    <span style='text-transform:capitalize'>$firstname $lastname</span><br>
                    <a href='mailto:fox15902@gmail.com' target='_blank'>$email</a><br> $phone
                </td>

                <td valign='top' style='padding:3px 9px 9px 9px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal'>
                   $address
                </td>
            </tr>


        </tbody>";
            $content .= '</table>';
            $mail = new PHPMailer();
            try {
               
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Port = "587";
                $mail->Username = "pham.xuan.duc.23.09.2019@gmail.com";
                $mail->Password = "Pham_xuan_duc_22021998@gmail.com";
                $mail->Subject = "Đơn hàng từ Website Eshop";
                $mail->setFrom("pham.xuan.duc.23.09.2019@gmail.com");
                $mail->Body = $content;
                $mail->isHTML(true);
                $mail->addAddress("pham.xuan.duc.23.09.2019@gmail.com");
                $mail->CharSet = 'UTF-8';

                if ($mail->Send()) {
                    echo "Email sent..";
                } else {
                    echo "Failed";
                }
                $mail->smtpClose();

            } catch (\Throwable $e) {
               echo "ERROR";
            }
            session_start();
            $_SESSION['success'] = "Thêm thành công";
            unset($_SESSION['cart']);
            header("Location: ?action=success");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }

    public function search($key)
    {
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE name LIKE '%$key%'
            "
        );
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function getProductByCategoryId($id){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE id_productCategory = '$id'
            ");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

     public function countProduct(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT id 
            FROM product
            ");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function countOrder(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query("SELECT id FROM `order`");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function countPost(){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
         $result = $conn->query(
            "SELECT id 
            FROM post
            ");
        $products = array();
        if ($result->num_rows > 0) {
            while ($product = mysqli_fetch_assoc($result)) {
                $products[] = $product;
            };
        }
        return $products;
    }

    public function convertProductById($id){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE id = '$id'
            "
        );
        $product = mysqli_fetch_assoc($result);
        return $product['name'];
    }

    public function convertProductByIdToImage($id){
        $conn = mysqli_connect('localhost', 'root', '', 'qlbansach');
        mysqli_set_charset($conn, "utf8");
        if (mysqli_connect_errno()) {
            echo "Connect error" . mysqli_connect_error();
        }
        $result = $conn->query(
            "SELECT * 
            FROM product
            WHERE id = '$id'
            "
        );
        $product = mysqli_fetch_assoc($result);
        return $product['image'];
    }
}