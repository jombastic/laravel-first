@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
	Welcome to your application dashboard!

	<div class="content">
		<p>Here's why you should sign up for our app: <strong>It's Great.</strong></p>

		@include('signup-button', ['text' => 'See just how great it is'])

		{{-- @inject('analytics', 'App\Services\Analytics')
		<div class="finances-display">
			{{ $analytics->getBalance() }} / {{ $analytics->getBudget() }}
		</div> --}}
	</div>
@endsection

{{ $recentPosts }}

@section('footerScripts')
	@parent
	<script src="dashboard.js"></script>
@endsection