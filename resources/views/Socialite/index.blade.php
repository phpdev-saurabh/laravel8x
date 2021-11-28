@extends('layouts.bs4')

@section('title')
	Laravel Socialite
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('socialite.github.redirect') }}"> Login with Github </a>
			</div>
		</div>
	</div>

@endsection