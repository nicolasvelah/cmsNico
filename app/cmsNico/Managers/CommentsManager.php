<?php namespace cmsNico\Managers;

class CommentsManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'user_id' => 'required',
            'component_name' => 'required',
            'component_item_id' => 'required',
            'title'  => 'required',
            'comment' => 'required',
            'rate' => 'required',
        ];

        return $rules;
    }


}

