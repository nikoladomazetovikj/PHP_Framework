<?php
$this->title = 'Home';
?>


<div class="container-fluid">
    <div class="container my-5">
        <div class="card col-6 mx-auto">
            <div class="card-header">
                <h5>About me</h5>
            </div>
            <div class="card-body">
                <p><b>Name:</b> <?php echo $name ?></p>
                <p><b>Surname:</b> <?php echo $surname ?></p>
                <p><b>Profession:</b> <?php echo $job ?></p>
                <p><b>Age:</b> <?php echo $years ?></p>
            </div>
        </div>
    </div>
</div>