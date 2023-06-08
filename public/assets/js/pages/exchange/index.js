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

    $('input[name="currency_from"],input[name="currency_to"]').numeric({
        allowPlus: false,
        allowMinus: false,
        allowThouSep: false,
        allowDecSep: true,
        allowLeadingSpaces: false,
    })

    $('input[name="currency_from"],input[name="currency_to"]').on('keyup', function() {
        if ($(this).val() <= 0) {
            $(this).val('')
        }
    })

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

    $('body').on('keyup', 'input[name="currency_from"]', function() {
        let selectCurrencyFrom = $('select[name="currency_from"]').val()
        let selectCurrencyTo = $('select[name="currency_to"]').val()
        let inputCurrencyFrom = $('input[name="currency_from"]').val()
        if (inputCurrencyFrom) {
            if (selectCurrencyFrom && selectCurrencyTo && inputCurrencyFrom) {
                axios.post(baseUrl + 'api/currency/request', {
                    currentfrom: $('select[name="currency_from"]').val(),
                    currentTo: $('select[name="currency_to"]').val(),
                    valueFrom: $('input[name="currency_from"]').val(),
                }).then(function(response) {
                    if (response['data']) {
                        let data = response['data']
                        $('input[name="currency_to"]').val(data.exchange)
                    }
                }).catch(function(error) {
                    console.log(error)
                })
            }
        }
    })

    $('body').on('keyup', 'input[name="currency_to"]', function() {
        let selectCurrencyFrom = $('select[name="currency_from"]').val()
        let selectCurrencyTo = $('select[name="currency_to"]').val()
        let inputCurrencyTo = $('input[name="currency_to"]').val()
        if (inputCurrencyTo) {
            if (selectCurrencyFrom && selectCurrencyTo && inputCurrencyTo) {
                axios.post(baseUrl + 'api/currency/request', {
                    currentfrom: $('select[name="currency_to"]').val(),
                    currentTo: $('select[name="currency_from"]').val(),
                    valueFrom: $('input[name="currency_to"]').val(),
                }).then(function(response) {
                    if (response['data']) {
                        let data = response['data']
                        $('input[name="currency_from"]').val(data.exchange)
                    }
                }).catch(function(error) {
                    console.log(error)
                })
            }
        }
    })
})
