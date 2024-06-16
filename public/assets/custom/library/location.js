(function ($) {
    "use strict";

    var HT = {};

    HT.getLocation = () => {
        $(document).on('change', '.location', function () {
            let _this = $(this);
            let option = {
                'data': {
                    'location_id': _this.val()
                },
                'target': _this.attr('data-target'),
            };
            HT.sendDataTagetLocation(option);
        })

        HT.sendDataTagetLocation = (option) => {
            $.ajax({
                url: '/ajax/location/getLocations',
                type: 'GET',
                data: option.data,
                dataType: 'json',
                success: function (res) {
                    $(option.target).html(res)
                },
                error: function (iqXHR, textStatus, ErrorThrown) {
                    console.log('Lỗi' + textStatus + ' ' + ErrorThrown);
                }
            })
        }
        // $(document).on('change', '#province_id', function () {
        //     let _this = $(this);
        //     let province_code = _this.val();
        //     console.log(province_code);
        //     $.ajax({
        //         url: '/ajax/location/getDistrict',
        //         type: 'GET',
        //         data: {
        //             'province_code': province_code
        //         },
        //         dataType: 'json',
        //         success: function (res) {
        //             $('#district_id').html(res)
        //         },
        //         error: function (iqXHR, textStatus, ErrorThrown) {
        //             console.log('Lỗi' + textStatus + ' ' + ErrorThrown);
        //         }
        //     })
        // })

        // $(document).on('change', '#district_id', function () {
        //     let _this = $(this);
        //     let district_code = _this.val();
        //     console.log(district_code);
        //     $.ajax({
        //         url: '/ajax/location/getWard',
        //         type: 'GET',
        //         data: {
        //             'district_code': district_code
        //         },
        //         dataType: 'json',
        //         success: function (res) {
        //             $('#ward_id').html(res)
        //         },
        //         error: function (iqXHR, textStatus, ErrorThrown) {
        //             console.log('Lỗi' + textStatus + ' ' + ErrorThrown);
        //         }
        //     })
        // })
    }

    // HT.loadcity = () => {
    //     if(province_id != '') {
    //         $('.province').val(province_id).trigger('change');
    //     }
    // }

    $(function () {
        HT.getLocation();
        // HT.loadcity();
    });

})(jQuery);
