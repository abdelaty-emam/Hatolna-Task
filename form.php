
<html>
	<body>
		<title> Hatolna Task</title>
		<style type="text/css">
			
  form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;

  }

/* Add some margins for each label */
.form-inline label {
  margin: 10px 10px 5px 0;
   }
   .form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  margin-top: 10px;
 

}

.form-inline input{
	width: 300px;
	height: 30px;

}
 .form-inline {
    flex-direction: column;
    align-items: stretch;
  }

		</style>
	
<form  class="form-inline" action="parse.php"  method="get">
<div class="form-group">
    <label class="control-label col-sm-2" for="url">URL :</label>
     <div class="col-sm-8">

        <input type="url" autocomplete="off" class="form-control" name="url" >

        </div>
  </div>
	<button name="submit"  > submit</button>
</form>
	
	</body>


</html>