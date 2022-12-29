<?php
require_once('lib/print.php');
require('view/top.php');
?>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])) { ?>
            <a href="update.php?id=<?=$_GET['id']?>">update</a>
            <form action="delete_process.php" method="post">
               <input type="hidden" name="id" value="<?=$_GET['id']?>">
               <input type="submit" value="delete"> 
            </form>
        <?php } ?>
        <h1> <!--분문에 대한 제목-->
            <?php 
                print_title();
            ?>
        </h1>
        <!-- 본문 내용 --> 
        <?php 
            print_description();
        ?>        
<?php
require('view/bottom.php');
?>