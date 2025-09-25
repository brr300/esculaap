@props(['pocketcard'])
<div class="col-sm-6 col-lg-3">
    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
        <div class="fbox-icon">
            <a href="#"><i class="i-alt border-0 bi-cart"></i></a>
        </div>
        <div class="fbox-content">
            <h3>{{ $pocketcard->message }} - {{ $pocketcard->user ? $pocketcard->user->user : 'Anoniem' }}<span
                    class="subtitle"> {{ $pocketcard->created_at->locale('nl')->diffForHumans() }}</span></h3>
        </div>
    </div>
</div>
