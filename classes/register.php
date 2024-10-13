<?php
$title = "register";
?>


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <div class="bg-light p-2 mb-4" style="border-radius: 5px;">
                    <h4 class="mb-0">Register User</h4>
                </div>
                <form method="post" action="register">
                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
