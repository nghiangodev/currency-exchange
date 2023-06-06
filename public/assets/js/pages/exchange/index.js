$(document).ready(function() {
    const baseUrl = $('meta[property="og:url"]').attr('content')

    $('.js-data-example-ajax').select2({
        ajax: {
            url: baseUrl + 'api/currency/list',
            dataType: 'json',
            data: function(params) {
                return {
                    q: params.term,
                    page: params.page,
                }
            },
            processResults: function(data) {
                return {
                    results: data,
                }
            },
        },
    })

    $('input').numeric()

    let selectCurrencyFrom = $('select[name="currency_from"]').val()
    let selectCurrencyTo = $('select[name="currency_to"]').val()

    $('select[name="currency_from"]').on('change', function() {
        if ($('select[name="currency_to"]').val() === $(this).val()) {
            var newOption = new Option(selectCurrencyFrom, selectCurrencyFrom, false, false)
            if (!$('select[name="currency_to"] option[value="' + selectCurrencyFrom + '"]').length) {
                $('select[name="currency_to"]').append(newOption)
            }
            $('select[name="currency_to"]').val(selectCurrencyFrom).trigger('change')
            selectCurrencyFrom = $(this).val()
        } else {
            selectCurrencyFrom = $(this).val()
        }
    })

    $('select[name="currency_to"]').on('change', function() {
        if (selectCurrencyFrom === $(this).val()) {
            var newOption = new Option(selectCurrencyTo, selectCurrencyTo, false, false)
            if (!$('select[name="currency_from"] option[value="' + selectCurrencyTo + '"]').length) {
                $('select[name="currency_from"]').append(newOption)
            }
            $('select[name="currency_from"]').val(selectCurrencyTo).trigger('change')
            selectCurrencyTo = $(this).val()
        } else {
            selectCurrencyTo = $(this).val()
        }
    })

    $('body').on('change',function(){
        let selectCurrencyFrom = $('select[name="currency_from"]').val()
        let selectCurrencyTo = $('select[name="currency_to"]').val()
        let inputCurrencyFrom = $('input[name="currency_from"]').val()
        let inputCurrencyTo = $('input[name="currency_to"]').val()

        if (selectCurrencyFrom && selectCurrencyTo && (inputCurrencyFrom || inputCurrencyTo)) {
            axios.post(baseUrl + 'api/currency/request', {
                currentfrom: $('select[name="currency_from"]').val(),
                currentTo: $('select[name="currency_to"]').val(),
                valueFrom: $('input[name="currency_from"]').val(),
                valueTom: $('input[name="currency_to"]').val(),
            }).then(function(response) {
                console.log(response)
            }).catch(function(error) {
                console.log(error)
            })
        }
    })
})
