<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    </div>
    <div class="container mt-4">
            <div class="row">
                <!-- Danh sách sản phẩm -->
                <div class="col-md-9">
                    <!-- Hiển thị sản phẩm bằng dạng dòng sản phẩm sử dụng Bootstrap Row và Col -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php endwhile; ?>
                    </div>
                </div>
    
                <!-- Sidebar -->
                
            </div>
        </div>
</body>


