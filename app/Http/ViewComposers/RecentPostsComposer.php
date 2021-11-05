<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\View\View;

/**
 * 
 */
class RecentPostsComposer
{
	public function compose(View $view) {
		// $view->with('recentPosts', Post::recent());
		$view->with('recentPosts', 'Must eat something');
	}	
}