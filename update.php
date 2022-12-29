<?php
require('lib/print.php'); //php야 lib밑에 print.php 파는 파일의 코드를 필요로해
require('view/top.php');
?>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])) { ?>
            <a href="update.php?id=<?=$_GET['id']?>">update</a>
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

        <form action="update_process.php" method="post"> 
            <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
            <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
        </p>
        <p>
            <textarea name="description" placeholder="Description"><?php
            print_description(); ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
        </form>
        
<?php
require('view/bottom.php');
?>