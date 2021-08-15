
	<!-- jquery
			============================================ -->
            <script src="{{ asset('adminasset/js/vendor/jquery-1.12.4.min.js')}}"></script>
	<!-- bootstrap JS
				============================================ -->
	<script src="{{ asset('adminasset/js/bootstrap.min.js')}}"></script>
	<!-- wow JS
				============================================ -->
	<script src="{{ asset('adminasset/js/wow.min.js')}}"></script>
	<!-- price-slider JS
				============================================ -->
	<script src="{{ asset('adminasset/js/jquery-price-slider.js')}}"></script>
	<!-- meanmenu JS
				============================================ -->
	<script src="{{ asset('adminasset/js/jquery.meanmenu.js')}}"></script>
	<!-- owl.carousel JS
				============================================ -->
	<script src="{{ asset('adminasset/js/owl.carousel.min.js')}}"></script>
	<!-- sticky JS
				============================================ -->
	<script src="{{ asset('adminasset/js/jquery.sticky.js')}}"></script>
	<!-- scrollUp JS
				============================================ -->
	<script src="{{ asset('adminasset/js/jquery.scrollUp.min.js')}}"></script>
	<!-- mCustomScrollbar JS
				============================================ -->
	<script src="{{ asset('adminasset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
	<!-- metisMenu JS
				============================================ -->
	<script src="{{ asset('adminasset/js/metisMenu/metisMenu.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/metisMenu/metisMenu-active.js')}}"></script>
	<!-- morrisjs JS
				============================================ -->
	<script src="{{ asset('adminasset/js/sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/sparkline/jquery.charts-sparkline.js')}}"></script>
	<script src="{{ asset('adminasset/js/sparkline/sparkline-active.js')}}"></script>
	<!-- calendar JS
				============================================ -->
	<script src="{{ asset('adminasset/js/calendar/moment.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/calendar/fullcalendar.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/calendar/fullcalendar-active.js')}}"></script>
	<!-- plugins JS
				============================================ -->
	<script src="{{ asset('adminasset/js/plugins.js')}}"></script>
	<!-- main JS
				============================================ -->
	<script src="{{ asset('adminasset/js/slick.min.js')}}"></script>

	<script src="{{ asset('adminasset/js/main.js')}}"></script>
	<!-- tawk chat JS
				============================================ -->
	<script src="{{ asset('adminasset/js/tawk-chat.js')}}"></script>





	<!-- data table JS
			============================================ -->
	<script src="{{ asset('adminasset/js/data-table/bootstrap-table.js')}}"></script>
	<script src="{{ asset('adminasset/js/data-table/tableExport.js')}}"></script>
	<script src="{{ asset('adminasset/js/data-table/data-table-active.js')}}"></script>
	<script src="{{ asset('adminasset/js/data-table/bootstrap-table-editable.js')}}"></script>
	<script src="{{ asset('adminasset/js/data-table/bootstrap-editable.js')}}"></script>
	<script src="{{ asset('adminasset/js/data-table/bootstrap-table-resizable.js')}}"></script>
	<script src="{{ asset('adminasset/js/data-table/colResizable-1.5.source.js')}}"></script>
	<script src="{{ asset('adminasset/js/data-table/bootstrap-table-export.js')}}"></script>
	<!--  editable JS
			============================================ -->
	<script src="{{ asset('adminasset/js/editable/jquery.mockjax.js')}}"></script>
	<script src="{{ asset('adminasset/js/editable/mock-active.js')}}"></script>
	<script src="{{ asset('adminasset/js/editable/select2.js')}}"></script>
	<script src="{{ asset('adminasset/js/editable/moment.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/editable/bootstrap-datetimepicker.js')}}"></script>
	<script src="{{ asset('adminasset/js/editable/bootstrap-editable.js')}}"></script>
	<script src="{{ asset('adminasset/js/editable/xediable-active.js')}}"></script>
	<!-- Chart JS
			============================================ -->
	<script src="{{ asset('adminasset/js/chart/jquery.peity.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/peity/peity-active.js')}}"></script>
	<!-- chosen JS
			============================================ -->
	<script src="{{ asset('adminasset/js/chosen/chosen.jquery.js')}}"></script>
	<script src="{{ asset('adminasset/js/chosen/chosen-active.js')}}"></script>
	<!-- select2 JS
			============================================ -->
	<script src="{{ asset('adminasset/js/select2/select2.full.min.js')}}"></script>
	<script src="{{ asset('adminasset/js/select2/select2-active.js')}}"></script>
    <script src="{{ asset('adminasset/js/sweetalert2.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- tab JS
			============================================ -->


    <script>
function test(){
    alert('hi')
}
        // delete alert
function destroy(thing, id) {

  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to delete "+thing+"!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
  	$('#delete_'+id).submit();
  }
})
}

    </script>
    <script src="{{ asset('adminasset/js/tab.js')}}"></script>
</body>

</html>
