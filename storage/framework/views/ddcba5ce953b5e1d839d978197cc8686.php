<script>
    (function(factory) {
        typeof define === 'function' && define.amd ? define(factory) :
            factory();
    })((function() {
        'use strict';

        // import * as echarts from 'echarts';
        const {
            merge
        } = window._;

        // form config.js
        const echartSetOption = (
            chart,
            userOptions,
            getDefaultOptions,
            responsiveOptions
        ) => {
            const {
                breakpoints,
                resize
            } = window.phoenix.utils;
            const handleResize = options => {
                Object.keys(options).forEach(item => {
                    if (window.innerWidth > breakpoints[item]) {
                        chart.setOption(options[item]);
                    }
                });
            };

            const themeController = document.body;
            // Merge user options with lodash
            chart.setOption(merge(getDefaultOptions(), userOptions));

            const navbarVerticalToggle = document.querySelector(
                '.navbar-vertical-toggle'
            );
            if (navbarVerticalToggle) {
                navbarVerticalToggle.addEventListener('navbar.vertical.toggle', () => {
                    chart.resize();
                    if (responsiveOptions) {
                        handleResize(responsiveOptions);
                    }
                });
            }

            resize(() => {
                chart.resize();
                if (responsiveOptions) {
                    handleResize(responsiveOptions);
                }
            });
            if (responsiveOptions) {
                handleResize(responsiveOptions);
            }

            themeController.addEventListener(
                'clickControl',
                ({
                    detail: {
                        control
                    }
                }) => {
                    if (control === 'phoenixTheme') {
                        chart.setOption(window._.merge(getDefaultOptions(), userOptions));
                    }
                }
            );
        };
        // -------------------end config.js--------------------

        const echartTabs = document.querySelectorAll('[data-tab-has-echarts]');
        if (echartTabs) {
            echartTabs.forEach(tab => {
                tab.addEventListener('shown.bs.tab', e => {
                    const el = e.target;
                    const {
                        hash
                    } = el;
                    const id = hash || el.dataset.bsTarget;
                    const content = document.getElementById(id.substring(1));
                    const chart = content?.querySelector('[data-echart-tab]');
                    if (chart) {
                        window.echarts.init(chart).resize();
                    }
                });
            });
        }

        const tooltipFormatter = (params, dateFormatter = 'MMM DD') => {
            let tooltipItem = ``;
            params.forEach(el => {
                tooltipItem += `<div class='ms-1'>
        <h6 class="text-body-tertiary"><span class="fas fa-circle me-1 fs-10" style="color:${
          el.borderColor ? el.borderColor : el.color
        }"></span>
          ${el.seriesName} : ${
      typeof el.value === 'object' ? el.value[1] : el.value
    }
        </h6>
      </div>`;
            });
            return `<div>
            <p class='mb-2 text-body-tertiary'>
              ${
                window.dayjs(params[0].axisValue).isValid()
                  ? window.dayjs(params[0].axisValue).format(dateFormatter)
                  : params[0].axisValue
              }
            </p>
            ${tooltipItem}
          </div>`;
        };

        const handleTooltipPosition = ([pos, , dom, , size]) => {
            // only for mobile device
            if (window.innerWidth <= 540) {
                const tooltipHeight = dom.offsetHeight;
                const obj = {
                    top: pos[1] - tooltipHeight - 20
                };
                obj[pos[0] < size.viewSize[0] / 2 ? 'left' : 'right'] = 5;
                return obj;
            }
            return null; // else default behaviour
        };

        const {
            echarts: echarts$2
        } = window;

        const completedTaskChartInit = () => {
            const {
                getColor,
                getData,
                getDates
            } = window.phoenix.utils;

            const $totalSalesChart = document.querySelector(
                '.echart-completed-task-chart'
            );

            const dates = getDates(
                new Date('5/1/2022'),
                new Date('5/30/2022'),
                1000 * 60 * 60 * 24
            );

            const currentMonthData = [
                50, 115, 180, 180, 180, 150, 120, 120, 120, 120, 120, 240, 240, 240, 240,
                270, 300, 330, 360, 390, 340, 290, 310, 330, 350, 320, 290, 330, 370, 350
            ];

            const prevMonthData = [
                130, 130, 130, 90, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 110, 170,
                230, 230, 230, 270, 310, 270, 230, 260, 290, 320, 280, 280, 280
            ];
            const tooltipFormatter = params => {
                const currentDate = window.dayjs(params[0].axisValue);
                const prevDate = window.dayjs(params[0].axisValue).subtract(1, 'month');

                const result = params.map((param, index) => ({
                    value: param.value,
                    date: index > 0 ? prevDate : currentDate,
                    color: param.color
                }));

                let tooltipItem = ``;
                result.forEach((el, index) => {
                    tooltipItem += `<h6 class="fs-9 text-body-tertiary ${
        index > 0 && 'mb-0'
      }"><span class="fas fa-circle me-2" style="color:${el.color}"></span>
      ${el.date.format('MMM DD')} : ${el.value}
    </h6>`;
                });
                return `<div class='ms-1'>
              ${tooltipItem}
            </div>`;
            };

            if ($totalSalesChart) {
                const userOptions = getData($totalSalesChart, 'echarts');
                const chart = window.echarts.init($totalSalesChart);

                const getDefaultOptions = () => ({
                    color: [getColor('primary'), getColor('info')],
                    tooltip: {
                        trigger: 'axis',
                        padding: 10,
                        backgroundColor: getColor('body-highlight-bg'),
                        borderColor: getColor('border-color'),
                        textStyle: {
                            color: getColor('light-text-emphasis')
                        },
                        borderWidth: 1,
                        transitionDuration: 0,
                        axisPointer: {
                            type: 'none'
                        },
                        formatter: tooltipFormatter
                    },
                    xAxis: [{
                            type: 'category',
                            data: dates,
                            axisLabel: {
                                formatter: value => window.dayjs(value).format('DD MMM'),
                                interval: 13,
                                showMinLabel: true,
                                showMaxLabel: false,
                                color: getColor('secondary-color'),
                                align: 'left',
                                fontFamily: 'Nunito Sans',
                                fontWeight: 600,
                                fontSize: 12.8
                            },
                            axisLine: {
                                show: true,
                                lineStyle: {
                                    color: getColor('secondary-bg')
                                }
                            },
                            axisTick: {
                                show: false
                            },
                            splitLine: {
                                show: true,
                                interval: 0,
                                lineStyle: {
                                    color: getColor('secondary-bg')
                                }
                            },
                            boundaryGap: false
                        },
                        {
                            type: 'category',
                            position: 'bottom',
                            data: dates,
                            axisLabel: {
                                formatter: value => window.dayjs(value).format('DD MMM'),
                                interval: 130,
                                showMaxLabel: true,
                                showMinLabel: false,
                                color: getColor('secondary-color'),
                                align: 'right',
                                fontFamily: 'Nunito Sans',
                                fontWeight: 600,
                                fontSize: 12.8
                            },
                            axisLine: {
                                show: false
                            },
                            axisTick: {
                                show: false
                            },
                            splitLine: {
                                show: false
                            },
                            boundaryGap: false
                        }
                    ],
                    yAxis: {
                        position: 'right',
                        axisPointer: {
                            type: 'none'
                        },
                        axisTick: 'none',
                        splitLine: {
                            show: false
                        },
                        axisLine: {
                            show: false
                        },
                        axisLabel: {
                            show: false
                        }
                    },
                    series: [{
                            name: 'd',
                            type: 'line',
                            // data: Array.from(Array(30).keys()).map(() =>
                            //   getRandomNumber(100, 300)
                            // ),
                            data: currentMonthData,
                            showSymbol: false,
                            symbol: 'circle'
                        },
                        {
                            name: 'e',
                            type: 'line',
                            // data: Array.from(Array(30).keys()).map(() =>
                            //   getRandomNumber(100, 300)
                            // ),
                            data: prevMonthData,
                            // symbol: 'none',
                            lineStyle: {
                                type: 'dashed',
                                width: 1,
                                color: getColor('info')
                            },
                            showSymbol: false,
                            symbol: 'circle'
                        }
                    ],
                    grid: {
                        right: 2,
                        left: 5,
                        bottom: '20px',
                        top: '2%',
                        containLabel: false
                    },
                    animation: false
                });

                echartSetOption(chart, userOptions, getDefaultOptions);
            }
        };

        const {
            echarts
        } = window;


                /* -------------------------------------------------------------------------- */
        /*                        Echarts budget Utilizatization                      */
        /* -------------------------------------------------------------------------- */

        const budgetUtilizationtInit = () => {
            const {
                getData,
                getColor
            } = window.phoenix.utils;
            const $chartEl = document.querySelector('.echarts-budget-utilization');
            // var percent = $(this).data('percent');
            const percent = getData($chartEl, 'percent');
            console.log('inside echarts-budget-utilization');
            console.log('percent: ' + percent);

            if ($chartEl) {
                const userOptions = getData($chartEl, 'options');
                const chart = echarts$2.init($chartEl);
                console.log('inside chartEl: ' + $chartEl);

                const getDefaultOptions = () => ({
                    tooltip: {
                        trigger: 'item',
                        padding: [7, 10],
                        backgroundColor: getColor('body-highlight-bg'),
                        borderColor: getColor('border-color'),
                        textStyle: {
                            color: getColor('light-text-emphasis')
                        },
                        borderWidth: 1,
                        position: (...params) => handleTooltipPosition(params),
                        transitionDuration: 0,
                        formatter: params => {
                            return `<strong>${params.seriesName}:</strong> ${params.value}%`;
                        },
                        extraCssText: 'z-index: 1000'
                    },
                    legend: {
                        show: false
                    },
                    series: [{
                        type: 'gauge',
                        center: ['50%', '60%'],
                        name: 'Utilized Budget',
                        startAngle: 180,
                        endAngle: 0,
                        min: 0,
                        max: 100,
                        splitNumber: 12,
                        itemStyle: {
                            color: getColor('primary')
                        },
                        progress: {
                            show: true,
                            roundCap: true,
                            width: 12,
                            itemStyle: {
                                shadowBlur: 0,
                                shadowColor: '#0000'
                            }
                        },
                        pointer: {
                            show: false
                        },
                        axisLine: {
                            roundCap: true,
                            lineStyle: {
                                width: 12,
                                color: [
                                    [1, getColor('primary-bg-subtle')]
                                ]
                            }
                        },
                        axisTick: {
                            show: false
                        },
                        splitLine: {
                            show: false
                        },
                        axisLabel: {
                            show: false
                        },
                        title: {
                            show: false
                        },
                        detail: {
                            show: false
                        },
                        data: [{
                            value: percent,
                            // name: 'raafat',
                        }, ]
                    }]
                });

                echartSetOption(chart, userOptions, getDefaultOptions);
            }
        };
        /* -------------------------------------------------------------------------- */
        /*                                Market Share                                */
        /* -------------------------------------------------------------------------- */

        const pieEdgeAlignChartInit = () => {
            const {
                getColor,
                getData,
                rgbaColor
            } = window.phoenix.utils;
            const $chartEl = document.querySelector(
                ".echart-pie-edge-align-chart-example"
            );

            const data = <?php echo json_encode($task_status_chart); ?>

            // const data = [{
            //         value: 850,
            //         name: "Starter",
            //         itemStyle: {
            //             color: rgbaColor(getColor("primary"), 0.5),
            //         },
            //     },
            //     {
            //         value: 750,
            //         name: "Starter Pro",
            //         itemStyle: {
            //             color: getColor("danger"),
            //         },
            //     },
            //     {
            //         value: 457,
            //         name: "Basic",
            //         itemStyle: {
            //             color: getColor("primary"),
            //         },
            //     },
            //     {
            //         value: 654,
            //         name: "Optimal",
            //         itemStyle: {
            //             color: getColor("secondary"),
            //         },
            //     },
            //     {
            //         value: 447,
            //         name: "Business",
            //         itemStyle: {
            //             color: getColor("warning"),
            //         },
            //     },
            //     {
            //         value: 682,
            //         name: "Classic addition",
            //         itemStyle: {
            //             color: rgbaColor(getColor("warning"), 0.8),
            //         },
            //     },
            //     {
            //         value: 471,
            //         name: "Premiumzzzz",
            //         itemStyle: {
            //             color: getColor("success"),
            //         },
            //     },
            //     {
            //         value: 524,
            //         name: "Platinum",
            //         itemStyle: {
            //             color: getColor("info"),
            //         },
            //     },
            //     {
            //         value: 200,
            //         name: "Platinum Pro",
            //         itemStyle: {
            //             color: rgbaColor(getColor("primary"), 0.5),
            //         },
            //     },
            // ];

            if ($chartEl) {
                const userOptions = getData($chartEl, "echarts");
                const chart = window.echarts.init($chartEl);
                const getDefaultOptions = () => ({
                    // title: [
                    //     {
                    //         text: "Pie Edge Align Chart",
                    //         left: "center",
                    //         textStyle: {
                    //             color: getColor("gray-600"),
                    //         },
                    //     },
                    //     {
                    //         subtext: 'alignTo: "edge"',
                    //         left: "50%",
                    //         top: "85%",
                    //         textAlign: "center",
                    //         subtextStyle: {
                    //             color: getColor("gray-700"),
                    //         },
                    //     },
                    // ],

                    tooltip: {
                        trigger: "item",
                        padding: [7, 10],
                        backgroundColor: getColor("gray-100"),
                        borderColor: getColor("gray-300"),
                        textStyle: {
                            color: getColor("dark")
                        },
                        borderWidth: 1,
                        transitionDuration: 0,
                        axisPointer: {
                            type: "none",
                        },
                        position(pos, ...size) {
                            if (window.innerWidth <= 540) {
                                const tooltipHeight = size[1].offsetHeight;
                                const obj = {
                                    top: pos[1] - tooltipHeight - 20
                                };
                                obj[
                                    pos[0] < size[3].viewSize[0] / 2 ?
                                    "left" :
                                    "right"
                                ] = 5;
                                return obj;
                            }
                            return null;
                        },
                    },

                    series: [{
                        type: "pie",
                        radius: window.innerWidth < 530 ? "45%" : "60%",
                        center: ["50%", "50%"],
                        data,
                        label: {
                            position: "outer",
                            alignTo: "edge",
                            margin: 20,
                            color: getColor("gray-700"),
                        },
                        left: "5%",
                        right: "5%",
                        top: 0,
                        bottom: 0,
                    }, ],
                });

                const responsiveOptions = {
                    xs: {
                        series: [{
                            radius: "45%",
                        }, ],
                    },
                    sm: {
                        series: [{
                            radius: "60%",
                        }, ],
                    },
                };

                echartSetOption(
                    chart,
                    userOptions,
                    getDefaultOptions,
                    responsiveOptions
                );
            }
        };

        /* -------------------------------------------------------------------------- */
        /*                                Market Share                                */
        /* -------------------------------------------------------------------------- */

        const topCouponsChartInit = () => {
            const {
                getData,
                getColor
            } = window.phoenix.utils;
            const ECHART_TOP_COUPONS = '.echart-top-coupons';
            const $echartTopCoupons = document.querySelector(ECHART_TOP_COUPONS);

            if ($echartTopCoupons) {
                const userOptions = getData($echartTopCoupons, 'options');
                const chart = echarts.init($echartTopCoupons);

                const getDefaultOptions = () => ({
                    color: [
                        getColor('primary'),
                        getColor('primary-lighter'),
                        getColor('info-dark')
                    ],

                    tooltip: {
                        trigger: 'item',
                        padding: [7, 10],
                        backgroundColor: getColor('body-highlight-bg'),
                        borderColor: getColor('border-color'),
                        textStyle: {
                            color: getColor('light-text-emphasis')
                        },
                        borderWidth: 1,
                        transitionDuration: 0,
                        position(pos, params, el, elRect, size) {
                            const obj = {
                                top: pos[1] - 35
                            }; // set tooltip position over 35px from pointer
                            if (window.innerWidth > 540) {
                                if (pos[0] <= size.viewSize[0] / 2) {
                                    obj.left = pos[0] + 20; // 'move in right';
                                } else {
                                    obj.left = pos[0] - size.contentSize[0] - 20;
                                }
                            } else {
                                obj[pos[0] < size.viewSize[0] / 2 ? 'left' : 'right'] = 0;
                            }
                            return obj;
                        },
                        formatter: params => {
                            return `<strong>${params.data.name}:</strong> ${params.percent}%`;
                        }
                    },
                    legend: {
                        show: false
                    },
                    series: [{
                        name: '72%',
                        type: 'pie',
                        radius: ['100%', '87%'],
                        avoidLabelOverlap: false,
                        emphasis: {
                            scale: false,
                            itemStyle: {
                                color: 'inherit'
                            }
                        },
                        itemStyle: {
                            borderWidth: 2,
                            borderColor: getColor('body-bg')
                        },
                        label: {
                            show: true,
                            position: 'center',
                            formatter: '{a}',
                            fontSize: 23,
                            color: getColor('light-text-emphasis')
                        },
                        data: [{
                                value: 7200000,
                                name: 'Percentage discount'
                            },
                            {
                                value: 1800000,
                                name: 'Fixed card discount'
                            },
                            {
                                value: 1000000,
                                name: 'Fixed product discount'
                            }
                        ]
                    }],
                    grid: {
                        containLabel: true
                    }
                });

                echartSetOption(chart, userOptions, getDefaultOptions);
            }
        };
        const {
            docReady
        } = window.phoenix.utils;


        docReady(completedTaskChartInit);
        docReady(topCouponsChartInit);
        docReady(pieEdgeAlignChartInit);
        docReady(budgetUtilizationtInit);
        
    }));
</script>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\general\settings\partials\charts-js.blade.php ENDPATH**/ ?>