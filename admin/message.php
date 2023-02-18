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
        $sql = "SELECT * FROM user_messages ";
        $result = mysqli_query($conn, $sql);
        ?>
        <main>
            <section>
                <div class="container">
                    <table class="responsive-table">
                        <caption>message's</caption>
                        <thead>
                            <tr>
                                <th scope="col">User ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">User phone</th>
                                <th scope="col">user subject</th>
                                <th scope="col">user message</th>
                                <th scope="col">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) :?> 
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['user_phone']; ?></td>
                    <td><?php echo $row['user_subject']; ?></td>
                    <td><?php echo $row['user_message']; ?></td>
                    <td>


                                                    <form action="deletemsg.php?page=message.php" method="post">
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
