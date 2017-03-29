<?php
function category_parent_linkage_script() {
    wp_enqueue_script( 'category-parent-linkage', get_template_directory_uri().'/js/category_check.js', array( 'jquery' ) );
}
add_action( 'admin_print_scripts-post.php', 'category_parent_linkage_script' );
add_action( 'admin_print_scripts-post-new.php', 'category_parent_linkage_script' );
?>