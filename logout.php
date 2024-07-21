<?php

session_start();
session_destroy();
// echo '<p style ="font-size:50px;
//                 text-align:center;
//                 color: white;
//                 margin-top:300px;
//                 margin-left:350px;
//                 position: fixed;
//                 background-color:orange;
//                 ">Succesfully Log out...........</p>';
header("refresh:1 ; url=login.php");
exit();
