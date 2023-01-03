/*=========================================================================================
    File Name: basic-pie.js
    Description: echarts basic pie chart
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 3.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Basic pie chart
// ------------------------------

$(window).on("load", function() {

    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: 'app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/chart/pie',
            'echarts/chart/funnel'
        ],


        // Charts setup
        function(ec) {
            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('basic-pie'));
            var myChart2 = ec.init(document.getElementById('basic-pie1'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Add title
                //                title: {
                //                    text: 'Browser popularity',
                //                    subtext: 'Open source information',
                //                    x: 'center'
                //                },

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: 'right',
                    data: ['January', 'Feburary', 'March', 'April', 'May', 'June']
                },

                // Add custom colors
                color: ['#FF2E17', '#EA6152', '#A31000', '#FF503D', '#EA6152', '#A31000'],

                // Display toolbox
                // toolbox: {
                //     show: false,
                //     orient: 'vertical',
                //     feature: {
                //         mark: {
                //             show: false,
                //             title: {
                //                 mark: 'Markline switch',
                //                 markUndo: 'Undo markline',
                //                 markClear: 'Clear markline'
                //             }
                //         },
                //         dataView: {
                //             show: true,
                //             readOnly: false,
                //             title: 'View data',
                //             lang: ['View chart data', 'Close', 'Update']
                //         },
                //         magicType: {
                //             show: true,
                //             title: {
                //                 pie: 'Switch to pies',
                //                 funnel: 'Switch to funnel',
                //             },
                //             type: ['pie', 'funnel'],
                //             option: {
                //                 funnel: {
                //                     x: '25%',
                //                     y: '20%',
                //                     width: '50%',
                //                     height: '70%',
                //                     funnelAlign: 'left',
                //                     max: 1548
                //                 }
                //             }
                //         },
                //         restore: {
                //             show: true,
                //             title: 'Restore'
                //         },
                //         saveAsImage: {
                //             show: true,
                //             title: 'Same as image',
                //             lang: ['Save']
                //         }
                //     }
                // },

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [{
                    name: 'Browsers',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '57.5%'],
                    data: [
                        { value: 335, name: 'January' },
                        { value: 100, name: 'Feburary' },
                        { value: 200, name: 'March' },
                        { value: 300, name: 'April' },
                        { value: 50, name: 'May' },
                        { value: 40, name: 'June' }
                    ]
                }]
            };

            // Apply options
            // ------------------------------

            myChart.setOption(chartOptions);
            myChart2.setOption(chartOptions);


            // Resize chart
            // ------------------------------

            $(function() {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
    );
});