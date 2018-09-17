<?php

namespace App\Activity_log;
use App\ActivityLog;
use Auth;
use Request;

class Activity_log {
	public static function add_log() {

		$log = [];
		$log['method'] = Request::method();
		$log['url'] = Request::fullurl();
		$log['agent'] = Request::header('user-agent');
		$log['ip'] = Request::ip();
		$log['name'] = Auth::user()->name ?? 'Guest usser';
		ActivityLog::create($log);
	}

}