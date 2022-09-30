<script src="{!! URL::asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! URL::asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
<script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
<script src="{!! URL::asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>

<script src="{!! URL::asset('assets/admin/plugins/select2/js/select2.full.min.js') !!}"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
</script>
<script>
    $(function() {
        $("#exampleFamillies").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#selectFamillies', function() {
            var id_kk = $(this).data('id_kk');
            var nama_kk = $(this).data('nama_kk');
            var no_kk = $(this).data('no_kk');
            var kp = $(this).data('kp');
            var rt = $(this).data('rt');
            var rw = $(this).data('rw');
            var kodepos = $(this).data('kodepos');
            var desa = $(this).data('desa');
            var kecamatan = $(this).data('kecamatan');
            var kabkot = $(this).data('kabkot');
            var provinsi = $(this).data('provinsi');
            $('#id_kk').val(id_kk);
            $('#nama_kk').val(nama_kk);
            $('#no_kk').val(no_kk);
            $('#kp').val(kp);
            $('#rt').val(rt);
            $('#rw').val(rw);
            $('#kodepos').val(kodepos);
            $('#desa').val(desa);
            $('#kecamatan').val(kecamatan);
            $('#kabkot').val(kabkot);
            $('#provinsi').val(provinsi);
        })
    })
</script>
