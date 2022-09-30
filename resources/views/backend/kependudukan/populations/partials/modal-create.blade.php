<div class="modal fade" id="modalFamillies" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content rounded-0 text-sm">
            <div class="modal-header">
                <h5 class="modal-title">Data Kepala Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="exampleFamillies" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="" width="15">No</th>
                            <th scope="col">No Kartu keluarga</th>
                            <th scope="col">Nama Kepala Keluarga</th>
                            <th scope="col" class="text-center">pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($famillies as $familly)
                            <tr class="">
                                <td class="text-center">{!! $loop->iteration !!}</td>
                                <td>{!! $familly->no_kk !!}</td>
                                <td>{!! $familly->nama_kk !!}</td>
                                <td scope="row" class="text-center" width="15"><button
                                        class="btnreg btn bg-gradient-info btn-sm text-sm rounded-0"
                                        id="selectFamillies" data-no_kk="{!! $familly->no_kk !!}"
                                        data-id_kk="{!! $familly->id !!}" data-nama_kk="{!! $familly->nama_kk !!}"
                                        data-kp="{!! $familly->kp !!}" data-rw="{!! $familly->rw !!}"
                                        data-rt="{!! $familly->rt !!}" data-kodepos="{!! $familly->kodepos !!}"
                                        data-kecamatan="{!! $familly->kecamatan !!}" data-desa="{!! $familly->desa !!}"
                                        data-kabkot="{!! $familly->kabkot !!}" data-provinsi="{!! $familly->provinsi !!}"
                                        data-dismiss="modal" </button>Select
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
