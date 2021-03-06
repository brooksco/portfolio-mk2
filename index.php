<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">

	<title>Colin Brooks</title>

	<link rel="stylesheet" href="css/style.css">
	<script src="js/custom-min.js" type="text/javascript"></script>
</head>
<body>

<!-- Header -->
<?php include 'header.php'; ?>
<!-- End Header -->

<!-- Hero unit, with anchor point zero -->
<section name="anchor-zero" id="hero-unit">

	<!-- Setup the grid -->
	<div class="grid">
		<div class="grid__item">
		<p id="hero-text">Photo + Web :)</p>
		<p id="scroll-arrow">»</p>
	</div>
</div>
<!-- End of the hero unit, and anchor zero -->
</section>

<!-- About me info, with anchor point one -->
<section id="anchor-one" name="anchor-one">
	<!-- Setup the grid -->
	<div class="grid">
		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<!-- Floating image of me, set to one quarter of the grid -->
				<div class="grid__item one-quarter">

					<div id="me-image">
						<img src="img/newspaper.jpg" class="img--left">
					</div>

				</div><div class="grid__item three-quarters">

				<div id="me-content">	
					<h1 class="clean-header">About Me</h1>

					<p>
						
						I'm originally from Seattle, WA, and recently moved back from Wellington, New Zealand. I
						graduated in May 2013 from Grinnell College with a
						degree in General Science: Computer Science, and a
						concentration in Neuroscience. I've spent my summers
						working with at-risk youth, doing art in the park with
						kids in Iowa, and building websites for community non-profits.

					</p>

					<p>

						I like a lot of different things (like art, kids, and rolling around outdoors), so my approach
						to projects reflects that. With the natural
						relationship between the web and photography, I think it's
						valuable to have experience in both. 

					</p>

				</div>
			</div>
		</div>
	</div>
	<!-- End of about me info, anchor one -->
</section>

