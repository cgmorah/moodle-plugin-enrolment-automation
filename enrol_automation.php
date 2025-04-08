<?php

/**
 * Enrolment Automation Plugin for Moodle (sample structure)
 * This is a simplified example based on real client work
 */

defined('MOODLE_INTERNAL') || die();

function enrol_automation_sync_enrolments() {
    global $DB;

    // Simulated external API response
    $external_users = [
        ["email" => "student1@example.com", "courseid" => 3, "role" => "student"],
        ["email" => "trainer@example.com", "courseid" => 4, "role" => "editingteacher"],
    ];

    foreach ($external_users as $data) {
        if ($user = $DB->get_record('user', ['email' => $data['email']])) {
            $enrol = enrol_get_plugin('manual');
            $instances = enrol_get_instances($data['courseid'], true);

            foreach ($instances as $instance) {
                if ($instance->enrol === 'manual') {
                    $context = context_course::instance($data['courseid']);
                    $roleid = ($data['role'] === 'student') ? 5 : 3; // role IDs may vary

                    $enrol->enrol_user($instance, $user->id, $roleid);
                }
            }
        }
    }
}
?>