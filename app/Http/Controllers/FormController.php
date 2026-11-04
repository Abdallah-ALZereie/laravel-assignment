<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission; // استدعاء نموذج البيانات

class FormController extends Controller
{
    public function showForm() {
        $departments = [
            '1' => 'قسم الأنظمة الذكية',
            '2' => 'قسم الشبكات والاتصالات',
            '3' => 'قسم تطوير الويب'
        ];
        return view('form', compact('departments'));
    }

    public function processForm(Request $request) {

    Submission::create([
            'name' => $request->input('name'),
            'department' => $request->input('department')
        ]);

        return "تم إرسال البيانات وحفظها في قاعدة البيانات بنجاح!";
    }
}
