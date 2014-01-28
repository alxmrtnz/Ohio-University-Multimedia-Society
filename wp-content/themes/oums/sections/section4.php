





<section class="page four">
            <div class="content">
                <h1 id="whoTitle">Who We Are</h1>
                <div class="officersBox">

                    <h3 class="whoSub">OFFICERS</h3>
                    <ul class="officerInfo">

                        <?php
                            $args = array( 'post_type' => 'officer', 'order' => 'ASC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();

                                echo '<li class="individualOfficer">';
                                the_post_thumbnail('post-thumb', array('class' => 'officerAvatar'));

                                echo '<div class="officerDescription"><p class="execTitle">';
                                    the_title();

                                $values = get_field('link');
                                /*Checks to see if a portfolio link has yet been assigned to the officer, changes whether an anchor tag is output or not*/
                                  if($values) {
                                    echo '</p> <p class="execName"><a target="_blank" class="memberLink" href="';
                                        the_field( 'link' );
                                    echo '">';
                                        the_field('name');
                                    echo '</a></p><p class="execYear">';
                                  } else {
                                    echo '</p> <p class="execName">';
                                        the_field('name');
                                    echo '</p><p class="execYear">';
                                  }
                                    the_field('major');
                                echo '</p></div></li>';
                            endwhile;
                        ?>


                </div><!-- END Officers Box -->

                <div class="membersBox">
                    <h3 class="whoSub">MEMBERS</h3>
                    <ul class="listOfLists">
                        <ul class="list1">
                            <?php
                            $args = array( 'post_type' => 'member', 'order' => 'ASC', 'posts_per_page' => -1);
                            $loop = new WP_Query( $args );
                            $member_count = 0;
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $member_count = $member_count + 1;
                               
                            endwhile;

                            $half = ceil($member_count / 2);

                            $counter = 0;
                            while ( $counter < $half ) : $loop->the_post();
                                echo '<li class="memberInfo">';

                                $values = get_field('link');
                                  if($values) {
                                    echo '<a target="_blank" class="memberLink" href="';
                                        the_field( 'link' );
                                    echo '">';
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</a></li>';
                                  } else {
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</li>';
                                  }
                                $counter = $counter + 1;
                            endwhile;
                        ?>

                        </ul>
                        <ul class="list2">
                            <?php
                            while ( $counter < $member_count ) : $loop->the_post();
                                echo '<li class="memberInfo">';

                                $values = get_field('link');
                                  if($values) {
                                    echo '<a target="_blank" class="memberLink" href="';
                                        the_field( 'link' );
                                    echo '">';
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</a></li>';
                                  } else {
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</li>';
                                  }
                                $counter = $counter + 1;
                            endwhile;
                        ?>
                        </ul>

                    </ul>
                </div><!-- END MEMBER BOX -->

                <div class="alumniBox">
                    <h3 class="whoSub">ALUMNI</h3>
                    <ul class="listOfLists">
                        <ul class="list1">
                            <?php
                            $args = array( 'post_type' => 'alumnus', 'order' => 'ASC', 'posts_per_page' => -1 );
                            $loop = new WP_Query( $args );
                            $member_count = 0;
                            while ( $loop->have_posts() ) : $loop->the_post();
                                $member_count = $member_count + 1;
                            endwhile;

                            $half = ceil($member_count / 2);

                            $counter = 0;
                            while ( $counter < $half ) : $loop->the_post();
                                echo '<li class="memberInfo">';

                                $values = get_field('link');
                                  if($values) {
                                    echo '<a target="_blank" class="memberLink" href="';
                                        the_field( 'link' );
                                    echo '">';
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</a></li>';
                                  } else {
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</li>';
                                  }
                                $counter = $counter + 1;
                            endwhile;

                        
                            ?>
                        </ul>
                        <ul class="list2">
                       
                            <?php
                            
                            while ( $counter < $member_count ) : $loop->the_post();
                                echo '<li class="memberInfo">';

                                $values = get_field('link');
                                  if($values) {
                                    echo '<a target="_blank" class="memberLink" href="';
                                        the_field( 'link' );
                                    echo '">';
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</a></li>';
                                  } else {
                                        the_title();
                                    echo ', ';
                                        the_field( 'major' );
                                    echo '</li>';
                                  }
                                $counter = $counter + 1;
                            endwhile;
                        ?>
                        </ul>

                    </ul>
                </div><!-- END MEMBER BOX -->
            </div><!--end content-->
          </section>