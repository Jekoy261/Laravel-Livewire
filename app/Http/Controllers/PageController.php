<?php

namespace App\Http\Controllers;

class PageController extends Controller {

	public function home() {
		return view('pages.home')->name('pages_home');
	}

	public function accounts() {
		return view('pages.accounts')->name('pages_accounts');
	}
}

?>