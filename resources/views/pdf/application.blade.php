<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Job Application</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            padding: 20px;
            font-size: 14px;
        }
        h1 {
            text-align: center;
            font-size: 22px;
        }
        .section {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Job Application</h1>

    <div class="section">
        <div><span class="label">Full Name:</span> {{ $application->full_name }}</div>
        <div><span class="label">Email:</span> {{ $application->email }}</div>
    </div>

    <div class="section">
        <div class="label">Cover Letter:</div>
        <div>{{ $application->cover_letter }}</div>
    </div>
</body>
</html>
