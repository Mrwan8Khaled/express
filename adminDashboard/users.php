<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Dashboard - Users</title>
</head>

<body>
    <?php require_once ('sidebar.html'); ?>

    <?php
    require_once '../backend/db.php';

    $conn = connect_db();

    // Query to fetch the size of the 'users' table
    $size_sql = "SELECT 
        table_name AS 'Table',
        table_rows AS 'Number of Rows',
        ROUND((data_length + index_length) / 1024 / 1024, 2) AS 'Size (MB)'
    FROM     
            information_schema.TABLES
    WHERE 
        table_schema = DATABASE() AND
        table_name = 'users'";
    $size_result = $conn->query($size_sql);

    // Fetch the size result
    $size_row = $size_result->fetch_assoc();

    // Query to count all records in the 'users' table
    $count_sql = "SELECT COUNT(*) AS 'Total Records' FROM users";
    $count_result = $conn->query($count_sql);

    // Fetch the count result
    $count_row = $count_result->fetch_assoc();

    $conn->close();
    ?>

    <div class="content">
        <div class="title-info">
            <p>Dashboard - Users</p>
            <i class="fas fa-chart-bar"></i>
        </div>



        <div class="data-info">
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>user</p>
                    <span><?php echo $count_row['Total Records']; ?></span>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-pen"></i>
                <div class="data">
                    <p>posts</p>
                    <span><?php echo "Size: " . $size_row['Size (MB)'] . " MB"; ?></span>
                </div>
            </div>

        </div>

        <div class="title-info">
            <p>Users</p>
            <i class="fas fa-table"></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // example.php
                
                require_once '../backend/db.php';

                $conn = connect_db();


                // Example query to fetch data
                $sql = "SELECT * FROM Users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td><div class='img'><img class='userimg' src='functions/img.php?id=".$row["id"]."' alt='Photo'></div></td>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["created_at"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <style>
        #users {
            background-color: var(--main-color-hover);
        }
    </style>
</body>