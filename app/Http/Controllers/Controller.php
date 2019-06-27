<?php

namespace App\Http\Controllers;

use App\Image;
use App\Portfolio;
use App\Slider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController {
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function index() {
		$sliders = Slider::orderBy('priority', 'asc')->get();

		$portfolios = Portfolio::inRandomOrder()->orderBy('created_at', 'desc')->limit(15)->get();
		return view('front.index', compact('sliders', 'portfolios'));
	}
	public function portfolio() {
		$portfolios = Portfolio::all();
		return view('front.portfolio', compact('portfolios'));
	}
	public function viewPortfolio(Portfolio $portfolio) {
		$port = Portfolio::findOrFail($portfolio)->first();
		$additional = Image::where('portfolio_id', $port->id)->get();
		return view('front.portfolio_view', compact('port', 'additional'));
	}
	public function contact(Request $request) {
		$rules = [
			'name' => 'required|max:50',
			'email' => 'required|max:255',
			'message' => 'required',
		];
		$messages = [
			'name.required' => 'Name is required',
			'email.required' => 'Email is required',
			'message.required' => 'Message is required',
		];
		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
			$msg = '';
			foreach ($validator->errors()->all() as $key => $value) {
				$msg .= $value . ', ';
			}
			$msg = rtrim($msg, ', ');
			return Redirect::back()->with('error', $msg);
		} else {
			Mail::send(['front.emails.contact_mail', 'front.emails.contact_mail_plain'], ['contact' => $request->all()], function ($m) use ($request) {
				$m->from($request->email, $request->name);
				$m->to(env('MAIL_TO_ADDRESS'), env('APP_NAME'))->subject('New Query!');
			});}
		return Redirect::back()->with('success', 'Mail has been sent.');
	}
}
