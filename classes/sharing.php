<?php
$title = "Share something";
?>

<h5 class="bg-light p-3">Share something!</h5>

<div class="border p-3 mb-3" style="margin-left: 20px; margin-right: 20px;">
    <form method="post" action="shares">
        <div class="form-group">
            <label for="title"><b>Share Title</b></label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body"><b>Body</b></label>
            <textarea name="body" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="link"><b>Link</b></label>
            <input type="url" name="link" class="form-control" required>
        </div>
        <div class="form-group d-flex justify-content-start">
            <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Submit</button>
            <a href="shares" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>


