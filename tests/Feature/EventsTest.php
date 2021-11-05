<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_list_page_shows_all_events() {
        $event1 = factory(Event::class)->create();
        $event2 = factory(Event::class)->create();

        // $this->get('events')
        //     ->assertSee($event1->title)
        //     ->assertSee($event2->title);
        
        $response = $this->get('events');

        $response->assertViewHas('events', Event::all());
        $response->assertViewHasAll([
            'events' => Event::all(),
            'title' => 'Events Page',
        ]);
        $response->assertViewMissing('dogs');
    }
}
