<?php
if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $name = 'photos/file_' . time() . '_' . $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp, $name);
}

?>
<!--
<img src="<?php echo $name ?>" alt="<?php echo $name ?>" width="100%">
-->
<pre>
    <?php print_r($_POST) ?> 
    <?php print_r($_FILES) ?> 

</pre>