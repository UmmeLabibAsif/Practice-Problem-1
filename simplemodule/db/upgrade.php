<?php

defined('MOODLE_INTERNAL') || die();

function xmldb_peerreviewmodule_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager(); 

    if ($oldversion < 2023101200) {

        $table = new xmldb_table('peerreviewmodule');
        $field = new xmldb_field('newfield', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null, 'introformat');

        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        upgrade_mod_savepoint(true, 2023101200, 'peerreviewmodule');
    }

    return true;
}