<!-- Web work portfolio, with anchor point two -->
<section id="anchor-two" name="anchor-two" class="gray">
	<!-- Setup the grid -->
	<div class="grid">

		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<h1 id="projects-header" class="clean-header">Projects & Experience</h1>
				
				<div class="grid__item project">

						<div class="project-image-wrapper">
			<a href="img/project/project-rays-home.jpg" 
						data-lightbox="rays" 
						title="Photos relevant to RAYS now feature prominantly on the home page to help build more emotional connections with visitors.">
				<img src="img/project/project-rays-home.jpg" class="project-image">
			</a>
			<a href="img/project/project-rays-kayak.jpg" 
						data-lightbox="rays" 
						title="I photographed RAYS events to fill in documentation gaps, and give them (and me) more high-quality images to work with.">
				<img src="img/project/project-rays-kayak.jpg" class="project-image">
			</a>
			<a href="img/project/project-rays-sparkpage.jpg" 
						data-lightbox="rays" 
						title="A major goal for the project was to balance having more information available, with keeping it from being overwhelming. Expandable sections were one solution, and pull quotes another.">
				<img src="img/project/project-rays-sparkpage.jpg" class="project-image">
			</a>
			<a href="img/project/project-rays-headshots.jpg" 
						data-lightbox="rays" 
						title="On the old site there were no staff photos or bios, so I took new headshots on location for those who needed them.">
				<img src="img/project/project-rays-headshots.jpg" class="project-image">
			</a>
		</div>

		<h3 class="clean-subheader">Renton Area Youth & Family Services</h3>
		<h4><em>Web Designer & Photographer, May 2013 - September 2013</em></h4>

		<section class="two-column text-cols--2">
		
		<p>

			The old RAYS site didn't have a lot of appeal. It had little
			in the way of personalized content that was at all relevant to the
			work they actually <em>do</em>. For an organization that does a large
			portion of its work from referrals, and relies on individual
			donors, this was less than ideal.

		</p>

		<p>

			Starting from scratch, I worked with RAYS staff to build
			a site filled with both <em>more</em> and more relevant
			descriptions of the work they do and the people they affect.
			Building better emotional connections with visitors to their site
			should allow them to foster more online donations, and become
			better known within the community. To this end I interviewed
			staff, collected stories of clients, wrote stories of clients,
			poured through grant applications, and took photos at events, of
			staff, and around their offices. This is alongside the technical
			aspects of making a site backed by a new content management system
			that's easier for staff to work with, so it can be updated more
			regularly by more people.

		</p>

		<p>
			Check it out at 
			 <a href="http://rays.org" target="_blank">rays.org</a>.
		</p>

	</section>

	<span name="project-anchor-pw"></span>

	</div><div class="grid__item project">

	<div class="project-image-wrapper">
			<a href="img/project/project-pw-home.jpg" 
						data-lightbox="pw" 
						title="A two-paned design enables simple, clean navigation, and allows for large prominent images without scrolling.">
				<img src="img/project/project-pw-home.jpg" class="project-image">
			</a>
			<a href="img/project/project-pw-exterior.jpg" 
						data-lightbox="pw" 
						title="I carefully photographed the guest house inside and out, so as to best promote the space. This included climbing a nearby tree, and using that top step of the ladder you're not supposed to.">
				<img src="img/project/project-pw-exterior.jpg" class="project-image">
			</a>
			<a href="img/project/project-pw-quadtych.jpg" 
						data-lightbox="pw" 
						title="While photographing the cottage, I tried to get across a sense of the friendly nature of the place, and the beautiful environment just outside the door.">
				<img src="img/project/project-pw-quadtych.jpg" class="project-image">
			</a>
			<a href="img/project/project-pw-mobile.jpg" 
						data-lightbox="pw" 
						title="As with past projects, making the site mobile-friendly was a must. This included particular attention to making sure images loaded as fast as possible.">
				<img src="img/project/project-pw-mobile.jpg" class="project-image">
			</a>
		</div>

	<h3 class="clean-subheader">Point White Guest House</h3>
		<h4><em>Web Designer & Photographer, August 2013</em></h4>

		<section class="two-column text-cols--2">
		
		<p>

			What do you do with a guest house? Rent it out. To this end, the
			owners of this particular guest house on Bainbridge Island wanted
			a website which would allow them to promote their property, and
			offer an convenient solution for online booking and payment. The
			site needed to be aesthetically and organizationally inline with
			the idea of a modern island cottage, while emphasizing its idyllic setting.

		</p>

		<p>

			Part of the project included photographing the interior and
			exterior of the guest house. Good imagery was identified as
			extremely important to attracting new guests, and so much of my
			time was spent carefully documenting the space and editing the
			resulting photos. Additionally, the site was setup with WordPress on the backend
			to enable the owners to easily add to these images over time (alongside
			being able to add other new content, like guest comments and updated activity lists).

		</p>

		<p>
			Check it out at 
			 <a href="http://pointwhiteguesthouse.com" target="_blank">pointwhiteguesthouse.com</a>.
		</p>

		</section>

		<span name="project-anchor-fundersen"></span>

	</div><div class="grid__item project">

	<div class="project-image-wrapper">
			<a href="img/project/fundersen-photo.jpg" 
						data-lightbox="fundersen" 
						title="Simple, clean, and horizontally scrolling to show off his best work multiple images at a time.">
				<img src="img/project/fundersen-photo.jpg" class="project-image">
			</a>
			<a href="img/project/fundersen-video.jpg" 
						data-lightbox="fundersen" 
						title="Quinn's video projects vary in what has been (and can be) posted online, so each project is displayed as a chunk of whatever relevant media is publically available.">
				<img src="img/project/fundersen-video.jpg" class="project-image">
			</a>
			<a href="img/project/fundersen-mobile.jpg" 
						data-lightbox="fundersen" 
						title="Being mobile friendly is vital in an industry where you might have at best a few seconds to make an impression as they check their phone between coffees.">
				<img src="img/project/fundersen-mobile.jpg" class="project-image">
			</a>
			<a href="img/project/fundersen-contact.jpg" 
						data-lightbox="fundersen" 
						title="The ultimate goal of the portfolio is to draw in new contacts, so a contact form is front and center on the site.">
				<img src="img/project/fundersen-contact.jpg" class="project-image">
			</a>
		</div>

	<h3 class="clean-subheader">Fundersen</h3>
		<h4><em>Web Designer, Spring 2014 - Summer 2014</em></h4>

		<section class="two-column text-cols--2">
		
		<p>
			Portfolio sites can be an odd blend of needing to be familiar and
			easy to process, while at the same time standing out just enough
			to be remembered. It's a cliche but content really is key, and the
			design needs to reflect that. For Quinn Gundersen's portfolio I
			worked with him to find a clean style that reflected how
			<em>he</em> wanted to be seen, and was flexible enough to
			accomodate new and different types of work in the future.
		</p>

		<p>
			Built on WordPress so it's easy for him to update, and mobile friendly so it can be found and viewed anywhere, Fundersen.com
			is an important tool for Quinn to be able to best market his talents.
		</p>

		<p>
			Check it out at 
			 <a href="http://fundersen.com" target="_blank">fundersen.com</a>.
		</p>

		</section>

		<span name="project-anchor-localfoods"></span>
		
		</div><div  class="grid__item project">

				<div class="project-image-wrapper">
					<a href="img/project/project-localfoods-inventory.jpg" 
						data-lightbox="localfoods" 
						title="A major goal of the project was to make viewing & managing inventory much more pleasant, and have a greater focus on images.">
						<img src="img/project/project-localfoods-inventory.jpg" class="project-image">
					</a>
					<a href="img/project/project-localfoods-cart.jpg" 
						data-lightbox="localfoods" 
						title="By using modals instead of links whenever possible, users would no longer lose their place in lists and be bumped to another page.">
						<img src="img/project/project-localfoods-cart.jpg" class="project-image" data-lightbox="localfoods" title="blah">
					</a>
					<a href="img/project/project-localfoods-stock.jpg" 
						data-lightbox="localfoods" 
						title="To make the site more personal and colorful, I took new photos for headers and other sections.">
						<img src="img/project/project-localfoods-stock.jpg" class="project-image">
					</a>
					<a href="img/project/project-localfoods-mobile.jpg" 
						data-lightbox="localfoods" 
						title="I made sure that all major aspects of the site were mobile and tablet friendly, and fully responsive.">
						<img src="img/project/project-localfoods-mobile.jpg" class="project-image">
					</a>
				</div>


				<h3 class="clean-subheader">Grinnell Localfoods Coop</h3>
				<h4><em>User Interaction Designer, Fall 2012 - Spring 2013</em></h4>
				
				<section class="two-column text-cols--2">
					<p>

						The Grinnell Localfoods Coop needed a new site, and new
						functionality. For producers, managing their inventory on
						the old site was a mess, and for users, buying was an
						exercise in wading through unorganized lists of only semi-
						relevant text, and lacking payment options. Starting from
						scratch a small team of us set out to build something
						better, working with Localfoods coordinators all along the
						way to make sure we were adhering to their needs.

					</p>
					<p>

						The primary goals of the project were to allow producers
						to more effectively manage their goods, and for users to
						be able to pay for their purchases online. As the UI guy,
						I was nominally in charge of all front-facing aspects of
						the site. This included the layouts of pages, navigation,
						graphics and photography, cross browser/platform testing,
						user testing, and making the whole thing responsive for
						devices of all sizes.

					</p>

				</section>
	
	

	</div><div class="grid__item project">

	<h1 id="skills-header" class="clean-header">Technical Skills</h1>
		<ul id="skills-list" class="four-column text-cols--4">
			<li>HTML5</li>
			<li>CSS3</li>
			<li>JavaScript</li>
			<li>jQuery</li>
			<li>SASS/SCSS & LESS</li>
			<li>Responsive Design</li>
			<li>PHP</li>
			<li>Ruby on Rails</li>
			<li>mySQL</li>
			<li>Phonegap</li>
			<li>WordPress</li>
			<li>Git/GitHub</li>
		</ul>

	</div>


