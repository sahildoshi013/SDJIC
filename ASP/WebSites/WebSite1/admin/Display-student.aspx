<%@ Page Title="" Language="VB" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="false" CodeFile="Display-student.aspx.vb" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
th 
{
    text-align: center;
}
td 
{
    text-align: right;
}
</style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="nav" Runat="Server">
</asp:Content>
<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div class="text-right">
        <asp:LinkButton ID="LinkButton1" runat="server" PostBackUrl="add-students.aspx" 
            ForeColor="White" Font-Size="Medium" Font-Underline="True">Add Faculty</asp:LinkButton>
    </div>
    <%--<table cellpadding="5" border="2" width="100%">
        <tr>
        <th><asp:Label ID="Label10" runat="server" Text="Name  "></asp:Label></th>
        <th><asp:Label ID="Label1" runat="server" Text="Address  "></asp:Label></th>
        <th><asp:Label ID="Label2" runat="server" Text="Date of Birth  "></asp:Label></th>
        <th><asp:Label ID="Label3" runat="server" Text="Mail ID  "></asp:Label></th>
        <th><asp:Label ID="Label4" runat="server" Text="Mobile No  "></asp:Label></th>
        <th><asp:Label ID="Label5" runat="server" Text="Degree  "></asp:Label></th>
        <th><asp:Label ID="Label6" runat="server" Text="Expireance  "></asp:Label></th>
        <th><asp:Label ID="Label7" runat="server" Text="Delete "></asp:Label></th>
        <th><asp:Label ID="Label8" runat="server" Text="Update "></asp:Label></th>
        </tr>
    </table>--%>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" 
        ConnectionString="<%$ ConnectionStrings:ConnectionString %>" 
        SelectCommand="SELECT * FROM [student]">
    </asp:SqlDataSource>
    <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
        BackColor="White" BorderColor="#999999" BorderStyle="Solid" BorderWidth="1px" 
        CellPadding="3" DataSourceID="SqlDataSource1" ForeColor="Black" 
        GridLines="Vertical" Width="100%">
        <Columns>
            <asp:BoundField DataField="s_id" HeaderText="s_id" 
                SortExpression="s_id" />
            <asp:BoundField DataField="s_enrollment_no" HeaderText="s_enrollment_no" 
                SortExpression="s_enrollment_no" />
            <asp:BoundField DataField="s_name" HeaderText="s_name" 
                SortExpression="s_name" />
            <asp:BoundField DataField="s_address" HeaderText="s_address" 
                SortExpression="s_address" />
            <asp:BoundField DataField="s_email_id" HeaderText="s_email_id" 
                SortExpression="s_email_id" />
            <asp:BoundField DataField="s_mobile_no" HeaderText="s_mobile_no" 
                SortExpression="s_mobile_no" />
            <asp:BoundField DataField="s_p_mob_no" HeaderText="s_p_mob_no" 
                SortExpression="s_p_mob_no" />
            <asp:BoundField DataField="s_course" HeaderText="s_course" 
                SortExpression="s_course" />
            <asp:BoundField DataField="s_year" HeaderText="s_year" 
                SortExpression="s_year" />
        </Columns>
        <FooterStyle BackColor="#CCCCCC" />
        <PagerStyle BackColor="#999999" ForeColor="Black" HorizontalAlign="Center" />
        <SelectedRowStyle BackColor="#000099" Font-Bold="True" ForeColor="White" />
        <HeaderStyle BackColor="Black" Font-Bold="True" ForeColor="White" />
        <AlternatingRowStyle BackColor="#CCCCCC" />
    </asp:GridView>
</asp:Content>

