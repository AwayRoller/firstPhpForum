<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 24/07/18
 * Time: 15:19
 */

namespace App\Controllers;

use App\Core\App;


class CommentsController
{

    public function index()
    {

        $comments = App::get('database')->selectAll('comments');


        return view('comments', compact('comments'));

    }

    public function store()
    {

        //Insert comment associated with the req

        //And redirect back to all comments

        App::get('database')->insert('comments',
            [


                'user' => $_POST['user'],
                'comment' => $_POST['comment'],

                'cr_date' => date("Y/m/d H:i:s")


            ]);



        return redirect('comments');

    }

}