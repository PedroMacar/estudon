<?php

use App\Models\User;

use function Pest\Laravel\{actingAs, post};

it('Should be create a course with a title bigger than 255 characters', function () {

    $user = User::factory()->create();
    actingAs($user);

    //act
    $request = post(route('courses.store'), [
        'title'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quae.',
    ]);

    // assert
    $request->assertRedirect(route('dashboard'));

    \Pest\Laravel\assertDatabaseCount('courses', 1);

    \Pest\Laravel\assertDatabaseHas('courses', [
        'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.']);

});

it('should be activate a course', function () {

})->todo();
