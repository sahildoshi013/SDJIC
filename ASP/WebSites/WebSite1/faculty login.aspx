<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage with login.master" AutoEventWireup="false" CodeFile="faculty login.aspx.vb" Inherits="faculty_login" %>
<asp:Content ID="heading" ContentPlaceHolderID="Header" Runat="Server">
<meta charset="UTF-8">
    <title>Paper login form</title>
        <link rel="stylesheet" href="assets/css/style-login.css">
        <link rel="stylesheet" href="assets/css/fonts.css">
        </asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
        <div id="login">
  <form action="faculty login.aspx">
    <h1>Sign In</h1> 
    <input type="text" placeholder="Username"></input>
    <input type="password" placeholder="Password"></input>
    <button>Sign in</button>
  </form>
</div>
    <script type="text/jscript" src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script type="text/jscript" src="assets/js/index.js"></script>    
</asp:Content>

