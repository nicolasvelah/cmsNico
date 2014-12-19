<?php  namespace cmsNico\Entities;

class Comments extends \Eloquent {
	protected $fillable = ['user_id','component_name', 'component_item_id','title' ,'comment', 'rate'];

    protected $table = 'comments';

    public function comment()
    {
        return $this->hasMany('cmsNico\Entities\Comments');
    }
}

