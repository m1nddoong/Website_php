<?php
    function print_title(){
        if(isset($_GET['id'])){  //$_GET['id']라는 값이 있다면(isset())
            echo htmlspecialchars($_GET['id']);
        }
        else{ 
            echo "Welcome";
        }
    }
?>
<?php
    function print_description(){
        if(isset($_GET['id'])){
            $basename = basename($_GET['id']);
            echo htmlspecialchars(file_get_contents("data/".$basename));
        }
        else{
            echo "Hello, php";
        }
    }
?>
<?php
    function print_list(){
        $list = scandir('./data'); 
        $i = 0;
        while($i < count($list)){  
            $title = htmlspecialchars($list[$i]);
            if($list[$i] != '.' && $list[$i] != '..'){ 
                echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";           
            }
            $i = $i + 1;
        }    
    }
?>