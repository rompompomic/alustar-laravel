<!DOCTYPE html>
<html>
<head>
    <title>Jauns pieprasījums</title>
</head>
<body>
    <h2>Jauns pieprasījums no mājaslapas</h2>
    <p><strong>Uzņēmums:</strong> {{ $data['company'] ?? '-' }}</p>
    <p><strong>PVN:</strong> {{ $data['pvn'] ?? '-' }}</p>
    <p><strong>Kontaktpersona:</strong> {{ $data['contact'] }}</p>
    <p><strong>E-pasts:</strong> {{ $data['email'] }}</p>
    <p><strong>Tālrunis:</strong> {{ $data['phone'] ?? '-' }}</p>
    <p><strong>Apraksts:</strong></p>
    <p>{{ $data['projectDescription'] ?? '-' }}</p>
    <hr>
    <p>Nosūtīts no Alustar.lv</p>
</body>
</html>
