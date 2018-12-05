<!doctype html>
<html class="no-js" lang="en">	
	<?php include('section/head.php'); ?>
    <body>
  <header class="site-header">
  <div class="container">
    <nav class="navbar">
      <a class="site-logo pull-left" href="#">
          <img src="images/brand/cp-logo-dark-color-hor.svg" alt="Shards">
          <span>S.A.</span>
      </a>
      <ul class="primary-menu pull-right xs-hidden sm-hidden">
	      <li>
	        <a href="index.php">Home</a>
	      </li>
	      <li class="active">
	        <a href="minimal-page.php">Minimal</a>
	      </li>
	      <li>
	        <a href="#feature">Features Section</a>
	      </li>
	      <li>
	        <a href="blog-listing.php">Blog</a>
	      </li>
	      <li>
	        <a href="#testimonial">Testimonials</a>
	      </li>
	      <li>
	        <a href="#contact">Contact Us</a>
	      </li>
		</ul>
      <div class="primary-menu responsive pull-right sm-visible md-hidden lg-hidden">
          <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
          </div>Menu
  		</div>
    </nav>
  </div>
</header>
<section class="product-description">
  <div class="container">
    <h1>Creative Park S.A.</h1>
    <h4>Minimal Page</h4>
  </div>
</section>

  <div class='page container'>
  <nav class='persistent-menu'>
  
    <ul class='navigation'>
      <span>Introduction</span>
      <ul>
        
          <li>
            <a href='/docs/shards/index.html' class='active'>Quick Start</a>
          </li>
        
      </ul>
    </ul>
  
    <ul class='navigation'>
      <span>Core</span>
      <ul>
        
          <li>
            <a href='/docs/shards/layout.html'>Grid & Layout</a>
          </li>
        
          <li>
            <a href='/docs/shards/alerts.html'>Alerts</a>
          </li>
        
          <li>
            <a href='/docs/shards/badges.html'>Badges</a>
          </li>
        
          <li>
            <a href='/docs/shards/buttons.html'>Buttons</a>
          </li>
        
          <li>
            <a href='/docs/shards/using-icons.html'>Using Icons</a>
          </li>
        
          <li>
            <a href='/docs/shards/cards.html'>Cards</a>
          </li>
        
          <li>
            <a href='/docs/shards/datepickers.html'>Datepickers</a>
          </li>
        
          <li>
            <a href='/docs/shards/progress-bars.html'>Progress Bars</a>
          </li>
        
          <li>
            <a href='/docs/shards/custom-controls.html'>Custom Controls</a>
          </li>
        
          <li>
            <a href='/docs/shards/slider-controls.html'>Slider Controls</a>
          </li>
        
          <li>
            <a href='/docs/shards/carousel.html'>Carousel</a>
          </li>
        
          <li>
            <a href='/docs/shards/modals.html'>Modals</a>
          </li>
        
          <li>
            <a href='/docs/shards/popovers-tooltips.html'>Popovers & Tooltips</a>
          </li>
        
      </ul>
    </ul>
  
</nav>

  <div class='row'>
    <div class='page-content col-md-7 ml-auto mr-auto'>

      <div class='post-header d-flex'>
        <h2 class='page-title w-75'>Quick Start</h2>
        <span class='updated'>Last updated: February 8, 2018</span>
      </div>

      <p>Getting started with Shards is easy. This guide will walk you through setting it up in no time so you can start building beautiful UIs.</p>
<h2 id="Manual-Installation"><a href="#Manual-Installation" class="headerlink" title="Manual Installation"></a>Manual Installation</h2><p>If you’ve downloaded Shards manually, make sure you unzip the archive and include the <code>shards.min.css</code> stylesheet inside your project’s <code>&lt;head&gt;</code> section after the Bootstrap 4 stylesheet. If you need to use one of the custom JavaScript powered controls like datepickers or slider controls, you also need to include the Shards vendor JavaScript file at the end of your page, before the ending <code>&lt;/body&gt;</code> tag.</p>
<h2 id="Dependencies"><a href="#Dependencies" class="headerlink" title="Dependencies"></a>Dependencies</h2><p>Shards’ only hard dependencies are Bootstrap 4’s core stylesheet and jQuery for its custom components. Some Bootstrap 4 components also require <strong>Popper.js</strong> and the official Bootstrap 4 JavaScript file.</p>
<p>To learn more about Bootstrap’s dependencies, make sure you read the <a href="https://getbootstrap.com/docs/4.0/getting-started/javascript/" target="_blank" rel="external">JavaScript</a> section from the official Bootstrap 4 documentation.</p>
<h2 id="Starter-Template"><a href="#Starter-Template" class="headerlink" title="Starter Template"></a>Starter Template</h2><p>If you’re starting a new project from scratch, you can use the following HTML starter template:</p>
<pre>

  <code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot;&gt;

    &lt;!-- CSS Dependencies --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css&quot; integrity=&quot;sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm&quot; crossorigin=&quot;anonymous&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;css/shards.min.css&quot;&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;

    &lt;!-- Optional JavaScript --&gt;
    &lt;!-- JavaScript Dependencies: jQuery, Popper.js, Bootstrap JS, Shards JS --&gt;
    &lt;script src=&quot;https://code.jquery.com/jquery-3.2.1.slim.min.js&quot; integrity=&quot;sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js&quot; integrity=&quot;sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js&quot; integrity=&quot;sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;js/shards.min.js&quot;&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code>
</pre>
<p>The template above includes the Bootstrap 4 stylesheet, the Shards minified stylesheet and finally the Bootstrap 4 and Shards script dependencies. Keep in mind that you might be required to update the file paths accordingly.</p>


      <div class='page-nav clearfix'>
  
  
    <a class='next pull-right' href='/docs/shards/layout.html'>Next →</a>
  
</div>

    </div>
  </div>
</div>