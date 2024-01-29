<?php 

    $con = mysqli_connect('localhost','developer','Temple@20001');

    if($con){
        echo "Connection Successfull";
    }
    else{
        echo "Not Connected";
    }

    mysqli_select_db($con,'jaiShreeRam');
    if(($_POST['first-name']) == ""){
        header("location:index.php");
        return;
    }

    $FirstName = $_POST['first-name'];
    $LastName = $_POST['last-name'];
    $Mobile = $_POST['number'];
    $Email = $_POST['email'];
    $City = $_POST['city'];
    $School = $_POST['school'];
    $Class = $_POST['curr-class'];
    $Program = $_POST['program'];
    $Course = $_POST['course'];

    


    $query = " insert into StudentInfo (FirstName, LastName, Mobile, Email, City, School, Class, Program, Course) values 
                                    ('$FirstName','$LastName','$Mobile','$Email','$City','$School','$Class','$Program','$Course')";
    
    echo $query;
    mysqli_query($con,$query);
    header("location:index.php");
        
?>



