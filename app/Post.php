<?php namespace App;

use Lanz\Commentable\Commentable;
use Conner\Likeable\LikeableTrait;
use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;
use Jenssegers\Date\Date;



class Post extends Model  {

	//use DatePresenter;
    use Commentable;
    use LikeableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
    protected $fillable = ['name', 'content', 'tag_id'];
    protected $dates = ['published_at'];
	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() 
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Many to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\belongToMany
	 */
	public function tags()
	{
		return $this->belongsToMany('App\Tag');
	} 

	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	
	public function getCreatedAtAttribute($value)
	{
		Date::setLocale('fr');
		return Date::parse($value);
	}


	public function getTagListAttribute()
	{
		return $this->tags->lists('id');
	}
    
     public function getNumCommentsStr()
      {
        $num = $this->comments()->count();

        if ($num == 1)
        {
          return '1 comment';
        }

        return $num . ' comments';
      }
  
    
    

}