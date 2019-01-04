<script src="js/regLogin.js"></script>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    include 'login.php';
                
    $conn = OpenCon();
    echo "Connected Successfully";
    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
    $categoryId = mysqli_real_escape_string($conn, $_REQUEST['category_Id']);
    $category = mysqli_real_escape_string($conn, $_REQUEST['category']);

    
    // Attempt insert query execution
    $sql = "INSERT INTO User (username, email, password, userCategory, categoryId) VALUES ('$username', '$email', '$password', '$category', '$categoryId')";
    if(mysqli_query($conn, $sql)){
        echo '<script> register();</script>';
        //echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
?>