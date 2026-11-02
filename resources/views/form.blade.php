<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>واجب لارفيل</title>
</head>
<body style="font-family: Tahoma; padding: 40px;">
    <h2>نموذج إرسال البيانات إلى المتحكم</h2>
    <form action="/submit-form" method="POST">
        @csrf
        <label>الاسم الكامل:</label><br>
        <input type="text" name="name" required style="padding: 5px; margin: 10px 0;"><br><br>

        <label>اختر القسم:</label><br>
        <select name="department" style="padding: 5px; margin: 10px 0;">
            @foreach($departments as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select><br><br>

        <button type="submit" style="padding: 8px 15px;">إرسال البيانات</button>
    </form>
</body>
</html>
