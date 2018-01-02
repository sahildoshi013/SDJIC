<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage with login.master" AutoEventWireup="false" CodeFile="student login.aspx.vb" Inherits="faculty_login" %>

<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table border=2>
    <tr>
    <th>User Name :</th>
    <td><asp:TextBox ID="TextBox1" runat="server"></asp:TextBox></td>
    </tr>
    <tr>
    <th>Password :</th>
    <td><asp:TextBox ID="TextBox2" runat="server"></asp:TextBox></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><asp:CheckBox ID="CheckBox1" runat="server" Text="Remember Me" /></td>
    </tr>
    <tr>
    <td colspan="2" align="left">
    <asp:Button ID="Button1" runat="server" Text="Log IN" />
    </td>
    </tr>
    </table>
</asp:Content>

