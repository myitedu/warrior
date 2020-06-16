<!-- Modal -->
@php
$modal_content = $modal_content??'';
$hide_footer = $hide_footer??true;
$modal_title = $modal_title??'MYITEDU Message';
@endphp

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$modal_title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>{{$modal_content}}</h4>
                @include('includes.weather')
            </div>
            @if(isset($hide_foter) && !$hide_footer)
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            @endif
        </div>
    </div>
</div>
<style>
    .modal-header{
        background-color: #114b63;
        color: white;
    }
    .close{
        color:white;
    }
</style>
<!-- End of Modal -->
