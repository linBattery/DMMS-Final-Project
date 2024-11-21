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
    $listing_id = $_POST['listing_id'];
    $reviewer_id = $_POST['reviewer_id'];
    $reviewer_name = $_POST['reviewer_name'];
    $comments = $_POST['comments'];

    // 使用 mysqli_real_escape_string 處理特殊字符
    $listing_id = $conn->real_escape_string($listing_id);
    $reviewer_id = $conn->real_escape_string($reviewer_id);
    $reviewer_name = $conn->real_escape_string($reviewer_name);
    $comments = $conn->real_escape_string($comments);

    // 檢查 reviewer_id 是否已經存在
    $check_sql = "SELECT * FROM review_detail WHERE reviewer_id = '$reviewer_id'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // 如果 reviewer_id 已經存在，提示使用者重新輸入
        echo "資料已存在，請重新輸入！<br>";
    } else {
        // 產生隨機 id
        $id = rand(1, 999);  // 生成隨機數字作為 id

        // 插入資料
        $date = date('Y-m-d');  // 當前日期

        $insert_sql = "INSERT INTO review_detail (listing_id, id, date_, reviewer_id, reviewer_name, comments)
                       VALUES ('$listing_id', '$id', '$date', '$reviewer_id', '$reviewer_name', '$comments')";

        if ($conn->query($insert_sql) === TRUE) {
            echo "評論成功提交！<br>";
        } else {
            echo "錯誤: " . $conn->error . "<br>";
        }
    }
}

// 關閉資料庫連接
$conn->close();
?>
