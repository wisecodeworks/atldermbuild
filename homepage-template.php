<?php
/**
Template Name: homepage (No Sidebar)
 * The template for displaying full width pages.
 *
 * @package bootscores
 */

get_header(); ?>
	<!-- begin page.php -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="container">
	<div class="row goals">
		<div class="col-md-12">
			<h2 class="green-head">Know about our goals</h2>
<p>
	At Atlanta North Dermatology, we appreciate the importance of healthy and beautiful
skin in your life and look forward to providing you with the excellent care and individualized attention to meet your unique dermatologic needs.

</p>
		</div>

	</div>

</div>
<div class="container">
	<div class="row services-box">
		<div class="col-md-12">
			<h2 class="green-head">services</h2>
		</div>
		<div class="col-md-4">
<h3>Medical Surgical <br />
Dermatology</h3>
<ul>
	<li>service</li>
		<li>service</li>
			<li>service</li>
				<li>service</li>
</ul>
		</div>
		<div class="col-md-4">
			<h3>Cosmetic <br />
			Dermatology</h3>
			<ul>
				<li>service</li>
					<li>service</li>
						<li>service</li>
							<li>service</li>
			</ul>
		</div>
		<div class="col-md-4">
			<h3>General <br />
			Dermatology</h3>
			<ul>
				<li>service</li>
					<li>service</li>
						<li>service</li>
							<li>service</li>
			</ul>
		</div>

	</div>

</div>
<div class="blue-wrapper">


<div class="container">

	<div class="row">
		<div class="col-md-12 text-center">
			<h4>Affiliate of the Piedmont Health Care System</h4>
<img src="/wp-content/uploads/2019/07/logos-affilate.png" alt="">
		</div>
	</div>
</div>
</div>



				<div class="doc-wrapper">
					<div class="container">
						<div class="row">


						<div class="col-md-12">


				<h2 class="green-head">Our Team</h2>

			</div>
				</div>
					<div class="row">
						<div class="col-md-4">
							<div class="doc-block">
<img class="img-responsive aligncenter" src="/wp-content/uploads/2019/07/doc-1-small.jpg" alt="">
							</div>
							<button class="btn doc-button">Doctor Name <br /> Position</button>

						</div>
						<div class="col-md-4">

							<div class="doc-block">
<img class="img-responsive aligncenter" src="/wp-content/uploads/2019/07/doc-1-small.jpg" alt="">
							</div>
							<button class="btn doc-button">Doctor Name <br /> Position</button>
						</div>
						<div class="col-md-4">
							<div class="doc-block">
<img class="img-responsive aligncenter" src="/wp-content/uploads/2019/07/doc-1-small.jpg" alt="">
							</div>
            <button class="btn doc-button">Doctor Name <br /> Position</button>
						</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="doc-block">
<img class="img-responsive aligncenter" src="/wp-content/uploads/2019/07/doc-1-small.jpg" alt="">
								</div>
								<button class="btn doc-button">Doctor Name <br /> Position</button>

							</div>
							<div class="col-md-4">

								<div class="doc-block">
<img class="img-responsive aligncenter" src="/wp-content/uploads/2019/07/doc-1-small.jpg" alt="">
								</div>
								<button class="btn doc-button">Doctor Name <br /> Position</button>
							</div>
							<div class="col-md-4">
								<div class="doc-block">
<img class="img-responsive aligncenter" src="/wp-content/uploads/2019/07/doc-1-small.jpg" alt="">
								</div>
							<button class="btn doc-button">Doctor Name <br /> Position</button>
							</div>
							</div>
					</div>
				</div>
				<div class="test-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
				<h2>What Our patients are saying</h2>

							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
							<p>Very kind doctors and staff. They provide super nice and professional care. They put you at ease and make you feel welcome. I’m from out of town but wish I had their offices near me. I highly recommend them.</p>
																							 <small>Patty D.</small>
				    </div>
				    <div class="carousel-item">
							<p>Very kind doctors and staff. They provide super nice and professional care. They put you at ease and make you feel welcome. I’m from out of town but wish I had their offices near me. I highly recommend them.</p>
				                                         <small>Patty D.</small>
				    </div>
				    <div class="carousel-item">
							<p>Very kind doctors and staff. They provide super nice and professional care. They put you at ease and make you feel welcome. I’m from out of town but wish I had their offices near me. I highly recommend them.</p>
				                                         <small>Patty D.</small>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
							                  </div>
							    </div>


								</div>
				</div>


				<div class="container">
					<div class="col-md-12">
						<h2 class="green-head">Contact</h2>
						<?php gravity_form( 'hp form', false, false, false, '', false ); ?>
					</div>

				</div>
			</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
