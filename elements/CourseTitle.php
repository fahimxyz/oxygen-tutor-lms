<?php
namespace Oxygen\TutorElements;

class CourseTitle extends \OxygenTutorElements {

	function name() {
        return 'Course Title';
    }

    function tag() {
        return $this->headingTagChoices();
    }

    function tutor_button_place() {
        return "single";
    }

    /* function icon() {
        return plugin_dir_url(__FILE__) . 'assets/'.basename(__FILE__, '.php').'.svg';
    } */

    function render($options, $defaults, $content) {
        // how does this magically work even with these lines commented out:
        // global $post;
        // setup_postdata($post->ID);

        the_title();
    }


    function class_names() {
        return array('course_title', 'entry-title', 'oxy-tutor-element');
    }


    function controls() {

        $this->addStyleControl(
            array(
                "property" => 'font-family',
            )
        );

        $this->addStyleControl(
            array(
                "property" => 'color',
            )
        );

        $this->addStyleControl(
            array(
                "property" => 'font-size',
            )
        );

        $this->addStyleControl(
            array(
                "property" => 'font-weight',
            )
        );

        $this->addTagControl();

    }

}

new CourseTitle();