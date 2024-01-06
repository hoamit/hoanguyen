<!-- Core JS -->
<script src="./assets/vendor/libs/popper/popper.js"></script>
  <script src="./assets/vendor/js/bootstrap.js"></script>
  <script src="./assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="./assets/vendor/libs/hammer/hammer.js"></script>
  <script src="//api.thanhdieu.com/protect/ads-damn.js?v=1" defer></script>
  <script src="./assets/vendor/js/menu.js<?=cache($hakibavuong)?>"></script>
  <script src="./assets/js/main.js<?=cache($hakibavuong)?>"></script>
  <script src="https://blog.thanhdieu.com/theme/main/js/addons.js<?=cache($hakibavuong)?>"></script>
  <script>
  function showToastrNotification(status, message, title) {
    var toastrType = status === "success" ? "success" : "error";
    toastr.options = {
      positionClass: 'toast-top-right', 
      closeButton: true,
      progressBar: true,
    };
    toastr[toastrType](message, title);
  }
</script>
  <link rel="stylesheet" href="./assets/vendor/libs/animate-css/animate.css" />
  <link rel="stylesheet" href="./assets/vendor/libs/sweetalert2/sweetalert2.css" />
  <script src="./assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
  <script src="./assets/vendor/libs/toastr/toastr.js"></script>
  </body>
</html>