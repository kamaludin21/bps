    <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">Credit</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  
  <!-- Modal logout -->
    <div class="col-md-4">
      <!--<button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>-->
      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
          <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Konfirmasi log out</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="ni ni-button-power ni-3x"></i>
                        <h4 class="heading mt-4">Akhiri sesi sekarang?</h4>
                        <p>Jika anda yakin ingin keluar, silahkan tekan tombol konfirmasi disebelah kiri. Jika ingin tetap, silahkan tekan tombol tutup.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= BASE_URL; ?>/Auth/logout" class="btn btn-white">Konfirmasi</a>
                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tutup</button>
                </div>
            </div>
          </div>
      </div>
  </div>
  <!-- Modal logout -->
  <!-- Chart -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.min.js"></script>
  <script src="<?= BASE_URL; ?>/js/vue.js"></script>
  <!-- <script src="<?= BASE_URL; ?>/js/validation.js"></script> -->
  <script src="<?= BASE_URL; ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASE_URL; ?>/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= BASE_URL; ?>/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="<?= BASE_URL; ?>/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= BASE_URL; ?>/js/argon.js?v=1.0.0"></script>

  

  <script type="text/javascript">
  
      function myFunction() {
            let x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        
        function numberFilter(evt) {
		  let charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
        
        $(document).ready(function () {
                $('#datepicker').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    // format: "dd-mm-yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    dateFormat: "yyyy-mm-dd",
                    autoclose: true
                });
            });
            
      $(document).ready( function () {
          $('#myTable').DataTable({
            "ordering" : true,
            "info" : false
            
          });
      } );

      $(document).ready(function() {
          $('#printTable').DataTable( {
            "ordering" : true,
            "info" : false,
            "dom": 'Bfrtip',
            "buttons": [
                {
                    extend: 'excel',
                    download: 'open'
                },
                {
                    extend: 'pdfHtml5',
                    download: 'open'
                },
                {
                    extend: 'print',
                    download: 'open'
                }
            ]
               
          } );
      } );
  </script>
</body>

</html>