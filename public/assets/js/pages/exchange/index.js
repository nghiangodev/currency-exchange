$(document).ready(function() {
    const baseUrl = $('meta[property="og:url"]').attr('content')

    $('.js-data-example-ajax').select2({
        ajax: {
            url: baseUrl + '/api/list-currency',
            dataType: 'json',
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                return {
                    results: data.items
                };
            }
        },
    })
})
