<?php
require('../../config.php');
require_once($CFG->dirroot.'/enrol/enrol_automation/enrol_automation.php');

enrol_automation_sync_enrolments();
?>