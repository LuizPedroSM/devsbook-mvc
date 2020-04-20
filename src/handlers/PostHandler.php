<?php
namespace src\handlers;

use \src\models\Post;

class PostHandler {
    public static function addPost(int $idUser, string $type, $body)
    {
        if (!empty($idUser && !empty(trim($body)))) {
            Post::insert([
                'id_user' => $idUser,
                'type' => $type,
                'created_at' => date('Y-m-d H:i:s'),
                'body' => $body
            ])->execute();
        }
    }
}