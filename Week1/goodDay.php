<script>
        //var today = "Wed Jun 22 2022 14:30:23 GMT+0200 (Central European Summer Time)" //static for testing
        var today = new Date();
</script>

<?php
echo $today = "<script>document.write(today)</script>";
echo $imageURL = "images/afternoon.png";
?>

<style>
        body{
            background-image: url(<?php echo $imageURL;?>);
        }
</style>
