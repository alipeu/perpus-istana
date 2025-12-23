<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($book['title']) ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/logo-setneg.png') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #111;
        }

        /* Bar atas custom */
        .viewer-topbar {
            flex: 0 0 auto;
            background: #111;
            color: #fff;
            padding: .5rem 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,.4);
            z-index: 9999;
        }

        .viewer-topbar-title {
            font-size: 1rem;
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Iframe PDF.js */
        .viewer-frame {
            flex: 1 1 auto;
            border: 0;
            width: 100%;
            height: calc(100vh - 48px); /* 48px kira-kira tinggi bar atas */
        }
    </style>
</head>
<body>

    <div class="viewer-topbar">
        <button type="button"
                class="btn btn-light btn-sm"
                onclick="if (document.referrer) { history.back(); } else { window.location.href='<?= base_url('/') ?>'; }">
            🡸 <strong>Kembali</strong>
        </button>
        <div class="viewer-topbar-title">
            <?= esc($book['title']) ?>
        </div>
    </div>

    <iframe
        class="viewer-frame"
        src="<?= esc($viewerUrl) ?>"
        title="<?= esc($book['title']) ?>">
    </iframe>

</body>
</html>
