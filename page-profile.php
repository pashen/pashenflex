<?php
/*
Template Name: Profile page
*/
get_header();
?>

<div id="container">

        <!-- Profile --><div id = "profile">
		<div id = "info">
                <div class = "photo">
					<?php the_author_image(); ?>
                </div>
				
                <div class = "personal-info">
					<div class = "name-position">
                        <div class = "name"><?php
								$blogusers = get_users(array('role'=>'Author'));
								foreach ($blogusers as $user) {
									echo $user->display_name . '</br>';
							}
						?></div>
                        <div class = "position">Developer</div>
                    </div>
                    <div class = "some-link">
                        <a href="#portfolio" class = "some-link">
                            <img class="some-link" src="<?php bloginfo('template_directory') ?>/assets/images/content/somelink.png" height="140" width="580"/>
                            <span>See My Portfolio</span>
                        </a>
                    </div>
                </div>
        </div><!-- /Info -->

  <!-- Content Inner --><div class = "content-inner">



                <!-- Left Sidebar --><div class = "left-sidebar">



                    <div id = "design-block" class = "block">

                        <h2>Design</h2>

                        <div class = "block-content">

                            <div class = "field roll-with-description hide">

                                <div class = "roll-button"><span></span></div>

                                <div class = "roll-field">

                                    <div class = "label">Digital Painting</div>

                                    <div class = "progressbar"><span class = "progress-count" level = "70"></span></div>

                                    <div class = "description">...</div>

                                </div>

                            </div>

                            <div class = "field roll-with-description hide">

                                <div class = "roll-button"><span></span></div>

                                <div class = "roll-field">

                                    <div class = "label">Vectors</div>

                                    <div class = "progressbar"><span class = "progress-count" level = "60"></span></div>

                                    <div class = "description">...</div>

                                </div>

                            </div>

                            <div class = "field roll-with-description show">

                                <div class = "roll-button"><span></span></div>

                                <div class = "roll-field">

                                    <div class = "label">Web Design</div>

                                    <div class = "progressbar"><span class = "progress-count" level = "80"></span></div>

                                    <div class = "description">Design of a web 2.0 community portal with support for flash.</div>

                                </div>

                            </div>

                            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->

                        </div>

                    </div>



                    <div id = "design-applications" class = "block">

                        <h2>Design Applications</h2>

                        <div class="block-content">

                            <div class = "tag-field">Photoshop</div>

                            <div class = "tag-field">Illustrator</div>

                            <div class = "tag-field">MS Paint</div>

                            <div class = "tag-field">After Effects</div>

                            <div class = "tag-field">Premiere Pro</div>

                        </div>

                    </div>



                </div><!-- /Left Sidebar -->

                <!-- Content --><div class = "content">

                    <div id = "skills" class="block">

                        <h2>General Information</h2>

                        <div class="block-content">

                            <div class="block-content-left">

                                <div class = "field">

                                    <span class = "label">Name:</span>

                                    <span class = "text">Jeffrey Richards</span>

                                </div>

                                <div class = "field">

                                    <span class = "label">Birthday:</span>

                                    <span class = "text">June 17, 1986</span>

                                </div>

                                <div class = "field">

                                    <span class = "label">Address:</span>

                                    <span class = "text">New York City,<br/>United States</span>

                                </div>

                            </div>

                            <div class="block-content-right">

                                <div class = "field">

                                    <span class = "label">Phone:</span>

                                    <span class = "text">+1 123-456-7890</span>

                                </div>

                                <div class = "field">

                                    <span class = "label">E-mail:</span>

                                    <span class = "text">email@example.com</span>

                                </div>

                                <div class = "field">

                                    <span class = "label">Website:</span>

                                    <span class = "text">www.example.com</span>

                                </div>

                            </div>

                        </div>

                        <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->

                    </div>


				<?php while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>

                    <div class = "body">

                        <?php the_content() ?>
                    </div>

				<?php endwhile ?>
                </div><!-- /Content -->



                <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



            </div><!-- /Content Inner -->



        </div><!-- /Profile-->


        </div><!-- /Profile-->

	</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>