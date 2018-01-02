<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage of Faculty.master" AutoEventWireup="false" CodeFile="old paper.aspx.vb" Inherits="faculty_home" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table cellpadding="5" border="2" width="100%">
        <tr>
        <th><asp:Label ID="Label10" runat="server" Text="Examination Name  "></asp:Label></th>
        <th><asp:Label ID="Label1" runat="server" Text="Paper Name  "></asp:Label></th>
        <th><asp:Label ID="Label2" runat="server" Text="Course  "></asp:Label></th>
        <th><asp:Label ID="Label3" runat="server" Text="Semester  "></asp:Label></th>
        <th><asp:Label ID="Label4" runat="server" Text="Date  "></asp:Label></th>
        <th><asp:Label ID="Label5" runat="server" Text="Time  "></asp:Label></th>
        <th><asp:Label ID="Label7" runat="server" Text="View "></asp:Label></th>
        <th><asp:Label ID="Label8" runat="server" Text="Delete "></asp:Label></th>
        </tr>
    </table>
    <%--<asp:GridView ID="GridView1" runat="server" >
        <Columns>
            <asp:BoundField HeaderText="Paper Name" />
            <asp:BoundField HeaderText="Date" />
            <asp:BoundField HeaderText="Time" />
            <asp:CommandField HeaderText="View" ShowSelectButton="True" />
            <asp:CommandField HeaderText="Delete" ShowDeleteButton="True" />
        </Columns>
    </asp:GridView>--%>
</asp:Content>

