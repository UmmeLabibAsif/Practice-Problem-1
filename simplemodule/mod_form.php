<?php

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/course/moodleform_mod.php');

class mod_simplemodule_mod_form extends moodleform_mod {
    public function definition() {
        $mform = $this->_form;

        // Name of the activity instance
        $mform->addElement('text', 'name', get_string('name'), array('size' => '64'));
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required', null, 'client');

        // Description/intro field
        $this->standard_intro_elements();

        // Add standard grading elements
        $this->standard_coursemodule_elements();

        // Add action buttons
        $this->add_action_buttons();
    }
}
