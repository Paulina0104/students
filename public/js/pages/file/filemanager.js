
$(function() {
    "use strict";
    MorrisArea();
});
function MorrisArea() {
    Morris.Area({
        element: 'area_chart',
        data: [ {
                period: '2018',
                Documents: 10,
                Media: 1,
               // Images: 23
            }, {
                period: '2019',
                Documents: 27,
                Media: 12,
              //  Images: 2
            }, {
                period: '2020',
                Documents: 17,
                Media: 9,
              //  Images: 26
            }, {
                period: '2021',
                Documents: 39,
                Media: 51,
               // Images: 9
            }, {
                period: '2022',
                Documents: 20,
                Media: 9,
               // Images: 21
            }

        ],
        lineColors: ['#2C3D87', '#5589D2'],
        xkey: 'period',
        ykeys: ['Documents', 'Media'],
        labels: ['Total Request', 'Total Company'],
        pointSize: 2,
        lineWidth: 1,
        resize: true,
        fillOpacity: 0.2,
        behaveLikeLine: true,
        gridLineColor: '#d6d6d6',
        hideHover: 'auto'
    });
}

// progress bars
$('.progress .progress-bar').progressbar({
    display_text: 'none'
});
