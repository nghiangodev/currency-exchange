<div class="modal fade" id="modal_exchange_currency" role="dialog" aria-labelledby="modal_exchange_currency" aria-hidden="true">
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
                    <div class="vLqKYe egcvbb q0WxUd" data-exchange-rate="103.1873536" data-mid="/m/021x2r" data-name="Đô la Brunei">
                        <input class="lWzCpb ZEB7Fb" name="currency_from" value="" type="text" placeholder="Enter input the currency">
                        <div class="xNzW0d">
                            <div class="aURkK"></div>
                            <select class="js-example-basic-single js-data-example-ajax" name="currency_from">
                                <option value="VND" selected="selected">VND</option>
                            </select>
                        </div>
                    </div>
                    <div class="vLqKYe egcvbb q0WxUd" data-exchange-rate="103.1873536" data-mid="/m/021x2r" data-name="Đô la Brunei">
                      <span class="text-main">You can only enter numbers from 1 to 9 and decimal like 3.14</span>
                    </div>
                    <div class="vLqKYe egcvbb q0WxUd" data-exchange-rate="103.1873536" data-mid="/m/021x2r" data-name="Đô la Brunei">
                        <input class="lWzCpb ZEB7Fb" name="currency_to" value="" type="text" placeholder="Enter input the currency">
                        <div class="xNzW0d">
                            <div class="aURkK"></div>
                            <select class="js-example-basic-single js-data-example-ajax" name="currency_to">
                                <option value="ADA" selected="selected">ADA</option>
                            </select>
                        </div>
                    </div>
                    <div class="vLqKYe egcvbb q0WxUd" data-exchange-rate="103.1873536" data-mid="/m/021x2r" data-name="Đô la Brunei">
                        <span class="text-main">You can only enter numbers from 1 to 9 and decimal like 3.14</span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-main" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

