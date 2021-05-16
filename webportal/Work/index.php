<!DOCTYPE html>
<html>

<head>
    <title>PHP Mysql REST API CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br />

        <h3 align="center">PHP Mysql REST API CRUD</h3>
        <br />

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Id_Wasp</th>
                    <th>Id_Secret</th>
                    <th>Frame_type</th>
                    <th>Frame_number</th>
                    <th>Sensor</th>
                    <th>Value</th>
                    <th>Timestamp</th>
                    <th>Sync</th>
                    <th>Raw</th>
                    <th>Parser_type</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {

                fetch_data();

                function fetch_data() {
                    $.ajax({
                        url: "fetch.php",
                        success: function(data) {
                            $('tbody').html(data);
                        }
                    })
                };
            })
</script>
</body>

</html>
