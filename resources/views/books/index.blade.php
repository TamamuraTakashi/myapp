<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蔵書一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>蔵書一覧</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th class="border px-3 py-2">ID</th>
                <th class="border px-3 py-2">書名</th>
                <th class="border px-3 py-2">著者名</th>
                <th class="border px-3 py-2">出版年月日</th>
                <th class="border px-3 py-2">ISBN</th>
                <th class="border px-3 py-2">貸し出し状況</th>
                <th class="border px-3 py-2">編集</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $b)
            <tr>
                <td class="border px-3 py-2">{{ $b->id }}</td>
                <td class="border px-3 py-2">{{ $b->title }}</td>
                <td>{{ $b->author ?? '—' }}</td>
                <td class="border px-3 py-2">
                    {{ $b->published_at?->format('Y-m-d') ?? '—' }}
                </td>
                <td class="border px-3 py-2">{{ $b->isbn }}</td>
                <td class="border px-3 py-2 rounded {{ $b->status ? 'bg-success' : 'bg-danger' }}">
                    {{ $b->status_label }}</td>
                <td><button type="button" class="btn btn-primary">編集</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>