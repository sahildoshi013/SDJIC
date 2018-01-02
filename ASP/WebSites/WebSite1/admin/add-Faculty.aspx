<%@ Page Title="" Language="VB" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="false" CodeFile="add-Faculty.aspx.vb" Inherits="Default2" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
<style type="text/css">
td 
{
    text-align: right;
}
</style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div class="head-line">
    <asp:Label ID="Label8" runat="server" Text="Add Faculty Data" ForeColor="White" 
            Font-Bold="True" Font-Italic="False" Font-Names="Copperplate Gothic Bold" 
            Font-Size="XX-Large" Font-Underline="True"></asp:Label>
    </div>
    <div>
         <table cellpadding="5">
        <tr>
        <td><asp:Label ID="Label1" runat="server" Text="Name:"></asp:Label></td>
        <td><asp:TextBox ID="txtUserName" runat="server" TabIndex="1" Width="198px"></asp:TextBox></td>
        </tr>
        <tr>
        <td><asp:Label ID="Label2" runat="server" Text="Address : "></asp:Label></td>
        <td><asp:TextBox ID="TextBox1" runat="server" TextMode="MultiLine" Rows="3" 
                Columns="50" Height="50px" Width="198px"></asp:TextBox></td>
        </tr>
        <tr>
        <td><asp:Label ID="Label3" runat="server" Text="Date of Birth : "></asp:Label></td>
        <td><asp:TextBox ID="TextBox2" runat="server" Width="198px"></asp:TextBox></td>
        </tr>
        <tr>
        <td><asp:Label ID="Label4" runat="server" Text="Mail ID : "></asp:Label></td>
        <td><asp:TextBox ID="TextBox3" runat="server" Width="198px"></asp:TextBox></td>
        </tr>
        <tr>
        <td><asp:Label ID="Label5" runat="server" Text="Mobile NO : "></asp:Label></td>
        <td><asp:TextBox ID="TextBox4" runat="server" Width="198px"></asp:TextBox></td>
        </tr>
        <tr>
        <td><asp:Label ID="Label6" runat="server" Text="Degree : "></asp:Label></td>
        <td><asp:TextBox ID="TextBox5" runat="server" Width="198px"></asp:TextBox></td>
        </tr>
        <tr>
        <td><asp:Label ID="Label7" runat="server" Text="Expireance : "></asp:Label></td>
        <td><asp:TextBox ID="TextBox6" runat="server" Width="198px"></asp:TextBox></td>
        </tr>
        <tr>
           <td><asp:Button ID="btnLogin" runat="server" Text="Add" Width="70px" /></td>
           <td align="left"><asp:Button ID="btnreset" runat="server" Text="Reset" CausesValidation="False" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
        </tr>   
     </table> 
    
    </div>   
</asp:Content>

