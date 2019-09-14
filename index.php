<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hatolna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
 crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

</head>
<body>
    <div class="container" style="margin-top: 20px">
	<h1>Parser</h1>
	<hr></hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover" id="parse">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Page URL</td>
                            <td>Title</td>
                            <td>Image</td>
                            <td>Content</td>

                        </tr>
                    </thead>
                     <tbody>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 
    <script type="text/javascript">
        $(document).ready(function() {
            $("#parse").DataTable({ 

              "ajax":{
              	"url":"display.php",
              	"dataSrc":"",
              	 type:"POST",
     

              } ,

              "columns":[
               	{"data":"id"},
                {"data":"page_url"},
                {"data":"title"},
                {"data":"img"},
                {"data":"content"},

              ]

              
            });
        });
    </script>
</body>
</html>