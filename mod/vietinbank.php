<?php require_once('../include/head.php'); ?>
<?php require_once('../include/nav.php'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card" style="max-width: 1000px; margin: auto;">
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <li class="d-flex mb-4 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Fake Bill Chuyển Tiền: <b style="color:#00e3cc;">VietinBank</b>
                </h6>
              </div>
            </div>
          </li>
          <form id="td-vietinbank" method="POST">
            <input name="forbank" value="vietinbank" hidden="">
            <div id="namegui" class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Tên của bạn</label>
              <div class="col-sm-9">
                <input type="text" id="name_di" name="name_di" class="form-control" required placeholder="Tên người chuyển">
              </div>
            </div>
            <div id="stkgui" class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">STK của bạn</label>
              <div class="col-sm-9">
                <input type="text" id="stk_di" name="stk_di" class="form-control" required placeholder="Số tài khoản người chuyển">
              </div>
            </div>
            <div id="bank1" class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Tên ngân hàng người nhận</label>
              <div class="col-sm-9">
                <select required="" id="bank" name="bank" class="form-control" onchange="chonBank()">
                                <option ant="VietinBank" int="ICB" value="Ngân hàng TMCP Công thương Việt Nam">VietinBank</option><option ant="Vietcombank" int="VCB" value="Ngân hàng TMCP Ngoại Thương Việt Nam">Vietcombank</option><option ant="BIDV" int="BIDV" value="Ngân hàng TMCP Đầu tư và Phát triển Việt Nam">BIDV</option><option ant="Agribank" int="VBA" value="Ngân hàng Nông nghiệp và Phát triển Nông thôn Việt Nam">Agribank</option><option ant="OCB" int="OCB" value="Ngân hàng TMCP Phương Đông">OCB</option><option ant="MBBank" int="MB" value="Ngân hàng TMCP Quân đội">MBBank</option><option ant="Techcombank" int="TCB" value="Ngân hàng TMCP Kỹ thương Việt Nam">Techcombank</option><option ant="ACB" int="ACB" value="Ngân hàng TMCP Á Châu">ACB</option><option ant="VPBank" int="VPB" value="Ngân hàng TMCP Việt Nam Thịnh Vượng">VPBank</option><option ant="TPBank" int="TPB" value="Ngân hàng TMCP Tiên Phong">TPBank</option><option ant="Sacombank" int="STB" value="Ngân hàng TMCP Sài Gòn Thương Tín">Sacombank</option><option ant="HDBank" int="HDB" value="Ngân hàng TMCP Phát triển Thành phố Hồ Chí Minh">HDBank</option><option ant="VietCapitalBank" int="VCCB" value="Ngân hàng TMCP Bản Việt">VietCapitalBank</option><option ant="SCB" int="SCB" value="Ngân hàng TMCP Sài Gòn">SCB</option><option ant="VIB" int="VIB" value="Ngân hàng TMCP Quốc tế Việt Nam">VIB</option><option ant="SHB" int="SHB" value="Ngân hàng TMCP Sài Gòn - Hà Nội">SHB</option><option ant="Eximbank" int="EIB" value="Ngân hàng TMCP Xuất Nhập khẩu Việt Nam">Eximbank</option><option ant="MSB" int="MSB" value="Ngân hàng TMCP Hàng Hải">MSB</option><option ant="CAKE" int="CAKE" value="TMCP Việt Nam Thịnh Vượng - Ngân hàng số CAKE by VPBank">CAKE</option><option ant="Ubank" int="Ubank" value="TMCP Việt Nam Thịnh Vượng - Ngân hàng số Ubank by VPBank">Ubank</option><option ant="Timo" int="TIMO" value="Ngân hàng số Timo by Ban Viet Bank (Timo by Ban Viet Bank)">Timo</option><option ant="ViettelMoney" int="VTLMONEY" value="Tổng Công ty Dịch vụ số Viettel - Chi nhánh tập đoàn công nghiệp viễn thông Quân Đội">ViettelMoney</option><option ant="VNPTMoney" int="VNPTMONEY" value="VNPT Money">VNPTMoney</option><option ant="SaigonBank" int="SGICB" value="Ngân hàng TMCP Sài Gòn Công Thương">SaigonBank</option><option ant="BacABank" int="BAB" value="Ngân hàng TMCP Bắc Á">BacABank</option><option ant="PVcomBank" int="PVCB" value="Ngân hàng TMCP Đại Chúng Việt Nam">PVcomBank</option><option ant="Oceanbank" int="Oceanbank" value="Ngân hàng Thương mại TNHH MTV Đại Dương">Oceanbank</option><option ant="NCB" int="NCB" value="Ngân hàng TMCP Quốc Dân">NCB</option><option ant="ShinhanBank" int="SHBVN" value="Ngân hàng TNHH MTV Shinhan Việt Nam">ShinhanBank</option><option ant="ABBANK" int="ABB" value="Ngân hàng TMCP An Bình">ABBANK</option><option ant="VietABank" int="VAB" value="Ngân hàng TMCP Việt Á">VietABank</option><option ant="NamABank" int="NAB" value="Ngân hàng TMCP Nam Á">NamABank</option><option ant="PGBank" int="PGB" value="Ngân hàng TMCP Xăng dầu Petrolimex">PGBank</option><option ant="VietBank" int="VIETBANK" value="Ngân hàng TMCP Việt Nam Thương Tín">VietBank</option><option ant="BaoVietBank" int="BVB" value="Ngân hàng TMCP Bảo Việt">BaoVietBank</option><option ant="SeABank" int="SEAB" value="Ngân hàng TMCP Đông Nam Á">SeABank</option><option ant="COOPBANK" int="COOPBANK" value="Ngân hàng Hợp tác xã Việt Nam">COOPBANK</option><option ant="LienVietPostBank" int="LPB" value="Ngân hàng TMCP Bưu Điện Liên Việt">LienVietPostBank</option><option ant="KienLongBank" int="KLB" value="Ngân hàng TMCP Kiên Long">KienLongBank</option><option ant="KBank" int="KBank" value="Ngân hàng Đại chúng TNHH Kasikornbank">KBank</option><option ant="UnitedOverseas" int="UOB" value="Ngân hàng United Overseas - Chi nhánh TP. Hồ Chí Minh">UnitedOverseas</option><option ant="StandardChartered" int="SCVN" value="Ngân hàng TNHH MTV Standard Chartered Bank Việt Nam">StandardChartered</option><option ant="PublicBank" int="PBVN" value="Ngân hàng TNHH MTV Public Việt Nam">PublicBank</option><option ant="Nonghyup" int="NHB HN" value="Ngân hàng Nonghyup - Chi nhánh Hà Nội">Nonghyup</option><option ant="IndovinaBank" int="IVB" value="Ngân hàng TNHH Indovina">IndovinaBank</option><option ant="IBKHCM" int="IBK - HCM" value="Ngân hàng Công nghiệp Hàn Quốc - Chi nhánh TP. Hồ Chí Minh">IBKHCM</option><option ant="IBKHN" int="IBK - HN" value="Ngân hàng Công nghiệp Hàn Quốc - Chi nhánh Hà Nội">IBKHN</option><option ant="VRB" int="VRB" value="Ngân hàng Liên doanh Việt - Nga">VRB</option><option ant="Woori" int="WVN" value="Ngân hàng TNHH MTV Woori Việt Nam">Woori</option><option ant="KookminHN" int="KBHN" value="Ngân hàng Kookmin - Chi nhánh Hà Nội">KookminHN</option><option ant="KookminHCM" int="KBHCM" value="Ngân hàng Kookmin - Chi nhánh Thành phố Hồ Chí Minh">KookminHCM</option><option ant="HSBC" int="HSBC" value="Ngân hàng TNHH MTV HSBC (Việt Nam)">HSBC</option><option ant="HongLeong" int="HLBVN" value="Ngân hàng TNHH MTV Hong Leong Việt Nam">HongLeong</option><option ant="GPBank" int="GPB" value="Ngân hàng Thương mại TNHH MTV Dầu Khí Toàn Cầu">GPBank</option><option ant="DongABank" int="DOB" value="Ngân hàng TMCP Đông Á">DongABank</option><option ant="DBSBank" int="DBS" value="DBS Bank Ltd - Chi nhánh Thành phố Hồ Chí Minh">DBSBank</option><option ant="CIMB" int="CIMB" value="Ngân hàng TNHH MTV CIMB Việt Nam">CIMB</option><option ant="CBBank" int="CBB" value="Ngân hàng Thương mại TNHH MTV Xây dựng Việt Nam">CBBank</option><option ant="Citibank" int="CITIBANK" value="Ngân hàng Citibank, N.A. - Chi nhánh Hà Nội">Citibank</option><option ant="KEBHanaHCM" int="KEBHANAHCM" value="Ngân hàng KEB Hana – Chi nhánh Thành phố Hồ Chí Minh">KEBHanaHCM</option><option ant="KEBHANAHN" int="KEBHANAHN" value="Ngân hàng KEB Hana – Chi nhánh Hà Nội">KEBHANAHN</option><option ant="MAFC" int="MAFC" value="Công ty Tài chính TNHH MTV Mirae Asset (Việt Nam) ">MAFC</option><option ant="VBSP" int="VBSP" value="Ngân hàng Chính sách Xã hội">VBSP</option>    
                </select>
              </div>
            </div>
            <script>
              function chonBank() {
                var selectElement = document.getElementById("bank");
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var intValues = selectedOption.getAttribute("int");
                document.getElementById('code').value = intValues;
                var selectElement = document.getElementById("bank");
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                var intValues = selectedOption.getAttribute("ant");
                document.getElementById('code1').value = intValues;
              }
            </script>
            <input id="code1" value="Vietinbank" name="code1" hidden="">
            <input id="code" value="ICB" name="code" hidden="">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">STK nhận</label>
              <div class="col-sm-9">
                <input type="number" id="stk_nhan" name="stk_nhan" required="" class="form-control" placeholder="Số tài khoản người nhận">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Tên người nhận</label>
              <div class="col-sm-9">
                <input type="text" id="name_nhan" name="name_nhan" required="" class="form-control" placeholder="Tên người nhận">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Số tiền chuyển</label>
              <div class="col-sm-9">
                <input type="number" id="menhgia" name="menhgia" required="" class="form-control" placeholder="Ví dụ: 100000">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Nội dung chuyển khoản</label>
              <div class="col-sm-9">
                <textarea type="text" id="nd" name="nd" required class="form-control" placeholder="Nhập nội dung CK"></textarea>
              </div>
            </div>
            <div class="row mb-3" id="">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Phí chuyển khoản</label>
              <div class="col-sm-9">
                <input type="text" id="phick" name="phick" class="form-control" placeholder="Phí chuyển khoản" value="Miễn phí">
              </div>
            </div>
            <div class="row mb-3" id="">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Mã giao dịch</label>
              <div class="col-sm-9">
                <input type="text" id="code" name="code" class="form-control" placeholder="Mã giao dịch" value="<?php echo(rand(99000000000,10000000000000));?>">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label" for="thanhdieudeptrai">Thời gian chuyển tiền</label>
              <div class="col-sm-9">
                <input type="text" id="time" name="time" required="" class="form-control" placeholder="Time" value="<?php date_default_timezone_set('Asia/Ho_Chi_Minh');echo date('d/m/Y H:i');?>">
              </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary waves-effect waves-light">Tạo bill</button>
            </div>
          </form>
        </div>
        <div id="creator-success"></div>
        <div id="download-img"></div>
        <div id="done-fakebill-td"></div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('#td-vietinbank').submit(function(e) {
        e.preventDefault();
        var submitButton = $(this).find('button[type="submit"]');
        submitButton.html('Đang fake bill...').prop('disabled', true);
        showToastrNotification('info', 'Đang tạo bill, đợi xíu nhen...', 'Thông báo');
        var randomDelay = Math.floor(Math.random() * (2000 - 1000 + 1)) + 1000;
        setTimeout(function() {
            var formData = $('#td-vietinbank').serialize();
            $.ajax({
                type: 'POST',
                url: 'ajax/vietinbank.php',
                data: formData,
                success: function(response) {
                    $('#creator-success').html('');
                    $('#download-img').html('');
                    $('#done-fakebill-td').html('');
                    $('#creator-success').html('<br/><p class="alert alert-success mb-3">Đã tạo ảnh fake-bill thành công!</p>');
                    $('#download-img').html('<a href="data:image/jpeg;base64,' + response + '" download="thanhdieu-fakebill-lol.jpg" class="btn btn-success">Tải Bill Xuống</a><br/><br/>');
                    var image = $('<img>').attr('src', 'data:image/jpeg;base64,' + response);
                    $('#done-fakebill-td').append(image);
                    showToastrNotification('success', 'Fake bill thành công <3', 'Thông báo');
                    submitButton.html('thành công, nhấn để tạo lại').prop('disabled', false);
                },
                error: function(error) {
                    console.log(error);
                    showToastrNotification('error', 'Fake bill thất bại...', 'Thông báo');
                    submitButton.html('Tạo bill (miễn phí)').prop('disabled', false);
                }
            });
        }, randomDelay);
    });
});
</script>
<?php require_once('../include/foot.php'); ?>