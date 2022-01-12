<!DOCTYPE html>
<html lang="en">
<head>
    <title>AJAX Insert Data</title>
</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1> ADD record with php ajax</h1>
            </td>
        </tr>
        <tr>
            <form id="addForm">
                First Name: <input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Last Name: <input type="text" id="lname">
                <input type="submit" id="save-button" value="Save">
            </form>
<!--            <td id="table-form">-->
<!--               -->
<!--            </td>-->
        </tr>
        <tr>
            <td id="table-data">

            </td>
        </tr>
    </table>





<script type="text/javascript" src="js/jquery-3.6.0.js"></script>

<script type="text/javascript">
    $(document).ready(function (){
        function loadTable(){
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function (data){
                    $("#table-data").html(data);
                }
            });
        }
        loadTable();

        $("#save-button").on("click", function (e){
            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();

            $.ajax({
                url: "ajax-insert.php",
                type: "POST",
                data: {first_name: fname, last_name: lname},
                success: function (data){
                    if(data == 1){
                        loadTable();
                        $("#addForm").trigger("reset");
                    }else{
                        alert("Can't load data");
                    }
                }
            });

        })
    });
</script>
</body>
</html>