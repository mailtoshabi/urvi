
<?php
 $target = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
 $link = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';





//   symlink($target, $link);
// //and read the symlink
// echo readlink($link);
//  echo $target;


// if (symlink($target, $link)) {
//     echo "Symbolic link created successfully!";
// } else {
//     echo "Failed to create symbolic link.";
// }

?>


<?php
echo function_exists('symlink') ? 'Symlink is enabled' : 'Symlink is disabled';
?>
