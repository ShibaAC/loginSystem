<?php session_start();?>
<?php
    require('db.php');//require db.php檔案來連線資料庫

    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
    $token = bin2hex(random_bytes(32));
    
    //$sql = "select userName from users where email = ?"; //  呼叫stored procedure
    $sql = "call login(? , ?)";
    $stmt = $mysqli->prepare($sql);//叫stmt準備執行$sql
    $stmt->bind_param("ss" , $email , $token);//綁定參數（上面的問號）， i = int , d = float , s = string , b = blob and will be sent in packets
    $stmt->execute();//執行stmt
    
    $result = $stmt->get_result();//取出剛剛執行的結果
    $row = $result->fetch_assoc();//將讀出資料的key指定為欄位名稱
    $nextPage = $row['result'];//把row裡面欄位名稱為result的存到$nextPage裡面
    //$token = $row['token'];//把row裡面欄位名稱為token的存到$token裡面
    // var_dump($row);
if($nextPage == 'main.php') {
    //$_SESSION['email'] = $email; //存在SESSION裡面
    //$_SESSION['password'] = $pwd;
    
    setcookie('token', $token , time() +30); ///設定一個叫token的cookie，值是$token，過期時間為120秒過後
    setcookie('main' , $nextPage , time() +30);
}
header("location: {$nextPage}");
?>