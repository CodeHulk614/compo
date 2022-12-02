<?php 
    include "connect.php";
    if(isset($_GET['id'])){
    
        $stmt = $db->prepare("SELECT arl FROM cte
   WHERE id = ?     
   ");
$stmt->execute([ $_GET['id'] ]);
$file = $stmt->fetch();

header('Content-type: application/pdf');
header('Content-disposition: attachment; filename="arl.pdf"');
echo $file['arl'];
// echo $file['ps'];
// echo $file['ssce'];
// echo $file['dp'];
// echo $file['mc'];
// echo $file['orl'];
// echo $file['arl'];
// echo $file['bh'];
// echo $file['trans'];
            
        
          
    }
?>