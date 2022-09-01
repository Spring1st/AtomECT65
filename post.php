<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 align="center">Webboard Spring</h1>
    <hr>
    <div align="center">
        ต้องการดูกระทู้หมายเลข<?php echo $_GET['id'];?><br><br>
        <table style="border: 2px solid black; width:15%" align="center">
            <tr><td colspan="1" style="background-color: #6CD2FE;" align="center">แสดงความคิดเห็น</td></tr>
            <tr><td><form><textarea name="message" style="width: 98%;"></textarea></form></td></tr>
            <tr><td colspan="1" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
    </div>
</body>
</html>