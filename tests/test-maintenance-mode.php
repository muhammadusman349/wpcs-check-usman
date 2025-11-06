<?php
/** simple test for maintenance mode concept */

class Test_Maintenance_Mode extends WP_UnitTestCase {

    public function test_user_access_logic() {
        // Test 1: User role logic
        wp_set_current_user(0);
        $this->assertFalse(is_user_logged_in(), 'Anonymous users are not logged in');

        $admin_id = self::factory()->user->create(['role' => 'administrator']);
        wp_set_current_user($admin_id);
        $this->assertTrue(is_user_logged_in(), 'Admin users can log in');
    }

    public function test_maintenance_concept() {
        // Test 2: Maintenance concept
        $maintenance_enabled = true;
        $user_is_admin = false;
        
        $should_show_maintenance = $maintenance_enabled && !$user_is_admin;
        $this->assertTrue($should_show_maintenance, 'Maintenance shows to non-admin when enabled');
    }
}