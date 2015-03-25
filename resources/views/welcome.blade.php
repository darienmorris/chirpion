@extends('app')

@section('content')
<section id='main-hero' class='hero bg-main-hero'>
	<h1 class='hero-title'>Find the best Tweeters for your favorite topics</h1>

	<div class='container'>
		<section class='block-md'>
			<h2 class='hero-input-title h4'>What topic do you love?</h2>
			<input type='text' class='hero-input' placeholder="Javascript, Gardening, Movies, News">
		</section>

		
	</div>
</section>

<section class='row-sm category-groups page-buffer'>

	<div class='container'>
		<h4 class='module-title'>Can't decide? Choose one of our favorites</h4>
		<div>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>Programming</span>
				</div>
				<ul class='category-group-list'>
					<li class='category-group-item'>Javascript</li>
					<li class='category-group-item'>CSS</li>
					<li class='category-group-item'>Python</li>
					<li class='category-group-item'>Ruby</li>
					<li class='category-group-item'>PHP</li>
				</ul>
			</div>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>Lifestyle</span>
				</div>
				<ul class='category-group-list'>
					<li class='category-group-item'>Cooking</li>
					<li class='category-group-item'>Paleo</li>
					<li class='category-group-item'>Vegetarian</li>
					<li class='category-group-item'>Fitness</li>
					<li class='category-group-item'>Crossfit</li>
				</ul>
			</div>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>Science</span>
				</div>
				<ul class='category-group-list'>
					<li class='category-group-item'>Astronomy</li>
					<li class='category-group-item'>Biology</li>
					<li class='category-group-item'>Evolution</li>
					<li class='category-group-item'>Physics</li>
					<li class='category-group-item'>Robotics</li>
				</ul>
			</div>
			<div class='category-group'>
				<div class='category-group-header'>
					<span class='category-group-title'>The Arts</span>
				</div>
				<ul class='category-group-list'>
					<li class='category-group-item'>Electronic Music</li>
					<li class='category-group-item'>Painting</li>
					<li class='category-group-item'>Pixel Art</li>
					<li class='category-group-item'>Photoshop</li>
					<li class='category-group-item'>Photography</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@stop