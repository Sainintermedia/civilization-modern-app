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
                <table id="exampleFamillies" class="table-bordered table-striped table-sm table">
                    <thead>
                        <tr>
                            <th scope="col" class="" width="15">No</th>
                            <th scope="col">No Kartu keluarga</th>
                            <th scope="col">Nama Kepala Keluarga</th>
                            <th scope="col" class="text-center">pilih</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($famillycardmembers as $fcm)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fcm->famillycard->no_kk }}</td>
                                <td>{{ $fcm->nama }}</td>
                                <td>
                                    <button class="btnreg btn bg-gradient-info btn-sm rounded-0 text-sm"
                                        id="selectFamillies" data-no_kk="{!! $fcm->famillycard->no_kk !!}"
                                        data-nama="{!! $fcm->nama !!}" data-id_kk="{!! $fcm->famillycard->id !!}"
                                        data-kp="{!! $fcm->famillycard->kp !!}" data-rt="{!! $fcm->famillycard->rt !!}"
                                        data-rw="{!! $fcm->famillycard->rw !!}" data-kodepos="{!! $fcm->famillycard->kodepos !!}"
                                        data-provinsi="{!! $fcm->famillycard->provinces->name !!}" data-kabkot="{!! $fcm->famillycard->cities->name !!}"
                                        data-kecamatan="{!! $fcm->famillycard->districts->name !!}" data-desa="{!! $fcm->famillycard->villages->name !!}"
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
