<?php require_once('include/head.php'); ?>
<?php require_once('include/nav.php'); ?>
          <div class="container-xxl flex-grow-1 container-p-y"><br>
     <div class="alert alert-info mb-3">🔖 Website Được Phát Triển Và Vận Hành Bởi Nguyễn Duy Khang </div>
            <div class="row justify-content-center">
              <div class="col-md-5"></div>
            </div>
            <div class="mt-2">
              <h4>
                <b>Fake bill chuyển khoản:</b>
              </h4> Vui lòng chọn ngân hàng cần làm giả bill chuyển khoản: <br />
              <br />
               <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <a href="fake-bill-mbbank" style="color: #d2d2e8;">
                        <img src="https://i.imgur.com/TRv85q8.png" width="112px" class="rounded d-block m-auto mb-2" />
                        <div class="text-center">
                          <span>MBBank</span>
                          <br><small style="color:#00f259;">Hoạt động</small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <a href="fake-bill-acb-bank" style=" color: #d2d2e8;">
                        <img src="https://i.imgur.com/oJPKN3C.png" width="50px" class="rounded d-block m-auto mb-2" />
                        <div class="text-center">
                          <span>ACB Bank</span>
                          <br><small style="color:#00f259;">Hoạt động</small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <a href="fake-bill-techcombank" style=" color: #d2d2e8;">
                        <img src="https://i.imgur.com/sgLMGn6.png" width="56px" class="rounded d-block m-auto mb-2" />
                        <div class="text-center">
                          <span>Techcombank</span>
                          <br><small style="color:#00f259;">Hoạt động</small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3">
                  <div class="card">
                    <div class="card-body">
                    <a href="fake-bill-vietinbank" style="color: #d2d2e8;">
                        <img src="https://ipay.vietinbank.vn/logo.png" width="50px" class="rounded d-block m-auto mb-2" />
                        <div class="text-center">
                          <span>Vietinbank</span>
                          <br><small style="color:#00f259;">Hoạt động</small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <a href="fake-bill-vietcombank" style="color: #d2d2e8;">
                        <img src="https://i.imgur.com/7JYXAos.png" width="80px" class="rounded d-block m-auto mb-2" />
                        <div class="text-center">
                          <span>Vietcombank</span>
                          <br><small style="color:#00f259;">Hoạt động</small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!--/ Layout container -->
    </div>
  </div>
  <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">© <script>document.write(new Date().getFullYear());</script>2023 - From
                    <a href="https://www.facebook.com/profile.php?id=100091921473915" target="_blank" class="footer-link fw-medium"><b>KhangApi.Site</b> <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span></a>
                            </div>
                </div>
              </div>
            </footer>
  <div class="layout-overlay layout-menu-toggle"></div>
  <div class="drag-target"></div>
  <div class="modal fade show" id="popup_xyz" tabindex="-1" aria-labelledby="modalLongTitle" aria-modal="true" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title rainbow" id="modalLongTitle"><strong>THÔNG BÁO</strong></h5>
        </button>
      </div>
      <div class="modal-body">
          <div class="nav-align-top">
    <div class="tab-pane fade active show" id="navs-pills-top-profile" role="tabpanel">
      <b style="color:#00d176;">
   Anh em nào có thiện chí mua source này về tham khảo hoặc học tập inbox telegram @ndk_vnteam !
  <hr>
      <b style="color:#d40bbc;">
     Vui lòng sử dụng fakebill chỉ để giải trí 
    <br> - Không sử dụng sai mục đích !!
</b>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary waves-effect" onclick="wussunplay();" id="btnDaHieu" disabled data-bs-dismiss="modal">Vui lòng đợi...(3)</button>
      </div>
    </div>
  </div>
</div>
  <script>
$(document).ready(function(){$("#popup_xyz").modal({backdrop:"static",keyboard:!1}),$("#popup_xyz").on("click",function(o){o.target===this&&(o.stopPropagation(),showToastrNotification("error","Bấm v\xe0o chữ đ\xe3 hiểu k\xeca cu","Th\xf4ng b\xe1o"))})}),setTimeout(function(){$("#popup_xyz").modal("hide");let o=document.getElementById("btnDaHieu"),n=3;$(document).ready(function(){$("#popup_xyz").modal("show"),function i(){o.innerHTML=`Vui l\xf2ng đợi... ${n}s`,--n>=0?setTimeout(i,1e3):(o.removeAttribute("disabled"),o.innerHTML="Đ\xe3 hiểu")}()})},1400);
const Wussun_Music=["https://files.catbox.moe/gnec3z.mp3","https://files.catbox.moe/og34gn.mp3","https://files.catbox.moe/ov5svb.mp3","https:///files.catbox.moe/2qyaww.mp3","https://files.catbox.moe/gaklfz.mp3"];let index=Math.floor(Math.random()*Wussun_Music.length);const audio=new Audio(Wussun_Music[index]);function wussunplay(){audio.play()}document.addEventListener("click",wussunplay()),audio.addEventListener("ended",function(){index=(index+1)%Wussun_Music.length,audio.src=Wussun_Music[index],audio.play()});
  </script>
  <?php require_once('include/foot.php'); ?>