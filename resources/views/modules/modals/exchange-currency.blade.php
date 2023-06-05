<div class="modal fade" id="modal_exchange_currency" tabindex="-1" role="dialog" aria-labelledby="modal_exchange_currency" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Exchange Currency</h5>
                <button type="button" class="close btn-main" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('request_currency')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <select class="js-example-basic-single js-data-example-ajax" name="state"></select>
                    </div>
                    <div>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-main">@</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-main" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>

</div>

