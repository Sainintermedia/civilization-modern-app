<div class="list-group" id="list-tab" role="tablist">
    <a href="{!! route('siode.infodesa.pemerintahan-desa.index') !!}" class="list-group-item list-group-item-action {!! request()->is('siode/info-desa/pemerintahan-desa') ? 'active' : ''!!}"  >Buku Peraturan
        Desa</a>
    <a href="{!! route('siode.infodesa.buku-keputusan-desa.index') !!}"
    class="list-group-item list-group-item-action {!! request()->is('siode/info-desa/buku-keputusan-desa') ? 'active' : ''!!}"  >Buku Keputusan Desa</a>
    {{-- <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a> --}}
</div>