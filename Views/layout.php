<?php include 'header.php'; ?>
<?php include('Core/session.class.php'); ?>

<section id="contentbody">
    <div class="container">
        <div class="row">
            <?php echo $content; ?>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            $(window).scroll(function () {
                if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                    $.ajax({
                        url: "<?= BASE_URL; ?>/news.php?News=" + $(".item:last").attr("id"),
                        success: function (html) {
                            if (html) {
                                $(".row").append(html);
                            } else {
                                alert("Il n'y a plus de news");
                            }
                        }
                    });
                }
            });
        </script>
    </div>
</section>
<?php include 'footer.php'; ?>
