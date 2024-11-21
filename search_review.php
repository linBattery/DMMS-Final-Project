<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 資料庫連接設定
$servername = "localhost"; // MySQL 伺服器
$username = "root"; // 請替換為您的 MySQL 使用者名稱
$password = "Aa34145777"; // 請替換為您的 MySQL 密碼
$dbname = "project1"; // 請替換為您的 MySQL 資料庫名稱

// 創建資料庫連接
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查資料庫連接
if ($conn->connect_error) {
    die("資料庫連接失敗: " . $conn->connect_error);
}

// 確保表單已經提交
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 接收表單資料
    $reviewer_id = $_POST['reviewer_id'];

    // 查詢該使用者的評論資料
    $search_sql = "SELECT * FROM review_detail WHERE reviewer_id = '$reviewer_id'";
    $result = $conn->query($search_sql);

    if ($result->num_rows > 0) {
        // 顯示搜尋結果
        echo "<h3>您的評論資料：</h3>";
        echo "<table border='1'><tr><th>Listing ID</th><th>Reviewer Name</th><th>Comments</th><th>Date</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["listing_id"] . "</td><td>" . $row["reviewer_name"] . "</td><td>" . $row["comments"] . "</td><td>" . $row["date_"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "沒有找到您的評論資料。<br>";
    }
}

// 關閉資料庫連接
$conn->close();
?>
