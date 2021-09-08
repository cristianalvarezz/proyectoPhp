<?php
//framework que acabamos de isntalar 
use PHPUnit\Framework\TestCase;
//clase comentarios
use App\Post;
//clase comentarios
use App\Comment;

class PostTest extends TestCase
{

    public function test_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment();
        //creo un comentario 
        $post->addComment($comment);
        //compruebo que sea igual y cuento los comentarios 
        $this->assertEquals(1, $post->countComments());
        //pruebo de que este comentario sea una instancia de comentarios, reviso el primercomentario que tengo creado 
        $this->assertInstaceOf(Comment::class, $post->getComments()[0]);
    }
}