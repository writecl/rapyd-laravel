<?php namespace Writecl\Rapyd\Demo;

/**
 * Comment
 */
class Comment extends \Eloquent
{

    protected $table = 'demo_comments';

    public function article()
    {
        return $this->belongsTo('Writecl\Rapyd\Models\Article', 'article_id');
    }

    public function author()
    {
        return $this->belongsTo('Writecl\Rapyd\Models\Author', 'author_id');
    }
}
