<?php namespace cmsNico\Components\Comments;

use Illuminate\View\Factory as View;

class CommentBuilder {

    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function comments($comments, $id){
        
        return $this->view->make('comments.comments', compact('comments', 'id'));
    }

}