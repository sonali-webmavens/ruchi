<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\Company;
use App\Models\User;

class CompanyControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_company_index()
    {
        $response = $this->get('/companies.index');

        $response->assertStatus(200);
    }

    public function test_add_new_company()
    {
        $response = $this->from(route('companies.create', app()->getLocale()))
        ->post(route('companies.store', app()->getLocale()),[
            'name' => 'Radhe Construction',
            'email' => 'radhe@gmail.com',
            'website' => 'www.radhe.com'
        ]);

        $this->assertEquals(1,company::count());
        $response->assertRedirect(route('companies.index', app()->getLocale() ));
    }
}
