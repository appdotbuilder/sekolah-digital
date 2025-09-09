<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PpdbSettingTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Create admin user
        $this->admin = User::factory()->create([
            'name' => 'Admin Test',
            'email' => 'admin@test.com',
            'role' => 'admin'
        ]);
    }

    public function test_admin_can_view_settings_page(): void
    {
        $response = $this->actingAs($this->admin)
            ->get(route('admin.settings.index'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.settings.index');
    }

    public function test_ppdb_status_can_be_updated(): void
    {
        // Initial setting
        Setting::create(['key' => 'ppdb_status', 'value' => 'true']);

        $response = $this->actingAs($this->admin)
            ->patch(route('admin.settings.update'), [
                'ppdb_status' => 'false'
            ]);

        $response->assertRedirect(route('admin.settings.index'));
        $response->assertSessionHas('success');

        $this->assertEquals('false', Setting::get('ppdb_status'));
    }

    public function test_ppdb_form_shows_when_open(): void
    {
        Setting::create(['key' => 'ppdb_status', 'value' => 'true']);

        $response = $this->get(route('ppdb.create'));

        $response->assertStatus(200);
        $response->assertViewIs('ppdb.create');
        $response->assertViewHas('is_ppdb_open', true);
    }

    public function test_ppdb_form_redirects_when_closed(): void
    {
        Setting::create(['key' => 'ppdb_status', 'value' => 'false']);

        $response = $this->get(route('ppdb.create'));

        $response->assertStatus(200);
        $response->assertViewIs('ppdb.closed');
    }

    public function test_ppdb_store_fails_when_closed(): void
    {
        Setting::create(['key' => 'ppdb_status', 'value' => 'false']);

        $response = $this->post(route('ppdb.store'), [
            'name' => 'Test Student',
            'dob' => '2005-01-01',
            'address' => 'Test Address',
            'previous_school' => 'SMP Test',
            'parent_contact' => '08123456789'
        ]);

        $response->assertRedirect(route('ppdb.create'));
        $response->assertSessionHas('error');
    }

    public function test_setting_get_method_works(): void
    {
        Setting::create(['key' => 'test_key', 'value' => 'test_value']);

        $this->assertEquals('test_value', Setting::get('test_key'));
        $this->assertEquals('default', Setting::get('nonexistent_key', 'default'));
    }

    public function test_setting_set_method_works(): void
    {
        Setting::set('test_key', 'test_value');

        $this->assertEquals('test_value', Setting::get('test_key'));

        // Test updating existing setting
        Setting::set('test_key', 'updated_value');

        $this->assertEquals('updated_value', Setting::get('test_key'));
        $this->assertEquals(1, Setting::where('key', 'test_key')->count());
    }

    public function test_guest_cannot_access_admin_settings(): void
    {
        $response = $this->get(route('admin.settings.index'));

        $response->assertRedirect(route('login'));
    }

    public function test_guest_cannot_update_ppdb_status(): void
    {
        $response = $this->patch(route('admin.settings.update'), [
            'ppdb_status' => 'false'
        ]);

        $response->assertRedirect(route('login'));
    }
}