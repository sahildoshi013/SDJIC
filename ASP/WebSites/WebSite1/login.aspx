<%@ Page Language="VB" AutoEventWireup="false" CodeFile="login.aspx.vb" Inherits="login" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8">
    <title>Paper login form</title>
        <link rel="stylesheet" href="assets/css/style-login.css">
        <link rel="stylesheet" href="assets/css/fonts.css">
    </head>
  <body runat="server">
  <div class="block-view">
    <div id="login">
  <form runat="server">
    <h1>Sign In</h1>
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <button>Sign in</button>
  </form>
</div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="assets/js/index.js"></script>    
  </body>
</html>

