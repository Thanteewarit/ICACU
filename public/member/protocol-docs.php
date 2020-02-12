<!DOCTYPE html>
<html>
<head>
    <title>IACUC Protocol Docs</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/ic/favicon.png">
    <link rel="icon" type="image/png" href="img/ic/favicon@2x.png">

    <link rel="stylesheet" href="css/material-icons.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="datatables/css/datatables.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/simplebar.css"/>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/docs.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body class="main" id="protocol_docs">
  
    <aside class="sidebar">
        <?php include 'sidebar.php';?>
    </aside>
    <div class="workspace">
        <?php include 'inc/docs/docs-header.php';?>
        <?php include 'inc/docs/docs-body.php';?>

        <?php include 'inc/modal/modal-delete-protocol.php';?>
        <?php include 'inc/modal/modal-conclude-consider.php';?>
        <?php include 'inc/modal/modal-conclude-amendment.php';?>
        <?php include 'inc/modal/modal-conclude-renew.php';?>
        <?php include 'inc/modal/modal-conclude-progress.php';?>
        <?php include 'inc/modal/modal-conclude-termination.php';?>
        <?php include 'inc/modal/modal-protocol-info.php';?>

        <?php include 'inc/box-side.php';?>
    </div>


    <!-- Site JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="js/script.js"></script>
    <!-- Site JS -->


    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            // direction: 'vertical',
            effect: 'fade',
            touchRatio: 0,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <!-- Daterangepicker -->
    <script>
        $(".input-date-ranges").flatpickr({
            mode: "range",
            dateFormat: "d-m-y",
            'static': true
        });
        $(".input-date-single").flatpickr({
            dateFormat: "d-m-y",
            'static': true
        });

        $(function () {
            $('#member_student').hide();
            $("#member_status").change(function () {
                if ($(this).val() == "01") {
                    $("#member_student").show();
                } else {
                    $("#member_student").hide();
                }
            });
        });
    </script>


    <script type="text/javascript">
        $(window).on('load',function(){
            $('#modal_protocol_info').modal('show');
        });
    </script>

</body>
</html>