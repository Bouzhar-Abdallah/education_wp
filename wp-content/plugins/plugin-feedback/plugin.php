<?php
/*
Plugin Name: feed-back plugin
Plugin URI: https://example.com/
Description: Ce plugin ajoute un formulaire de feedback à vos pages et enregistre les données soumises dans la base de données.
Version: 1.0
Author: Abdallah Bouzhar
Author URI: https://example.com/
License: GPL2
*/

function mon_feedback_enqueue_styles() {
    wp_enqueue_style('mon-feedback-styles', plugins_url('css/mon-feedback-styles.css', __FILE__));
}

function mon_feedback_form()
{
    $content = '';
    $content .= '<form class="mon-feedback-form" action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="post">';
    $content .= '<p><label for="feedback_name">Nom</label><input type="text" name="feedback_name" id="feedback_name" required></p>';
    $content .= '<p><label for="feedback_email">Email</label><input type="email" name="feedback_email" id="feedback_email" required></p>';
    $content .= '<p><label for="feedback_message">Message</label><textarea name="feedback_message" id="feedback_message" required></textarea></p>';
    $content .= '<p><label for="feedback_rating">Note</label><select name="feedback_rating" id="feedback_rating" required>';
    $content .= '<option value="">--</option>';
    $content .= '<option value="1">1</option>';
    $content .= '<option value="2">2</option>';
    $content .= '<option value="3">3</option>';
    $content .= '<option value="4">4</option>';
    $content .= '<option value="5">5</option>';
    $content .= '</select></p>';
    $content .= '<p><input name="sub" type="submit" value="Envoyer"></p>';
    $content .= '</form>';
    return $content;
}
add_shortcode('feedback', 'mon_feedback_form');

function mon_feedback_save()
{
    if (isset($_POST["sub"])) {
        global $wpdb;
        $table_name = 'wp_feedback';
        $name = sanitize_text_field($_POST["feedback_name"]);
        $email = sanitize_email($_POST["feedback_email"]);
        $message = sanitize_textarea_field($_POST["feedback_message"]);
        $rating = intval($_POST["feedback_rating"]);
        $wpdb->insert(
            $table_name,
            array(
                'time' => current_time('mysql'),
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'rating' => $rating,
            )
        );
    }
}

add_action('wp_enqueue_scripts', 'mon_feedback_enqueue_styles');
add_action('wp_head', 'mon_feedback_save');
function database_creation(){
    global $wpdb;
    $feedback = $wpdb->prefix .'feedback';
    $charset = $wpdb->get_charset_collate;
    $feedback_det = "CREATE TABLE ".$feedback."(
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name tinytext NOT NULL,
        email VARCHAR(100) NOT NULL,
        message text NOT NULL,
        rating int(2) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($feedback_det);
}
register_activation_hook(__FILE__,'database_creation');
