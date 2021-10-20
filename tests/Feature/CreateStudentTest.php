<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateStudentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function it_creates_student()
    {
        $student = Student::factory()->create();

        $this->assertDatabaseHas('students', $student->toArray());
    }
}
