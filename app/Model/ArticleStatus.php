<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleStatus extends Model {

	//
    protected $table = 'article_status';

    public $timestamps = false;

    protected $fillable = [
        'art_id',
        'view_number',
        'comment_number'
    ];

    public static function initArticleStatus($articleId){
        if(self::insert(array('art_id'=>$articleId))){
            return true;
        }else{
            return false;
        }
    }

    public static function deleteArticleStatus($art_id){

        return self::where('art_id','=',$art_id)->first()->delete();
    }

}