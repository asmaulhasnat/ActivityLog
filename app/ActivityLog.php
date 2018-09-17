<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model {
	protected $table = 'activity_logs';
	protected $dates = ['created_at', 'updated_at'];
	//
	/**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	//protected $table = 'jobs';
	protected $fillable = [
		'url', 'ip', 'agent', 'method', 'name'];

}
