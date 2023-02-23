 <?php
 /*
 * Gets the homepage to use for the current user
 *
 * @return int One of HOMEPAGE_*
 */
function get_home_page() {
    global $CFG;

    if (isloggedin() && !isguestuser() && !empty($CFG->defaulthomepage)) {
        // If dashboard is disabled, home will be set to default page.
        $defaultpage = get_default_home_page();
        if ($CFG->defaulthomepage == HOMEPAGE_MY) {
            if (!empty($CFG->enabledashboard)) {
                return HOMEPAGE_MY;
            } else {
                return $defaultpage;
            }
        } else if ($CFG->defaulthomepage == HOMEPAGE_MYCOURSES) {
            return HOMEPAGE_MYCOURSES;
        } else {
            $userhomepage = (int) get_user_preferences('user_home_page_preference', $defaultpage);
            if (empty($CFG->enabledashboard) && $userhomepage == HOMEPAGE_MY) {
                // If the user was using the dashboard but it's disabled, return the default home page.
                $userhomepage = $defaultpage;
            }
            return $userhomepage;
        }
    }
    return HOMEPAGE_SITE;
}

php
