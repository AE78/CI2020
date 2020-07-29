<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="text" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>

<!-- There are only two things here that probably look unfamiliar to you: the form_open() function and the validation_errors() function.

The first function is provided by the form helper and renders the form element and adds extra functionality, like adding a hidden CSRF prevention field. The latter is used to report errors related to form validation.

Go back to your news controller. You’re going to do two things here, check whether the form was submitted and whether the submitted data passed the validation rules. You’ll use the form validation library to do this. -->