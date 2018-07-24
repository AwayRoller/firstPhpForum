<?php require('partials/head.php'); ?>



<div class="container" style="margin: auto">

    <div class="row">

        <div class="col-lg-12" style="text-align: center">

            <h2>Recent comments:</h2>

        </div>

    </div>

</div>


<!--Here will be placed the section of posted comments-->

<br>
<br>
<div class="container">

    <?php foreach ($comments as $comment) : ?>


        <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
            <div class="card-header"><?= $comment->user ?></div>
            <div class="card-body">
                <p class="card-text"><?= $comment->comment ?></p>
                <p class="card-date">Date posted: todo</p>
            </div>
        </div>

    <?php endforeach; ?>





</div>




<h2>Comment:</h2>

    <!--Comment section form-->
    <form method="POST" action="/comments">

        <input name="user" placeholder="User Name">
        <br>


        <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>
        <br>

        <button type="submit">Submit</button>


    </form>



<?php require('partials/footer.php'); ?>
