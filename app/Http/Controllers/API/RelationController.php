<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function userLessons($id)
    {
        return User::find($id)->lessons;
    }

    public function lessonTags($id)
    {
        return Lesson::find($id)->tags;
    }

    public function tagLessons($id)
    {
        return Tag::find($id)->lessons;
    }
}
