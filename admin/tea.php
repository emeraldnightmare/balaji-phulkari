<?php include 'header.php';
?>
<body>
    <!-- partial:index.partial.html -->
    <input type="checkbox" name="" id="menu-toggle">
    <div class="overlay"><label for="menu-toggle">
        </label></div>
    <?php include 'sidebar.php'; ?>
    <div class="main-content">
        <?php include 'head.php'; ?>
        <?php
        include('../database/connection.php');
        $sql = "SELECT * FROM products where category = 'tea' ";
        $result = mysqli_query($conn, $sql);
        ?>
        <main>
            <section>
                <div class="container">
                    <table class="responsive-table">
                        <caption>Tea ITEMS</caption>
                        <thead>
                            <tr>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product details</th>
                                <th scope="col">Product Rates</th>
                                <th scope="col">category</th>
                                <th scope="col">Image uploaded</th>
                                <th scope="col">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) :?> 
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['detail']; ?></td>
                    <td><?php echo $row['rate']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo "<img src='{$row['image_path']}'/>"; ?> </td>
                    <td>
                               <a " href="updateproduct.php?id=<?php echo $row['id']; ?>" class="btn-danger ">update item</a>


                                                    <form action="delete.php?page=tea.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                   <input type="submit" value="Delete" class="btn-danger  " onclick="return confirm('Are you sure you want to delete this record?');">
                                                </form> 
                                                <style>

                                    .btn-danger {
                                    background-color: #9f6d39;
                                color: white;
                                    width: 150px;
                                    padding: 10px;

                                    margin-top:20px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                            </style>
                    </td>
                  </tr>

                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    <!-- partial -->

    <?php include 'footer.php'; ?>