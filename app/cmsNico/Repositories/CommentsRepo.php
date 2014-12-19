<?php namespace cmsNico\Repositories;

use cmsNico\Entities\Comments;

class CommentsRepo extends BaseRepo {

    public function getModel()
    {
        return new Comments;
    }


    public function newComment()
    {
        $comment = new Comments();
        return $comment;
    }

}