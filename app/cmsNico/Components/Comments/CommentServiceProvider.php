<?php
/**
 * Created by PhpStorm.
 * User: silence
 * Date: 5/20/14
 * Time: 8:35 PM
 */

namespace cmsNico\Components\Comments;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['comments'] = $this->app->share(function($app)
        {
            $commentBuilder = new CommentBuilder($app['view'],$app['session.store']);
            return $commentBuilder;
        });
    }


}