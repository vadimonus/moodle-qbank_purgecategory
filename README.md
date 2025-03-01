Purge question category Moodle plugin
=====================================

Requirements
------------
- Moodle 4.0 (build 2022041900) or later.

Installation
------------
Copy the purgequestioncategory folder into your Moodle /local directory and visit your Admin Notification page to complete the installation.

Usage
-----
This plugin version just says that you need to install qbank_purgecategory. You can safely uninstall this plugin.

Author
------
- Vadim Dvorovenko (Vadimon@mail.ru)

Links
-----
- Updates: https://moodle.org/plugins/view.php?plugin=qbank_purgecategory
- Latest code: https://github.com/vadimonus/moodle-qbank_purgecategory

Changes
-------
- Release 0.9 (build 2016041500):
    - Initial release.
- Release 1.0 (build 2016051000):
    - Adding some capability checks.
- Release 1.1 (build 2016051300):
    - No need to select new category if no used questions present.
- Release 1.2 (build 2018011100):
    - Support for 3.3 and higher (replaced usage of deprecated $OUTPUT->pix_url).
- Release 1.3 (build 2020061200):
    - Privacy API support.
    - Question bank tabs.
    - Fix error message after deleting questions in category and system contexts. 
    - Fix error after deprecating of question_is_only_toplevel_category_in_context.
- Release 2.0 (build 2025030100)
    - Plugin rewritten as question bank plugin.
    - Local plugin left for transition.
