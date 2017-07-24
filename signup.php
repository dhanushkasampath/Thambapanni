<?php require_once('db.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  
  if (PHP_VERSION < 6) {
    $theValue = get_mtheValueagic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  // $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($connections,$theValue) : mysqli_escape_string($connections,$theValue);
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

// *** Redirect if username exists
$MM_flag="MM_insert";
if (isset($_POST[$MM_flag])) {
  $MM_dupKeyRedirect="exist.php";
  $loginEmail = $_POST['userEmail'];
  $LoginRS__query = sprintf("SELECT user_email FROM users WHERE user_email=%s", GetSQLValueString($loginEmail, "text"));
  mysqli_select_db($connections,$database_connections);
  $LoginRS=mysqli_query($connections,$LoginRS__query) or die(mysqli_error($connections));
  $loginFoundUser = mysqli_num_rows($LoginRS);

  //if there is a row in the database, the username was found - can not add the requested username
  if($loginFoundUser){
    $MM_qsChar = "?";
    //append the username to the redirect page
    if (substr_count($MM_dupKeyRedirect,"?") >=1) $MM_qsChar = "&";
    $MM_dupKeyRedirect = $MM_dupKeyRedirect . $MM_qsChar ."requsername=".$loginEmail;
    header ("Location: $MM_dupKeyRedirect");
    exit;
  }
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "RegisterForm")) {
  $insertSQL = sprintf("INSERT INTO users (user_fname, user_lname, user_email, user_pass) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['userFname'], "text"),
                       GetSQLValueString($_POST['userLname'], "text"),
                       GetSQLValueString($_POST['userEmail'], "text"),
                       GetSQLValueString($_POST['userpassWord'], "text"));

  mysqli_select_db($connections,$database_connections);
  $Result1 = mysqli_query($connections,$insertSQL) or die(mysql_error());

   $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
   header(sprintf("Location: %s", $insertGoTo));
}

mysqli_select_db($connections,$database_connections);
$query_Register = "SELECT * FROM users";
$Register = mysqli_query($connections,$query_Register) or die(mysqli_error($connections));
$row_Register = mysqli_fetch_assoc($Register);
$totalRows_Register = mysqli_num_rows($Register);
?>