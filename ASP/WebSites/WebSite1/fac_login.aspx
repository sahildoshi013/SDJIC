<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage with login.master" AutoEventWireup="false" CodeFile="fac_login.aspx.vb" Inherits="fac_login" %>

<asp:Content ID="Content1" ContentPlaceHolderID="Header" Runat="Server">
        <link rel="stylesheet" href="assets/css/style-login.css">
        <link rel="stylesheet" href="assets/css/fonts.css">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
        <div id="login">
  <form id="Form1">
    <h1>Sign In</h1>
    <input type="text" placeholder="Username">
    <input type="password" placeholder="Password">
    <button>Sign in</button>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="assets/js/index.js"></script> 
</asp:Content>

