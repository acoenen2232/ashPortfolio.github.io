
<?php

if (isset($_POST['submit'])){


    
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $mailTo= "acoenen2232@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have recceived an e-mail from ".$first.".\n\n".$message;
    
    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");

    if (empty($first) || empty($last) || empty($email) || empty($message)) {
        header("Location: index.php?note=empty");
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {
            header("Location: index.php?note=char");
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: index.php?note=email&first=$first&last=$last&message=$message");
                exit();
            } else {
              header("Location: index.php?note=success");
              exit();   
            }
        }
    }
} 
else{
    header("Location: index.php?note=error");
    exit();
}


?>