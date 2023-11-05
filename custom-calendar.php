<?php
/**
 * Plugin Name: Custom Calendar
 * Description: A custom dynamic calendar.
 * Version: 1.0
 * Author: Mohammad Humza
 */

function custom_calendar_shortcode() {
    ob_start();
    ?>
    <div class="wrapper-2">
      <header>
        <div class="month-navigation">
          <span id="prev-month" class="prev-next-month"></span>
          <p class="current-date"></p>
          <span id="next-month" class="prev-next-month"></span>
        </div>
      </header>
      <div class="calendar-1">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_calendar', 'custom_calendar_shortcode');


function custom_calendar_scripts() {
  wp_enqueue_style('custom-calendar-style', plugin_dir_url(__FILE__) . 'style.css');
  wp_enqueue_script('custom-calendar-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_calendar_scripts');
