Action hooks:

wp_head: Executed in the head section of the HTML document.
wp_enqueue_scripts: Used to enqueue scripts and styles in WordPress.
wp_footer: Executed at the end of the HTML document, just before the closing body tag.
admin_init: Executed when the admin area is initialized.
admin_menu: Used to add or remove admin menu items.
wp_ajax_: Used to handle AJAX requests in WordPress.
wp_login: Executed after a user logs in to the WordPress admin area.
wp_logout: Executed after a user logs out of the WordPress admin area.
init: Executed before any headers are sent.
shutdown: Executed after all output has been sent to the browser.
Filter hooks:

the_content: Used to modify the content of a post or page.
the_title: Used to modify the title of a post or page.
the_excerpt: Used to modify the excerpt of a post or page.
get_search_form: Used to modify the search form HTML.
wp_nav_menu: Used to modify the output of navigation menus.
the_author: Used to modify the author name of a post or page.
the_category: Used to modify the category of a post or page.
the_date: Used to modify the date of a post or page.
the_permalink: Used to modify the permalink of a post or page.
the_tags: Used to modify the tags of a post or page.
wp_title: Used to modify the title tag of a page.
wp_get_attachment_image_attributes: Used to modify the attributes of an image attachment.
the_content_more_link: Used to modify the "read more" link of a post or page.
body_class: Used to modify the body class of a page.
comment_form_default_fields: Used to modify the default comment form fields.
comment_form_defaults: Used to modify the default comment form arguments.
excerpt_length: Used to modify the length of the excerpt.
excerpt_more: Used to modify the "read more" link of an excerpt.
login_form_top: Used to modify the login form HTML.
pre_get_posts: Used to modify the main query before it is executed.
the_archive_title: Used to modify the title of an archive page.
the_archive_description: Used to modify the description of an archive page.
wp_list_categories: Used to modify the output of category lists.
wp_list_pages: Used to modify the output of page lists.
wp_dropdown_categories: Used to modify the output of category dropdowns.
wp_dropdown_pages: Used to modify the output of page dropdowns.
wp_list_authors: Used to modify the output of author lists.
wp_generate_tag_cloud: Used to modify the output of tag clouds.
wp_list_comments: Used to modify the output of comments.
wp_list_bookmarks: Used to modify the output of bookmarks.
wp_get_attachment_image_src: Used to modify the URL of an image attachment.
the_posts: Used to modify the list of posts before it is displayed.
wp_get_attachment_link: Used to modify the HTML link of an attachment.
page_template: Used to modify the template file used to display a page.


wp_head
wp_footer
wp_enqueue_scripts
wp_print_styles
wp_print_scripts
init
wp_loaded
admin_init
admin_menu
admin_enqueue_scripts
admin_notices
admin_footer
the_content
the_title
loop_start
loop_end
wp_login
wp_logout
comment_post
widgets_init
register_sidebar
wp_dashboard_setup
post_edit_form_tag
post_updated
wp_before_admin_bar_render
wp_footer
wp_head
wp_print_footer_scripts
wp_print_head_scripts
wp_meta
wp_insert_post_data
wp_insert_attachment_data
wp_ajax_my_action
wp_ajax_nopriv_my_action
save_post
publish_post
wp_enqueue_media
admin_head
admin_bar_menu
template_redirect
wp_enqueue_scripts
wp_print_styles
wp_print_scripts
wp_footer
wp_head
wp_print_footer_scripts
wp_print_head_scripts
wp_meta
wp_insert_post_data
wp_insert_attachment_data



pre_get_posts
the_post
the_post_thumbnail
wp_enqueue_scripts
wp_footer
wp_head
wp_print_footer_scripts
wp_print_head_scripts
wp_meta
wp_insert_post_data
wp_insert_attachment_data
wp_ajax_my_action
wp_ajax_nopriv_my_action
save_post
publish_post
wp_enqueue_media
admin_head
admin_bar_menu
template_redirect
wp_enqueue_scripts
wp_print_styles
wp_print_scripts
wp_footer
wp_head
wp_print_footer_scripts
wp_print_head_scripts
wp_meta
wp_insert_post_data
wp_insert_attachment_data
pre_get_comments
comment_form_defaults
comment_form_submit_field
comment_form_after_fields
comment_form
wp_set_comment_status
comment_post
pre_comment_approved
comment_approved
comment_unapproved_to_approved
comment_approved_to_unapproved
comment_duplicate_trigger
comment_on_draft
comment_on_password_protected
wp_insert_comment
wp_update_comment_count
wp_set_comment_cookies
wp_blacklist_check
blacklist_keys
akismet_spam_caught
akismet_scheduled_delete
