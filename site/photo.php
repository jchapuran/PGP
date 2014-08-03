<?php include 'include/header.php'; ?>

<style type="text/css" scoped>
    #photo {
        padding-bottom: 5px;
        border-bottom: 5px solid yellow;
        border-radius: 2px;
    }
</style>

<!--<img id="photoBanner" alt="coming soon" src="graphics/comingsoon.jpg" />-->
      
<!--START JUICEBOX EMBED-->
<script src="jbcore/juicebox.js"></script>
<script>
new juicebox({
containerId: "juicebox-container",
galleryWidth: "100%",
galleryHeight: "100%",
backgroundColor: "#222222"
});
</script>
<div id="juicebox-container"></div>
<!--END JUICEBOX EMBED-->

<?php include 'include/footer.php'?>