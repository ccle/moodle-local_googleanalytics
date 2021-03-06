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
 * Local Redirect
 *
 * This local plugin that adds a 'friendly url' version of Google analytics
 * to Moodle
 *
 * @package    local
 * @subpackage local_googleanalytics
 * @copyright  2013 Bas Brands, www.basbrands.nl
 * @author 	   Bas Brands, Gavin Henrick.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    global $CFG, $USER, $DB;

    $moderator = get_admin();
    $site = get_site();

    $settings = new admin_settingpage('local_googleanalytics', get_string('pluginname', 'local_googleanalytics'));
    $ADMIN->add('localplugins', $settings);

    $name = 'local_googleanalytics/enabled';
    $title = get_string('enabled', 'local_googleanalytics');
    $description = get_string('enabled_desc', 'local_googleanalytics');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $settings->add($setting);

    $name = 'local_googleanalytics/gakey';
    $title = get_string('gakey', 'local_googleanalytics');
    $description = get_string('gakey_desc', 'local_googleanalytics');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $settings->add($setting);

    $name = 'local_googleanalytics/courseshortname';
    $title = get_string('courseshortname', 'local_googleanalytics');
    $description = get_string('courseshortname_desc', 'local_googleanalytics');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $settings->add($setting);

}

