$(function() {
    "use strict";

    // notification popup
    // toastr.options.closeButton = true;
    // toastr.options.positionClass = 'toast-bottom-right';
    // toastr.options.showDuration = 1000;
    // toastr['info']('Hello, welcome to Iconic, a unique admin Template.');



    //  Use by Device



    // Use by Audience
    $(document).ready(function(){
        var chart = c3.generate({
            bindto: '#Use-by-Audience', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', 55],
                    ['data2', 30],
                    ['data3', 20],
                ],
                type: 'donut', // default type of chart
                colors: {
                    'data1': '#2C3D87',
                    'data2': '#dc3545',
                    'data3': '#FFFF'
                },
                names: {
                    // name of each serie
                    'data1': 'Male',
                    'data2': 'Female',
                    'data3': 'Other',
                }
            },
            axis: {
            },
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });
    });

 


});
