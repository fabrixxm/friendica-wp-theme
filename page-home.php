<?php get_header("home"); ?>

        <!-- One -->
            <section id="one" class="wrapper">
                <div class="inner">
                    <div class="flex flex-3">
                        <article>
                            <header>
                                <h3>Decentralization</h3>
                            </header>
                            <p>Decentralized architecture with no central authority or ownership.</p>
                            <p>Relationships can be made across any compatible system, creating a network of Internet scale made up of smaller sites.</p>
                            <p>Seamless wall-to-wall posts and remote comments, even across different network nodes.</p>
                        </article>
                        <article>
                            <header>
                                <h3>Privacy</h3>
                            </header>
                            <p>Access lists for every item.</p>
                            <p>Private conversation groups &mdash; on these pages all communications are restricted to group members.</p>
                            <p>One-to-one private messaging on supported protocols.</p>
                            <p>Optionally "expire" old content after a certain period of time.</p>
                            <p>Download your personal data. It all belongs to you.</p>
                        </article>
                        <article>
                            <header>
                                <h3>Interoperability</h3>
                            </header>
                            <p>Built-in support for StatusNet, GNU social, Quitter, and diaspora*.</p>
                            <p>Support for email contacts and communications (two-way) via IMAP4rev1/ESMTP.</p>
                            <p>Import arbitrary websites and blogs into your social stream via RSS/Atom feeds.</p>
                            <p>Support for other services via plugins.</p>
                        </article>
                    </div>
                </div>
            </section>

        <!-- Two -->
            <section id="two" class="wrapper style1 special">
                <div class="inner">
                    <header>
                        <h2>A personal social network</h2>
                        <p>Keep in contact with people you care about.</p>
                    </header>
                    <div class="flex flex-4">
                        <div class="box person">
                            <div class="image round">
                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </div>
                            <h3>Posts</h3>
                            <p>Write your thoughts, edit them if you want. Comment, Like and Dislike posts from your contacts.</p>
                        </div>
                        <div class="box person">
                            <div class="image round">
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </div>
                            <h3>Photos</h3>
                            <p>Share your holiday photos, but only with people you want.</p>
                        </div>
                        <div class="box person">
                            <div class="image round">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <h3>Events</h3>
                            <p>Organize the next meeting of your reading group, or let everybody know about your cool party!</p>
                        </div>
                        <div class="box person">
                            <div class="image round">
                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <h3>Profiles</h3>
                            <p>Like in real life, have a public profile and private aspects only for your closest friends. Or keep everything private!</p>
                        </div>
                    </div>
                    <footer>
                        <a href="/features/" class="button">More features</a> <a href="/screenshots/" class="button">Screenshots</a>
                    </footer>
                </div>
            </section>

        <!-- Three -->
            <section id="three" class="wrapper special">
                <div class="inner">
                    <header class="align-center">
                        <h2>Free software &mdash; Free protocols</h2>
                        <p>Friendica is free software and use free protocols.</p>
                    </header>
                    <div class="flex flex-2">
                        <article>
                            <div class="image fit">
                                <img src="<?php echo  get_template_directory_uri(); ?>/images/pic2.png" alt="Stack">
                            </div>
                            <header>
                                <h3>PHP &amp; MySQL</h3>
                            </header>
                            <p>Run your personal Friendica node on shared hosts.</p>
                            <p>Friendica runs on PHP with MySQL as a database. If you can run WordPress, you can run Friendica.</p>
                            <footer>
                                <a href="/requirements/" class="button special">More</a>
                            </footer>
                        </article>
                        <article>
                            <div class="image fit">
                                <img src="<?php echo  get_template_directory_uri(); ?>/images/pic1.png" alt="Plugin">
                            </div>
                            <header>
                                <h3>Extensible</h3>
                            </header>
                            <p>Extensible via third-party plugins and themes.</p>
                            <p>Add functionality, personalize the look and feel, connect to third-party services.</p>
                            <footer>
                                <a href="https://github.com/friendica/friendica-addons" class="button special">More</a>
                            </footer>
                        </article>
                    </div>
                </div>
            </section>

            <hr>
            <!-- Four -->
            <?php
            $args = array(
                'post_type' => "post"
            );
            $the_query = new WP_Query( $args );
            ?>

            <section id="four" class="wrapper special">
                <div class="inner">
                    <header class="align-center">
                        <h2>Last News</h2>
                    </header>
                    <div class="row">
                        <!-- article 1 -->
                        <?php
                            if ($the_query->have_posts()) {
                                $the_query->the_post();
                                get_template_part( 'entry', 'home' );
                            }
                        ?>
                        <div class="6u 12u$(medium)">
                            <!-- article 2-5 -->
                            <div class="row">
                                <?php
                                    if ($the_query->have_posts()) {
                                        $the_query->the_post();
                                        get_template_part( 'entry', 'home' );
                                    }
                                ?>

                                <?php
                                    if ($the_query->have_posts()) {
                                        $the_query->the_post();
                                        get_template_part( 'entry', 'home' );
                                    }
                                ?>
                            </div>
                            <hr>
                            <div class="flex flex-2">
                                <?php
                                    if ($the_query->have_posts()) {
                                        $the_query->the_post();
                                        get_template_part( 'entry', 'home' );
                                    }
                                ?>

                                <?php
                                    if ($the_query->have_posts()) {
                                        $the_query->the_post();
                                        get_template_part( 'entry', 'home' );
                                    }
                                ?>
                            </div>
                        </div>
                    <div>
                </div>
            </section>
        <?php wp_reset_query(); ?>
<?php get_footer(); ?>
