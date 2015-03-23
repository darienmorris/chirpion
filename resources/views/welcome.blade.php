@extends('app')

@section('content')
<section id='main-hero' class='hero bg-main-hero'>
	<h1 class='hero-title'>Find the best Tweeters for your favorite topics</h1>

	<div class='container'>
		<section class='block-md'>
			<h2 class='hero-input-title'>What topic do you love?</h2>
			<input type='text' class='hero-input' placeholder="Javascript, Gardening, Movies, News">
		</section>
		<section id='category-suggestions' class='block-lg'>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>Programming</span>
				</div>
			</div>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>Lifestyle</span>
				</div>
			</div>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>News</span>
				</div>
			</div>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>Music</span>
				</div>
			</div>
		</section>
	</div>
</section>
@stop