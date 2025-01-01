import { A as r } from "./apexcharts.common-7mov3gaG.js";
import { i as t } from "./world-DIGAk8hl.js";
import "./_commonjsHelpers-C4iS2aBk.js";

window.ApexCharts = r;

var o = {
    series: [
        // {
        //     name: "",
        //     type: "bar",
        //     data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67]
        // },
        {
            name: "Visa Request",
            type: "area",
            data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35]
        },
        {
            name: "Package Request",
            type: "area",
            data: [12, 16, 11, 22, 28, 25, 15, 29, 35, 45, 42, 48]
        }
    ],
    chart: {
        height: 313,
        type: "line",
        toolbar: {
            show: false
        }
    },
    stroke: {
        dashArray: [0, 0, 2],
        width: [0, 2, 2],
        curve: "smooth"
    },
    fill: {
        opacity: [1, 1, 1],
        type: ["solid", "gradient", "gradient"],
        gradient: {
            type: "vertical",
            inverseColors: false,
            opacityFrom: 0.5,
            opacityTo: 0,
            stops: [0, 90]
        }
    },
    markers: {
        size: [0, 0],
        strokeWidth: 2,
        hover: {
            size: 4
        }
    },
    xaxis: {
        categories: [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ],
        axisTicks: {
            show: false
        },
        axisBorder: {
            show: false
        }
    },
    yaxis: {
        min: 0,
        axisBorder: {
            show: false
        }
    },
    grid: {
        show: true,
        strokeDashArray: 3,
        xaxis: {
            lines: { show: false }
        },
        yaxis: {
            lines: { show: true }
        },
        padding: {
            top: 0,
            right: -2,
            bottom: 0,
            left: 10
        }
    },
    legend: {
        show: true,
        horizontalAlign: "center",
        offsetX: 0,
        offsetY: 5,
        markers: {
            width: 9,
            height: 9,
            radius: 6
        },
        itemMargin: {
            horizontal: 10,
            vertical: 0
        }
    },
    plotOptions: {
        bar: {
            columnWidth: "30%",
            barHeight: "70%",
            borderRadius: 3
        }
    },
    colors: [
        "#1a80f8", "#17c553", "#7942ed"
    ],
    tooltip: {
        shared: true,
        y: [
            {
                formatter: function (e) {
                    return typeof e < "u" ? e.toFixed(1) + "k" : e;
                }
            },
            {
                formatter: function (e) {
                    return typeof e < "u" ? e.toFixed(1) + "k" : e;
                }
            }
        ]
    }
};

var i = new r(document.querySelector("#dash-performance-chart"), o);
i.render();

class s {
    initWorldMapMarker() {
        new t({
            map: "world",
            selector: "#world-map-markers",
            zoomOnScroll: true,
            zoomButtons: false,
            markersSelectable: true,
            markers: [
                { name: "Canada", coords: [56.1304, -106.3468] },
                { name: "Brazil", coords: [-14.235, -51.9253] },
                { name: "Russia", coords: [61, 105] },
                { name: "China", coords: [35.8617, 104.1954] },
                { name: "United States", coords: [37.0902, -95.7129] }
            ],
            markerStyle: {
                initial: { fill: "#7f56da" },
                selected: { fill: "#1bb394" }
            },
            labels: {
                markers: {
                    render: (a) => a.name
                }
            },
            regionStyle: {
                initial: {
                    fill: "rgba(169,183,197, 0.3)",
                    fillOpacity: 1
                }
            }
        });
    }

    init() {
        this.initWorldMapMarker();
    }
}

document.addEventListener("DOMContentLoaded", function (e) {
    new s().init();
});