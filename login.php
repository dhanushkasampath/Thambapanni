<?php require_once('db.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  // $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
mysqli_select_db($connections,$database_connections);
$query_login = "SELECT * FROM users";
$login = mysqli_query($connections,$query_login) or die(mysqli_error());
$row_login = mysqli_fetch_assoc($login);
$totalRows_login = mysqli_num_rows($login);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
// if (isset($_GET['accesscheck'])) {
//   $_SESSION['PrevUrl'] = $_GET['accesscheck'];
// }

if (isset($_POST['userEmail'])) {
  $loginEmail=$_POST['userEmail'];
  $password=$_POST['userpassWord'];
  $MM_redirectLoginSuccess = "home.php";
  $MM_redirectLoginFailed = "wrong.php";
  $MM_redirecttoReferrer = true;
  mysqli_select_db($connections,$database_connections);
    
  $LoginRS__query=sprintf("SELECT user_email, user_pass FROM users WHERE user_email=%s AND user_pass=%s",
  GetSQLValueString($loginEmail, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysqli_query($connections,$LoginRS__query) or die(mysqli_error());
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Email'] = $loginEmail;     

    // if (isset($_SESSION['PrevUrl']) && true) {
    //   $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];   
    // }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<?php
mysqli_free_result($Register);
?>