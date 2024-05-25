<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Dashboard</title>
</head>

<body>
    <?php require_once ('sidebar.html'); ?>
    <div class="content">
        <div class="title-info">
            <p>Dashboard</p>
            <i class="fas fa-chart-bar"></i>
        </div>

        <div class="data-info">
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>user</p>
                    <span>100</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-pen"></i>
                <div class="data">
                    <p>posts</p>
                    <span>765</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-table"></i>
                <div class="data">
                    <p>products</p>
                    <span>34</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-dollar"></i>
                <div class="data">
                    <p>revenue</p>
                    <span>$126</span>
                </div>
            </div>
        </div>

        <div class="title-info">
            <p>products</p>
            <i class="fas fa-table"></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>product</th>
                    <th>price</th>
                    <th>count</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>tv</td>
                    <td><span class="price">$123</span></td>
                    <td><span class="count">645</span></td>
                </tr>
                <tr>
                    <td>phone</td>
                    <td><span class="price">$123</span></td>
                    <td><span class="count">645</span></td>
                </tr>
                <tr>
                    <td>tv</td>
                    <td><span class="price">$123</span></td>
                    <td><span class="count">645</span></td>
                </tr>
                <tr>
                    <td>tv</td>
                    <td><span class="price">$123</span></td>
                    <td><span class="count">645</span></td>
                </tr>
                <tr>
                    <td>tv</td>
                    <td><span class="price">$123</span></td>
                    <td><span class="count">645</span></td>
                </tr>
                <tr>
                    <td>tv</td>
                    <td><span class="price">$123</span></td>
                    <td><span class="count">645</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<style>
        #home {
            background-color: var(--main-color-hover);
        }
    </style>
</html>