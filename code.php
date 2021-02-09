<?php
include ("dbConfig.php");

// if(isset($_POST['butsignup'])){
    $Username = $_POST['Username'];
    echo $Username;
    $Password = $_POST['Password'];
    $Confirmpassword = $_POST['Confirmpassword'];
    $Email = $_POST['Email'];

    $data = [
        'Uername'=> $Username,
        'Email' => $Email,
        'Password' => $Password,
        'Confirmpassword' => $Confirmpassword
        
    ];
    
    // $ref = "contact/";
    // $postdata = $db->collection($ref)->document($ref)->create($data);
    
    // if($postdata){
    //     echo '<script>alert("data inserted")</script>';
    // }
    $docRef = $db->collection('users')->document('details');
    $docRef->set($data);
    // printf('Added data to the lovelace document in the users collection.' . PHP_EOL);
      echo 1;
// }
// else{
//     echo 0;
// }



?>