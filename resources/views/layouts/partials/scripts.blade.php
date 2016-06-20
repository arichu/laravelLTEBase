<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Data Tables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
      <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'print');
        mywindow.document.write('<html><head><title>Hematologia</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        /*var css1 = '<link href="{{ asset("/css/bootstrap.css") }}" rel="stylesheet" type="text/css" />';
        mywindow.document.write(css1);
        css1 =  '<link href="{{ asset("/css/AdminLTE.css") }}" rel="stylesheet" type="text/css" />';
        mywindow.document.write(css1);
        css1 = '<link href="{{ asset("/css/skins/_all-skins.css") }}" rel="stylesheet" type="text/css" />';
        mywindow.document.write(css1);
        */
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
@stack('pagescripts')
