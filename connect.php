<?php
$Username = filter_input(INPUT_POST, 'Username');
$Password = filter_input(INPUT_POST, 'Password');
if ($Username==Admin && $Password==abcd){
    echo "Sucessful.html";

}
else{
    echo "Page Not Found";
}

?>
