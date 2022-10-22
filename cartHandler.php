<?php
    @include 'config.php';

    if($_POST["type"]){
        // echo "AddToCart";
        if($_POST["type"] == "addToCart"){
            $userId = $_POST["userId"];
            $productId = $_POST["productId"];
            $name = $_POST["name"];
            $price = $_POST["price"];
            $image = $_POST["image"];
            $quantity = $_POST["quantity"];
            $insert = "INSERT INTO cart(userId, productId, quantity, price , name,image) VALUES('$userId', '$productId','$quantity', '$price','$name', '$image')";
           try{
                $upload  = mysqli_query($conn, $insert);
                if($upload){
                    echo "Inserted";
                }else{
                    echo "Not inserted";
                }
           }catch(Exception $e){
                echo $e;
           }
        }else if($_POST["type"] == "updateCount"){
            $update_data = "UPDATE cart SET quantity=".$_POST["count"]." where userId=".$_POST["userId"]." and productId=".$_POST["productId"];
            $upload = mysqli_query($conn, $update_data);

            print_r($_POST);
        }else if($_POST["type"] == "removeItem"){
            print_r($_POST);
            $remote_data = "Delete from cart where userId=".$_POST["userId"]." and productId=".$_POST["productId"];
            mysqli_query($conn, $remote_data);
            echo "worked";
        }else if($_POST["type"] == "removeAll"){
            print_r($_POST);
            $remote_data = "Delete from cart where userId=".$_POST["userId"];
            mysqli_query($conn, $remote_data);
            echo "worked";
        }


    }

    
?>