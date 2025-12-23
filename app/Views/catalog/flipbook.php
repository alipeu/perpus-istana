<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('third-party/flipbook/css/flipbook.style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('third-party/flipbook/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('third-party/flipbook/css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('blaze/css/plugins.bundle.css') ?>">
    <link rel="stylesheet" href="<?= base_url('blaze/css/style.bundle.css') ?>">
    <link rel="stylesheet" href="<?= base_url('booksaw/icomoon/icomoon.css') ?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Judul</title>

    <style>
        .flipbook-menuTop {
            display: none !important;
        }

        .flipbook-bookLayer {
            top: 0px;
        }

        .flipbook-menu-btn {
            margin-left: 20px !important;
            margin-right: 20px !important;
        }


        .fa-angle-left,
        .fa-angle-right {
            padding: 0 !important;
        }
    </style>
</head>

<body>
    <div class=" mb-xl-10">
        <button style="display:none" id="flipbook">Read</button>
    </div>
    <script src="<?= base_url("third-party/jquery/jquery-2.2.4.min.js") ?>"></script>
    <script src="<?= base_url("third-party/flipbook/js/flipbook.min.js") ?>"></script>
    <script>
        $(document).ready(function() {
            var fbook = $("#flipbook");

            fbook.flipBook({
                //Layout Setting
                pdfUrl: <?= $book ? '"/books/pdf/' . $book['file'] . '"' : '"/books/pdf/Krug_Steve_Dont_make_me_think_revisited___a_cz-lib.org_.pdf"' ?>,
                lightBox: true,
                layout: 3,
                currentPage: {
                    vAlign: "bottom",
                    hAlign: "left"
                },
                // BTN SETTING
                btnPrev: {
                    enabled: true,
                    title: "Halaman Sebelumnya",
                    iconFA: "icon icon-arrow-left",
                },
                btnNext: {
                    enabled: true,
                    title: "Halaman Selanjutnya",
                    iconFA: "icon icon-arrow-right",
                },
                sideBtnColor: '#8C8C8C',
                sideBtnSize: 30,
                sideBtnBackground: "#F3F2EC",
                sideBtnRadius: 30,
                sideBtnBorder: "1px solid #E5E3DA",
                btnSound: {
                    vAlign: "top",
                    hAlign: "left"
                },
                btnAutoplay: {
                    vAlign: "top",
                    hAlign: "left"
                },
            })

            // background: transparent;
            // border: 1 px solid #E5E3DA;
            // padding: initial;
            // width: 50 px;
            // height: 50 px;
            // border - radius: 50 % ;
            // position: absolute;
            // top: 50 % ;
            // z - index: 5;
            // cursor: pointer;

            fbook.trigger('click')

            setTimeout(() => {
                $("body").append(
                    `<button id="comeback" class="btn btn-sm btn-warning position-fixed text-white" style="top: 20px;left: 20px;z-index:2147483647"><span class="fa fa-chevron-left me-3"></span>Kembali</button>`
                )
            }, 2000);


            $("body").on("click", "#comeback", () => {
                history.back()
            })
        })
    </script>
</body>

</html>