<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title><?= esc($book['title']) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #000;
        }

        .pdf-frame {
            border: 0;
            width: 100%;
            height: 100vh;  /* penuh tinggi viewport */
        }
    </style>
</head>
<body>

    <iframe
        class="pdf-frame"
        src="<?= esc($viewerUrl) ?>"
        title="<?= esc($book['title']) ?>"
        allowfullscreen>
    </iframe>

</body>
</html>
