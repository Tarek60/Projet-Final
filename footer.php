<script src="assets/lib/jquery.min.js"></script>
<script src="assets/lib/bootstrap.min.js"></script>
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script src="assets/js/tinymce/langs/fr_FR.js"></script>
<script>
    tinymce.init({
        selector: ".articleTextarea", // change this value according to your HTML
        plugins: "link, image",
        image_caption: true,
        image_advtab: true
    });
</script>
</body>
</html>