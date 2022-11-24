<?php

require_once('app/snippets/base.php');

?>

<?php if($AUTH_USER['role'] == 'admin'): ?>
    
<?php else: 
    require('./404.php')
?>

<?php endif ?>
