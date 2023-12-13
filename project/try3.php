<?php
 if ($prepareStmt) {
    mysqli_stmt_bind_param($stmt,"sss",$name,$idNumber,$email, $job,$specialty,$IDhospital);
    mysqli_stmt_execute($stmt);
    echo "<div class='alert alert-success'>You are registered successfully.</div>";
    //Closing the statement
    mysqli_stmt_close($stmt);

}else{
    die("Something went wrong");
}
?>