<?php
use cmsNico\Managers\CommentsManager;
use cmsNico\Repositories\CommentsRepo;

class CommentsController extends BaseController {

    protected $commentsRepo;

    public function __construct(CommentsRepo $commentsRepo)
    {
        $this->commentsRepo = $commentsRepo;
    }


    public function save()
    {
        $comment = $this->commentsRepo->newComment();
        $manager = new CommentsManager($comment, Input::all());
        $manager->save();

        $art = Input::get('component_item_id');

        return Redirect::back();
    }
}