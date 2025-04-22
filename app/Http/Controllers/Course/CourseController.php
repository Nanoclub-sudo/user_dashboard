<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CourseController extends CourseMainController
{
    public function index()
    {

    }
    public function enrolled()
    {
        $registeredCourses = DB::table('course_registrations')->where('user_id',auth()->user()->id)->get();
        return view('courses.index', compact('registeredCourses'));
    }

    public function show($slug)
    {
        $course = DB::table('courses')->whereSlug($slug)->first();

        $registeredList = DB::table('course_registrations')->whereCourseId($course->id)->get();

        $episodes = DB::table('episodes')
            ->where('course_id', $course->id)
            ->whereNull('deleted_at')
            ->get();

        $episode = DB::table('episodes')
            ->where('course_id', $course->id)
            ->orderBy('episode_number', 'asc')
            ->whereNull('deleted_at')
            ->first();

        return view('courses.show', compact('course','episodes','episode','registeredList'));
    }
}
