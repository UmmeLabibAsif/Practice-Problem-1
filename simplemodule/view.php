<?php

require_once('../../config.php');
require_once('lib.php');

$id = optional_param('id', 0, PARAM_INT);

if (!$cm = get_coursemodule_from_id('simplemodule', $id)) {
    print_error('invalidcoursemodule');
}

$context = context_module::instance($cm->id);

require_login($cm->course, true, $cm);

$PAGE->set_url('/mod/simplemodule/view.php', array('id' => $id));
$PAGE->set_title($cm->name);
$PAGE->set_heading($cm->course);

echo $OUTPUT->header();
echo $OUTPUT->heading(format_string($cm->name));

if ($simplemodule = $DB->get_record('simplemodule', array('id' => $cm->instance))) {
    echo format_text($simplemodule->intro);
} else {
    echo get_string('nodata', 'simplemodule');
}

echo $OUTPUT->footer();
