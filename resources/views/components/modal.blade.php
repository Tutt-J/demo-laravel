@props(['method', 'title', 'buttonName', 'actionPath'])

<div class="modal" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="element-name"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <form id="#" action="{{ route($actionPath) }}" method="POST">
                    @method($method)
                    @csrf
                    <input type="hidden" class="idValue" name="id" value="">
                    <button type="sublit" class="btn btn-primary">{{ $buttonName }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
