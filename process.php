<?php 
try{
    $db = new mysqli("localhost","root", "","client_massage");

} catch (Exception $exc){
    echo $exc->getTraceASstring();
}

    if(isset($_POST['btn-send']))

       
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
    

       $is_insert = $db->query("INSERT INTO `data`( `UName`, `Email`, `Subject`, `msg`) VALUES ('$UserName','$Email','$Subject','$Msg')");

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
                header('location:contact.php?error');
        
        elseif ($is_insert == TRUE)
                header('location:contact.php?success');

                else
                    header("location:contact.php");

       
    
        
     
?>