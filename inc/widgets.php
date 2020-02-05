<?php 

function sumisip_widgets_post() {

    register_sidebar([
        'name'          =>  __('Post Sidebar'),
        'id'            =>  'sumisip_sidebar',
        'description'   =>  __('Sidebar for post'),
        'before_widget' =>  '<div>',
        'after_widget' =>  '</div>',
        'before_title' =>  '<h2>',
        'after_title' =>  '</h2>',
    ]);

}

add_action( 'widgets_init', 'wpb_load_widget' );

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
 
// Creating the widget 
class wpb_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_widget', 
 
// Widget name will appear in UI
__('Sumisip Popular Post'), 
 
// Widget description
    array( 'description' => __( 'Sumisip Popular Posts' ), ) 
    );
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
    // $title = apply_filters( 'widget_title', $instance['title'] );
    
    // before and after widget arguments are defined by themes
        echo '<div class="popular-sidebar">';
        echo __( '<h4>Recent Posts</h4>' );

        echo the_post();
         query_posts( array(
            // 'posts_per_page' => ,
         )); 
         
         echo '<ul class="popular-posts">';
         if( have_posts() ): while ( have_posts() ) : the_post(); 
            echo '<li>';
                        echo '<a href="'.get_permalink().'">';
                            echo '<div class="post-item excerpt">';
                                    // tHe();
                                    the_content();

                                    echo'<span>'; 
                                        echo get_the_category()[0]->cat_name;
                                    echo '</span>';

                                    echo'<span>'; 
                                        echo get_the_date();
                                    echo '</span>';
                            echo '</div>';
                        echo '</a>';
                        echo '</li>';
                    endwhile; 
                endif; 
            echo '</ul>';
         
        echo '</div>';
        // print_r(get_post());
        // This is where you run the code and display the output
    }
} // Class wpb_widget ends here


add_action( 'widgets_init', 'wpb_load_widget_category' );

// Register and load the widget
function wpb_load_widget_category() {
    register_widget( 'wpb_load_widget_category' );
}
 
// Creating the widget 
class wpb_load_widget_category extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_load_widget_category', 
 
// Widget name will appear in UI
__('Sumisip Categories'), 
 
// Widget description
    array( 'description' => __( 'Sumisip Categories' ), ) 
    );
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
    // $title = apply_filters( 'widget_title', $instance['title'] );
    $categ = get_categories(array( 'hide_empty' => false,
    'number'  => 5  ));
    
    // before and after widget arguments are defined by themes
    echo '<div class="category-sidebar">';
        echo __( '<h4>Categories</h4>' );
        echo '<ul class="category-lists">';
            foreach ( $categ as $key) {
                echo '<li>';
                    echo '<a href="'.get_category_link($key->term_id).'">';
                        echo'<span>'; 
                                echo $key->name ;
                        echo '</span>';
                    echo '</a>';
                echo '</li>';
            }
        echo '</ul>';
    echo '</div>';

        // This is where you run the code and display the output
    }
} // Class wpb_widget ends here



add_action( 'widgets_init', 'wpb_load_widget_tags' );

// Register and load the widget
function wpb_load_widget_tags() {
    register_widget( 'wpb_load_widget_tags' );
}
 
// Creating the widget 
class wpb_load_widget_tags extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_load_widget_tags', 
 
// Widget name will appear in UI
__('Sumisip Tags'), 
 
// Widget description
    array( 'description' => __( 'Sumisip Tags' ), ) 
    );
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
    
    $tags = get_tags(array(
        'hide_empty' => false,
        'number'  => 5
      ));

      echo '<div class="cloud-tags">';
        echo __( '<h4>Tags</h4>' );
            echo '<ul class="tags-list">';
                foreach($tags as $tag) {
                    echo '<li>';
                        echo '<a href="'.get_tag_link($tag->term_id).'">';
                            echo'<span>'; 
                                echo $tag->name;
                            echo '</span>';
                        echo '</a>';
                    echo '</li>';
                }
        echo '</ul>';
    echo '</div>';

    }
} // Class wpb_widget ends here



add_action( 'widgets_init', 'wpb_load_widget_archive' );

// Register and load the widget
function wpb_load_widget_archive() {
    register_widget( 'wpb_load_widget_archive' );
}
 
// Creating the widget 
class wpb_load_widget_archive extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_load_widget_archive', 
 
// Widget name will appear in UI
__('Sumisip Archive'), 
 
// Widget description
    array( 'description' => __( 'Sumisip Archive' ), ) 
    );
}


 
// Creating widget front-end
 
public function widget( $args, $instance ) {
    // $title = apply_filters( 'widget_title', $instance['title'] );
    
    // before and after widget arguments are defined by themes
    echo '<div class="archive-sidebar">';
        echo __( '<h4>Archive</h4>' );
        echo '<ul class="archive-list">';
            wp_get_archives();
        echo '</ul>';
    echo '</div>';
        // This is where you run the code and display the output
        
    }
} // Class wpb_widget ends here






add_action( 'widgets_init', 'wpb_load_widget_search' );

// Register and load the widget
function wpb_load_widget_search() {
    register_widget( 'wpb_load_widget_search' );
}
 
// Creating the widget 
class wpb_load_widget_search extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'wpb_load_widget_search', 
 
// Widget name will appear in UI
__('Sumisip Search'), 
 
// Widget description
    array( 'description' => __( 'Sumisip Search' ), ) 
    );
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
    // $title = apply_filters( 'widget_title', $instance['title'] );
    
    // before and after widget arguments are defined by themes
    get_search_form();
        // This is where you run the code and display the output

    // $custom_query_args = array( 
    //     'post_status' => 'any',
    //     'post_type'   => 'attachment'
    //     // 'post_per_page' => 5
    // );

    // $custom_query = new WP_Query($custom_query_args);
    // echo '<pre>';
    // print_r($custom_query);
//   echo '<ul>';
//   foreach ($tags as $tag) {
//     echo '<li>' . $tag->name . '</li>';
//   }
//   echo '</ul>';
        
    }
} // Class wpb_widget ends here



