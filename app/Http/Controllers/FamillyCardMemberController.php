<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamillyCardMember;
use App\Http\Controllers\Controller;

class FamillyCardMemberController extends Controller
{
    public function index()
    {
        $member = FamillyCardMember::all();
    }
}