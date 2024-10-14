<?php

defined('MOODLE_INTERNAL') || die();

function simplemodule_add_instance($data) {
    global $DB;
    //$data->timecreated = time();
    return $DB->insert_record('simplemodule', $data);
}

function simplemodule_update_instance($data) {
    global $DB;
    //$data->timemodified = time();
    $data->id = $data->instance;
    return $DB->update_record('simplemodule', $data);
}

function simplemodule_delete_instance($id) {
    global $DB;
    return $DB->delete_records('simplemodule', array('id' => $id));
}
