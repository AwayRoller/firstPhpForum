<?php require('partials/head.php'); ?>


<h1>Forum</h1>

    <!--Here will be placed the section of posted comments-->



<h2>Comment:</h2>

    <!--Comment section form-->
    <form method="POST" action="/forum">

        <input name="user" placeholder="User Name">
        <br>


        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <br>

        <button name="submit">Submit</button>


    </form>


<?php require('partials/footer.php'); ?>
