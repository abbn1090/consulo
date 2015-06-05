<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;
use Jenssegers\Date\Date;

class Comment extends Model  {

	use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

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
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function post() 
	{
		return $this->belongsTo('App\Post');
	}
	public function getCreatedAtAttribute($value)
	{
		Date::setLocale('fr');
		return Date::parse($value);
	}

}
