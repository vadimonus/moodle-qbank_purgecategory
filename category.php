<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Tool for deleting question category with question and subcategories.
 *
 * @package    qbank_purgecategory
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use core_question\local\bank\helper as core_question_local_bank_helper;

require_once("../../../config.php");
require_once("$CFG->dirroot/question/editlib.php");

require_login();
core_question_local_bank_helper::require_plugin_enabled('qbank_purgecategory');

list($thispageurl, $contexts, $cmid, $cm, $module, $pagevars) = question_edit_setup('categories',
        '/question/bank/purgecategory/category.php');

$url = new moodle_url($thispageurl);
$url->remove_params(array('cpage'));
$PAGE->set_url($url);
$PAGE->set_title(get_string('purgecategories', 'qbank_purgecategory'));
$PAGE->set_heading($COURSE->fullname);

echo $OUTPUT->header();

if ($CFG->version >= 2016120503.00) { // Moodle 3.2.3.
    // Print horizontal nav if needed.
    $renderer = $PAGE->get_renderer('core_question', 'bank');
    echo $renderer->extra_horizontal_navigation();
}

$qcobject = new qbank_purgecategory_question_category_object($pagevars['cpage'], $thispageurl,
        $contexts->having_cap('qbank/purgecategory:purgecategory'), 0, $pagevars['cat'], 0, array());
$qcobject->output_edit_lists();
echo $OUTPUT->footer();
