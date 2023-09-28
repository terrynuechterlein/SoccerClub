<?php

function check_login($con)
{
  if(isset($_SESSION['user_id']))
   {
      $id = $_SESSION['user_id'];
      $query = "select * from users where user_id = '$id' limit 1";

      $result = mysqli_query($con, $query);
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
      }
      else
      {
        // User does not exist in database, remove session and redirect
        
        header("Location: /SoccerClub/SignUp/signup.php");
        die;
      }
    }
    else {
      if (isset($_SESSION['restricted_access']) && $_SESSION['restricted_access']) {
        $_SESSION['message'] = "Please log in";
      }
      header("Location: ./SignUp/signup.php");
      die;
  }
}

function random_num($length)
{
  $text = "";
  if($length < 5)
  {
    $length = 5;
  }

  $len = rand(4, $length);

  for ($i=0; $i < $len; $i++) { 
    # code...
    $text .= rand(0,9);
  }

  return $text;
}
