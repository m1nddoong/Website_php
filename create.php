<?php
require('lib/print.php'); //php야 lib밑에 print.php 파는 파일의 코드를 필요로해
?>
<?php
require('view/top.php');
?>
        <a href="create.php">create</a>
        <form action="create_process.php" method="post"> 
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="Description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
        </form>
        
<?php
require('view/bottom.php');
?>