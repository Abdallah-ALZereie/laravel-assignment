<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $name = $request->input('name');
        $dept = $request->input('department');
return "تم استلام البيانات بنجاح! الاسم: " . $name . "، والقسم المختار رقم: " . $dept;    }
}
