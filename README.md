# Moodle Enrolment Automation Plugin

This is a sample Moodle plugin that automates user enrolments based on external data.

## Features:
- Automatically enrol users based on their role and course ID.
- Uses Moodle's manual enrolment plugin internally.
- Simulated external user data.
- Can be triggered by cron or manually.

## How it works:
- Fetches user data (email, course ID, role) from external source (simulated here).
- Matches user in Moodle database.
- Enrols the user in the correct course and role.

---

This example is simplified and based on actual work I’ve done for education providers in Australia.