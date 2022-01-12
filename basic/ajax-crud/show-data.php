<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AJAX Load Data </title>
    </head>

<body>
    <table>
        <tr>
            <td id="header">
                <h1>PHP with AJAX</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="Load Data">
            </td>
        </tr>
        <tr id="table-data">
            <table border="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td align="center">1</td>
                    <td>Testing hero</td>
                </tr>
            </table>
        </tr>
    </table>

    



<script type="text/javascript" src="js/jquery-3.6.0.js"></script>

<script type="text/javascript">
    $(document).ready(function (){
        $("#load-button").on("click", function (e){
           $.ajax({
               url: "ajax-load.php",
               type: "POST",
               success: function (data){
                   $("#table-data").html(data);
               }
           });
        });
    });
</script>
</body>
</html>