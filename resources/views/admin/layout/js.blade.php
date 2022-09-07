<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{-- <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script> --}}
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{-- <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script> --}}
<script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/pages/auth-login.js') }}"></script>
<!-- END: Page JS-->

<!-- Datatable JS-->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>


{{-- my custom --}}
<script src="{{ asset('custom/admin.js') }}"></script>

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

    $(document).ready(function(){
        @if (session('flash_message'))
            toastr['success']('{{ session('flash_message') }}', 'Success!',{
                closeButton: true,
                tapToDismiss: false,
            });
        @endif

        @if (session('error_message'))
            toastr['error']('{{ session('error_message') }}', 'Error!',{
                closeButton: true,
                tapToDismiss: false,
            });
        @endif
    })
</script>
