<?php get_template_part('templates/parts/title'); ?>

<!-- need to have this in-line css due to the php templating of the image -->
<style>

/* The 'neutral circle' */
li.neutral {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/timeline-dot.svg") no-repeat 3px 13px;
    }
li.inc {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/inc.svg") no-repeat 2px -1px;
    }
li.org {
      background:url("<?php echo get_template_directory_uri(); ?>/assets/img/history/org.svg") no-repeat 2px -1px;
    }
    
    
</style>


<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/owncloud-square-logo.png" alt="" title="owncloud-square-logo" width="150" height="150" class="alignleft thumbnail size-thumbnail wp-image-3421" />
<p>ownCloud gives you universal access to your files through a web interface or WebDAV. It also provides a platform to easily view & sync your contacts, calendars and bookmarks across all your devices and enables basic editing right on the web.
Installation has minimal server requirements, doesn’t need special permissions and is quick. ownCloud Server is extendable via a simple but powerful API for applications and plugins.</p>
<p>ownCloud started with a <a href="https://www.youtube.com/watch?v=5IdMWxtMMB8">keynote by Frank Karlitschek</a> at Camp KDE’10 where he talked about the need of a self-controlled free and open source cloud.</p>
<p>Two years later, <a href="http://blog.karlitschek.de/2011/12/owncloud-inc-and-owncloud-community.html">Frank announced</a> the start of <a href="http://owncloud.com">ownCloud Inc.</a></p>
<p>The company makes it possible for developers to work full time on ownCloud, organizing ownCloud events, marketing ownCloud to a wider audience and supporting companies, governments and schools in their ownCloud deployments.</p>
<p>The business model of ownCloud Inc. is very similar to other successful Open Source companies, offering services and support around ownCloud for the enterprise. The company is dedicated to working entirely in the open, accelerating development in the areas of its customers' needs while enabling a completely open development process where everybody can contribute.</p>

<h1>ownCloud History Timeline</h1>
<section id="timeline">
	<div class="timeline-block">
		<div class="timeline-img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/history/2014.png" alt="Picture">
		</div> <!-- timeline-img -->
                
		<div class="timeline-content">
                    <ul>
                        <li class="neutral">
			<h2>Title of section 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			<a href="#0" class="cd-read-more">Read more</a><br />
			<span class="timeline-date">Jan 14</span>
			</li>
                    </ul>
		</div> <!-- timeline-content --> 
		<div class="timeline-content">
                    <ul>
                        <li class="inc">
			<h2>Title of section 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			<a href="#0" class="cd-read-more">Read more</a><br />
			<span class="timeline-date">Jan 14</span>
			</li>
                    </ul>
		</div> <!-- timeline-content --> 
		<div class="timeline-content">
                    <ul>
                        <li class="org">
			<h2>Title of section 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			<a href="#0" class="cd-read-more">Read more</a><br />
			<span class="timeline-date">Jan 14</span>
			</li>
                    </ul>
		</div> <!-- timeline-content -->
	</div> <!-- timeline-block -->
 
	<div class="timeline-block">
		<!-- ... -->
	</div>
</section>