</div>
</div>
</div>
<!-- End of web work portfolio, and anchor two -->
</section>


<!-- Photography portfolio, with anchor point three -->
<section id="photography-unit" name="anchor-three">
	<!-- Setup the grid -->
	<div class="grid">

		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<div class="grid__item six-tenths lap-four-tenths palm-one-whole">

				</div><div id="photography-text" class="grid__item four-tenths lap-six-tenths palm-one-whole">

				<h1 id="photography-header" class="clean-header">Photography</h1>

				<div id="photography-images">

					<img src="img/square-caleb.jpg" class="photo-thumb flip" data-photo="caleb.jpg" alt="Untitled">
					<img src="img/square-trees.jpg" class="photo-thumb" data-photo="trees.jpg" alt="Growing up">
					<img src="img/square-fisher.jpg" class="photo-thumb" data-photo="fisher.jpg" alt="Fisher">
					<img src="img/square-sami.jpg" class="photo-thumb" data-photo="sami.jpg" alt="Go Do">
					<img src="img/square-iowa.jpg" class="photo-thumb" data-photo="iowa.jpg" alt="Some will be missed">
					<img src="img/square-obama.jpg" class="photo-thumb" data-photo="obama.jpg" alt="Tears of a President">
					<!-- <img src="img/square-hug.jpg" class="photo-thumb" data-photo="hug.jpg"> -->
					<img src="img/square-seattle.jpg" class="photo-thumb" data-photo="seattle.jpg" alt="One little city">
					<img src="img/square-mikey.jpg" class="photo-thumb" data-photo="mikey.jpg" alt="Conductor">
					<!-- <img src="img/square-byeowa.jpg" class="photo-thumb" data-photo="byeowa.jpg"> -->
					<!-- <img src="img/square-up.jpg" class="photo-thumb" data-photo="up.jpg"> -->
					<!-- <img src="img/square-mountdoom.jpg" class="photo-thumb" data-photo="mountdoom.jpg"> -->
					<!-- <img src="img/square-katie.jpg" class="photo-thumb" data-photo="katie.jpg"> -->
					<img src="img/square-train.jpg" class="photo-thumb" data-photo="train.jpg" alt="Train car under the stars">

				</div>
				
				<p>

					For four years I worked at the Grinnell College Darkroom,
					managing it for two. I've photographed for all kinds of
					events, spaces, and artwork. I enjoy the process of trying
					to speak to what I see, and the nature of an artform
					that inherently encourages you to explore.

				</p>

				<h4>Experience</h4>

					<ul>
						<li>Digital cameras/equipment</li>
						<li>Film developing/printing</li>
						<li>Flashes/lighting</li>
						<li>Adobe Photoshop/Lightroom/Illustrator</li>
						<li>Flickr/500px/Instagram/Tumblr</li>
					</ul>

				<p>

					If you want to see what I've done lately or everything
					larger, head over to my Flickr.

				</p>
				
				<a href="http://www.flickr.com/pandadumpster" target="_blank" id="flickr-link">Flickr</a>
				
			</div>
		</div>
	</div>
</div>
<!-- End of photography portfolio, and anchor three -->
</section>

<!-- Contact form, with anchor point four -->
<section id="anchor-four" name="anchor-four" class="gray">
	<!-- Setup the grid -->
	<div class="grid">

		<!-- Setup responsive spacing -->
		<div class="margin-five">
			<div class="unit-spacing">

				<div class="grid__item">

					<div id="contact-content">
						<h1 id="contact-header" class="clean-header">Contact Me</h1>
						<p id="contact-text">
							<del>95B Upland Road, Kelburn, Wellington NZ, 6012. 022-353-4477.</del>
							<br>
							9806 43rd PL NE, Seattle WA, 98115. 206-999-3131.
						</p>

						<p>
							hello[at]colinbrooks[dot]co
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of contact form, and anchor four -->
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- End Footer -->

</body>
</html>