<?php
/**
 * Quick Setup Script - Enable Self-Check Tool with Default Configuration
 * Run this once to setup, then delete this file
 */

// Load WordPress
require_once(__DIR__ . '/../../../wp-load.php');

// Get current config
$config = get_option('dmr_self_check_config', array());
$settings = get_option('dmr_settings', array());

// Setup flag
$changes_made = false;

// Enable the tool if not already enabled
if (empty($config) || !($config['published'] ?? false)) {
    // Set default configuration
    $config = array(
        'title' => 'Stress Check-In',
        'intro' => 'Take a moment to assess your current stress levels and mental well-being.',
        'published' => true,
        'reversed_items' => array(4, 5, 7, 8),
        'questions' => array(
            'In the last month, how often have you been upset because of something that happened unexpectedly?',
            'In the last month, how often have you felt that you were unable to control the important things in your life?',
            'In the last month, how often have you felt nervous and stressed?',
            'In the last month, how often have you felt confident about your ability to handle your personal problems?',
            'In the last month, how often have you felt that things were going your way?',
            'In the last month, how often have you found that you could not cope with all the things that you had to do?',
            'In the last month, how often have you been able to control irritations in your life?',
            'In the last month, how often have you felt that you were on top of things?',
            'In the last month, how often have you been angered because of things that were outside of your control?',
            'In the last month, how often have you felt difficulties were piling up so high that you could not overcome them?'
        ),
        'ranges' => array(
            'low' => array('min' => 0, 'max' => 13, 'label' => 'Low Stress'),
            'moderate' => array('min' => 14, 'max' => 26, 'label' => 'Moderate Stress'),
            'high' => array('min' => 27, 'max' => 40, 'label' => 'High Stress')
        ),
        'recommendations' => array(
            'low' => 'Your stress levels appear to be well-managed. Keep up the good work with your current coping strategies.',
            'moderate' => 'You are experiencing moderate stress. Consider implementing stress-reduction techniques and seeking support if needed.',
            'high' => 'Your stress levels are high. We strongly recommend scheduling a consultation with a mental health professional.'
        ),
        'fields' => array(
            'full_name' => array('enabled' => true, 'required' => true),
            'email' => array('enabled' => true, 'required' => true),
            'phone' => array('enabled' => true, 'required' => false),
            'notes' => array('enabled' => true, 'required' => false),
            'newsletter' => array('enabled' => true, 'required' => false)
        ),
        'consent_text' => 'I consent to DMR Psychological Services collecting and processing my personal information for the purpose of this assessment and follow-up care.'
    );
    
    update_option('dmr_self_check_config', $config);
    $changes_made = true;
    echo "✅ Self-check tool configuration created and ENABLED!<br><br>";
}

// Enable auto-popup by default
if (!isset($settings['auto_show_popup'])) {
    $settings = array_merge(array(
        'admin_email' => get_option('admin_email'),
        'from_name' => get_bloginfo('name'),
        'from_email' => get_option('admin_email'),
        'enable_notifications' => true,
        'store_user_id' => true,
        'auto_show_popup' => true,
        'popup_delay' => 1
    ), $settings);
    
    update_option('dmr_settings', $settings);
    $changes_made = true;
    echo "✅ Popup settings configured (auto-show: ENABLED, delay: 1 second)<br><br>";
}

if ($changes_made) {
    echo "<h2>Setup Complete! 🎉</h2>";
    echo "<p><strong>Next Steps:</strong></p>";
    echo "<ol>";
    echo "<li>Visit your homepage - the popup should appear automatically after 1 second</li>";
    echo "<li>To customize settings, go to: <strong>WordPress Admin → DMR Services → Settings</strong></li>";
    echo "<li>To edit questions/form, go to: <strong>WordPress Admin → DMR Services → Self Check Builder</strong></li>";
    echo "<li><strong style='color: red;'>DELETE THIS FILE (enable-self-check.php) after running it</strong></li>";
    echo "</ol>";
} else {
    echo "<h2>Already Configured ✓</h2>";
    echo "<p>Everything is already set up!</p>";
    echo "<p>To manage settings:</p>";
    echo "<ul>";
    echo "<li><strong>Settings:</strong> WordPress Admin → DMR Services → Settings</li>";
    echo "<li><strong>Self Check Builder:</strong> WordPress Admin → DMR Services → Self Check Builder</li>";
    echo "</ul>";
    echo "<p><strong style='color: red;'>You can DELETE this file now.</strong></p>";
}
