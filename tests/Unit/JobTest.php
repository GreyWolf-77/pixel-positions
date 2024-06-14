<?php

use App\Models\Job;
use App\Models\Employer;

it(' belongs to an employer', function () {
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    //Act and assert- perform some kind of action
    expect($job->employer->is($employer))->toBetrue();
});

it('can have tags', function(){
    //AAA
    //Arrange 
    $job= Job::factory()->create();
    //Act
    $job->tag('Frontend');
    //Assert
    expect($job->tags)->toHaveCount(1);
});
