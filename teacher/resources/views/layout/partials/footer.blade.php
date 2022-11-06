<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 footer-copyright text-center">
          <p class="mb-0">2022 © Jahangirnagar University. | Designed & Developed by 
            <a href="https://www.linkedin.com/in/sazzad-bin-jafor/" target="_blank">Sazzad Bin Jafor</a>.</p>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
<!-- latest jquery-->
<script src="{{ asset('public/assets/js/jquery-3.5.1.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('public/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('public/assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('public/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('public/assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('public/assets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('public/assets/js/config.js') }}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('public/assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('public/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ asset('public/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ asset('public/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('public/assets/js/script.js') }}"></script>
<!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
<!-- login js-->
<!-- Plugin used-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- show message --}}
@if (session()->has('message'))
    <script>
        toastr.success('{{ session('message') }}')
    </script>
@endif

{{-- dynamic js --}}
@yield('js')

</body>

</html>