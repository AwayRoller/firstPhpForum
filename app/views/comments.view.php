<?php require('partials/head.php'); ?>


<div class="title-container">
    <div class="container" >

        <div class="row">

            <div class="col-lg-12 title-col">

                <h2>Recent comments:</h2>

            </div>

        </div>

    </div>
</div>



<!--Here will be placed the section of posted comments-->

<br>
<br>

<div class="results-container">
    <div class="container">

        <?php foreach ($comments as $comment) : ?>


            <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
                <div class="card-header"><?= $comment->user ?></div>
                <div class="card-body">
                    <p class="card-text"><?= $comment->comment ?></p>
                    <p class="card-date small"><?= $comment->cr_date ?></p>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>




<div class="comment-container">

    <div class="container">
        <div class="row">


            <div class="col-lg-12">

                <h2>Comment:</h2>

                <!--Comment section form-->
                <form class="comment-form" method="POST" action="/comments">

                    <input class="user-name" name="user" placeholder="User Name">
                    <br>


                    <textarea class="comment" name="comment" placeholder="Write something.." ></textarea>
                    <br>

                    <div>
                        <button class="btn btn-primary buy-btn-lg" type="submit">Submit</button>
                    </div>


                </form>


            </div>


        </div>
    </div>

</div>





<?php require('partials/footer.php'); ?>
