<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Post extends Model  {

	//use DatePresenter;
    
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
    protected $fillable = ['name', 'slug', 'content','tag', 'published_at'];
   // protected $guarded = [];
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

}