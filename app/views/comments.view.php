<?php require('partials/head.php'); ?>


<h2>Recent comments:</h2>

<!--Here will be placed the section of posted comments-->
<?php foreach ($comments as $comment) : ?>

    <li><?= $comment->user ?></li>
    <li><?= $comment->comment ?></li>

<?php endforeach; ?>


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
