/**
 * Created by christopher on 3/8/16.
 */

'use strict';

var beaconManager = (function(window, $ , undefined ){

    var $selectSucursal;

    function init()
    {
        if($('.evt_load_beacon').length)
        {
            $('.evt_load_beacon').on('change', changeSucursalEvent);
            loadBeacons($('.evt_load_beacon').find(':selected').val());
        }
    }

    function changeSucursalEvent()
    {
        //console.log($(this).val());
        loadBeacons($(this).val());
    }

    function loadBeacons(sucursalId)
    {
        //FILTER_BEACONS_URL
        var $select = $("select[id*='_beacon']");
        $select.empty();

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: FILTER_BEACONS_URL,
            data: {'sucursal_id' : sucursalId}
        }).done(function(response) {

            $select.empty().append(response.partial);
            Admin.setup_select2($select.parent('div'));
        });
    }

    function privateDemo()
    {

    }

    return {
        init: init
    };


})(window, jQuery);

$(document).on('ready', function(){
   beaconManager.init();
});