
<div class="jumbotron text-center">
  <h1>The Blog</h1>
  <p>Lets Talk Wolves Then!</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">

      <h3>Post Something</h3>
      
		<?php echo validation_errors(); ?>
		<?php echo form_open('news/create'); ?>
<span id="txtHint"></span>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" onfocus="this.value=''" onkeyup="showHint(this.value)"/>
</div>
    <br>
 <div class="form-group"> 
    <label for="text">Text</label>
    <textarea class="form-control" name="text" rows="5" id="text" onfocus="this.value=''"></textarea>
    <br>
    <input type="submit" class="btn btn-warning"  name="submit" value="Post" />
</div>


    <script>
	function showHint(str) {
  	if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  		} else {
    	var xmlhttp = new XMLHttpRequest();
    	xmlhttp.onreadystatechange = function() {
      	if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
</form>




</div>
 

<div class="container">

	<div class="col-sm-4">
    	<h3>Posts</h3>
		<div>
			<?php
				$com_query = "SELECT * FROM news WHERE id = ''";
			?>			

		</div>


		    	
    </div>
</div>

    




<!-- There are only two things here that probably look unfamiliar to you: the form_open() function and the validation_errors() function.

The first function is provided by the form helper and renders the form element and adds extra functionality, like adding a hidden CSRF prevention field. The latter is used to report errors related to form validation.

Go back to your news controller. You’re going to do two things here, check whether the form was submitted and whether the submitted data passed the validation rules. You’ll use the form validation library to do this. -->