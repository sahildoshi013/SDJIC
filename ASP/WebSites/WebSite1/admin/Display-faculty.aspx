<%@ Page Title="" Language="VB" MasterPageFile="~/admin/MasterPage.master" AutoEventWireup="false" CodeFile="Display-faculty.aspx.vb" Inherits="_Default" %>

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
        <asp:LinkButton ID="LinkButton1" runat="server" PostBackUrl="add-faculty.aspx" 
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
        
    SelectCommand="SELECT  f_id AS Expr1, f_name AS Expr2, f_address AS Expr3, f_DOB AS Expr4, f_mail_id AS Expr5, f_degree AS Expr6, f_mobile_no AS Expr7, f_expireance AS Expr8 FROM Faculty" 
    DeleteCommand="DELETE FROM Faculty WHERE (f_id = @f_id)" 
    UpdateCommand="UPDATE Faculty SET f_name = @f_name, f_address = @f_address, f_DOB = @f_DOB, f_mail_id = @f_mail_id, f_mobile_no = @f_mobile_no, f_degree = @f_degree, f_expireance = @f_expireance WHERE (f_id = @f_id)">
        <DeleteParameters>
            <asp:Parameter Name="f_id" />
        </DeleteParameters>
        <UpdateParameters>
            <asp:Parameter Name="f_name" />
            <asp:Parameter Name="f_address" />
            <asp:Parameter Name="f_DOB" />
            <asp:Parameter Name="f_mail_id" />
            <asp:Parameter Name="f_mobile_no" />
            <asp:Parameter Name="f_degree" />
            <asp:Parameter Name="f_expireance" />
            <asp:Parameter Name="f_id" />
        </UpdateParameters>
    </asp:SqlDataSource>
    <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" 
        BackColor="White" BorderColor="#999999" BorderStyle="Solid" BorderWidth="1px" 
        CellPadding="3" DataSourceID="SqlDataSource1" ForeColor="Black" 
        GridLines="Vertical" Width="100%" DataKeyNames="Expr1">
        <Columns>
            <asp:BoundField DataField="Expr1" HeaderText="Faculty ID" 
                SortExpression="Expr1" InsertVisible="False" ReadOnly="True" />
            <asp:BoundField DataField="Expr2" HeaderText="Faculty Name" 
                SortExpression="Expr2" />
            <asp:BoundField DataField="Expr3" HeaderText="Faculty Address" 
                SortExpression="Expr3" />
            <asp:BoundField DataField="Expr4" HeaderText="Faculty Birthdate" 
                SortExpression="Expr4" DataFormatString="{0:dd/MM/yyyy}" />
            <asp:BoundField DataField="Expr5" HeaderText="Faculty Mail ID" 
                SortExpression="Expr5" />
            <asp:BoundField DataField="Expr6" HeaderText="Faculty Mobile No" 
                SortExpression="Expr6" />
            <asp:BoundField DataField="Expr7" HeaderText="Faculty Degree" 
                SortExpression="Expr7" />
            <asp:BoundField DataField="Expr8" HeaderText="Faculty Expieance" 
                SortExpression="Expr8" />
            <asp:CommandField EditText="Update" ShowEditButton="True" />
            <asp:CommandField ShowDeleteButton="True" />
        </Columns>
        <FooterStyle BackColor="#CCCCCC" />
        <PagerStyle BackColor="#999999" ForeColor="Black" HorizontalAlign="Center" />
        <SelectedRowStyle BackColor="#000099" Font-Bold="True" ForeColor="White" />
        <HeaderStyle BackColor="Black" Font-Bold="True" ForeColor="White" />
        <AlternatingRowStyle BackColor="#CCCCCC" />
    </asp:GridView>
</asp:Content>

