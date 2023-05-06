<?php
include 'includes/header.php';
?>
<!-- FORM -->

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center">BTTH01</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id">
                    <div id="idHelp" class="form-text">id existed</div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name: </label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age: </label>
                    <input type="text" class="form-control" id="age">
                    <div id="ageHelp" class="form-text">invalid date</div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>