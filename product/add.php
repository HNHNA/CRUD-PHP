<?php
    $sql_brand = "SELECT * FROM products ";
    $query_brand = mysqli_query($connect, $sql_brand);
?>
<?php
    if(isset($_POST["smb"])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $decsription = $_POST['decsription'];
        $price = $_POST['price'];

        $sql="INSERT INTON products(id,name,image,decsription,price)
        VALUES('$id','$name','$image','$decsription',$price )";
        $query=mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp,"img/".$image);
        header('location: index.php');
    }
 ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" name="id"class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name"class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description"class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" name="price"class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-success" type="sumbit">Thêm</button>
            </form>
        </div>
    </div>
</div>