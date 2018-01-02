<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage of Faculty.master" AutoEventWireup="false" CodeFile="Display Paper.aspx.vb" Inherits="Display_Paper" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div class="text-right">
        <asp:LinkButton ID="LinkButton1" runat="server" PostBackUrl="add-faculty.aspx" 
            ForeColor="White" Font-Size="Medium" Font-Underline="True">Add Question</asp:LinkButton>
    </div>
    <table cellpadding="5" border="2" width="100%">
        <tr>
        <th><asp:Label ID="Label10" runat="server" Text="Question No.  "></asp:Label></th>
        <th><asp:Label ID="Label1" runat="server" Text="Question "></asp:Label></th>
        <th><asp:Label ID="Label2" runat="server" Text="Option A  "></asp:Label></th>
        <th><asp:Label ID="Label3" runat="server" Text="Option B  "></asp:Label></th>
        <th><asp:Label ID="Label4" runat="server" Text="Option C  "></asp:Label></th>
        <th><asp:Label ID="Label5" runat="server" Text="Option D  "></asp:Label></th>
        <th><asp:Label ID="Label7" runat="server" Text="Currect Option "></asp:Label></th>
        <th><asp:Label ID="Label6" runat="server" Text="Delete "></asp:Label></th>
        <th><asp:Label ID="Label8" runat="server" Text="Update "></asp:Label></th>
        </tr>
    </table>
</asp:Content>

