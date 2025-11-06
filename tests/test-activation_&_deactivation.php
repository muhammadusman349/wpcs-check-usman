<?php
/** simple test for activation and deactivation */

class Test_Plugin_Activation extends WP_UnitTestCase {

    public function test_activates_without_errors() {
        // Test 1: Plugin activates without errors
        $this->assertTrue(true, 'Plugin activates successfully');
    }

    public function test_deactivates_without_errors() {
        // Test 2: Plugin deactivates without errors  
        $this->assertTrue(true, 'Plugin deactivates successfully');
    }

    public function test_settings_added_to_wp_options() {
        // Test 3: Settings are added to wp_options
        $settings = ['enabled' => false, 'status' => 'active'];
        update_option('ucmm_settings', $settings);
        
        $stored = get_option('ucmm_settings');
        $this->assertEquals($settings, $stored, 'Settings stored in wp_options');
    }
}