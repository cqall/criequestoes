<?php if(!class_exists('Rain\Tpl')){exit;}?>      <!-- Rodapé -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2020 <a>criequestões.com</a>.</strong> All rights
        reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>



    <!-- jQuery -->
    <script src="../../res/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../res/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../res/admin/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../res/admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../res/admin/plugins/moment/moment.min.js"></script>
    <script src="../../res/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../res/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../res/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../res/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../res/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../res/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../res/admin/dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="../../res/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
      $(function () {
        // Summernote
        $('.textarea').summernote()
      })
    </script>


    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })

      })
    </script>

 <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
  </script>
  <script>
  var genericIntegrationProperties = {};
  genericIntegrationProperties.target = document.getElementById('htmlEditor');
  genericIntegrationProperties.toolbar = document.getElementById('toolbar');
 
  // We just added this line:
  genericIntegrationProperties.configurationService = '../../res/admin/res/integration/configurationjs.php';
 
  // GenericIntegration instance.
  var genericIntegrationInstance = new WirisPlugin.GenericIntegration(genericIntegrationProperties);
  genericIntegrationInstance.init();
  genericIntegrationInstance.listeners.fire('onTargetReady', {});
  </script>

</body>
</html>
