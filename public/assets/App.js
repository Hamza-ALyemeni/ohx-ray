$(document).ready(function () {
    $("#submitNotificationButton").click(function () {
        console.log($("#submitNotification .notification").val());
        if ($("#submitNotification .notification").val() != "")
            $("#submitNotification").submit();
    });
    $(".submit").click(function () {
        $(".ui.modal").modal("show");
    });
    $(".sendNotifications").click(function () {
        $(".ui.modal").modal("show");
    });
    $(".dropdown").dropdown();
    $(".ui.accordion").accordion();
    $(".ui.radio.checkbox").checkbox();
    const circle = $("#circle").circleProgress({
        value: 0.75,
        size: 150,
        fill: {
            gradient: ["rgba(58, 151, 194, 0.452)", "#028ac9"],
        },
    });
    circle.resizable().on("resizestop", function () {
        circle.circleProgress();
    });

    circle.on("circle-animation-progress", function (e, v) {
        var obj = $(this).data("circle-progress"),
            ctx = obj.ctx,
            s = obj.size,
            sv = (75 * v).toFixed(),
            fill = obj.arcFill;

        ctx.save();
        ctx.font = "bold " + s / 2.5 + "px sans-serif";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.fillStyle = fill;
        ctx.fillText(sv, s / 2, s / 2);
        ctx.restore();
    });
    $("#example1").progress({
        percent: 22,
    });
    $("#example2").progress({
        percent: 55,
    });
    $("#example3").progress({
        percent: 90,
    });
    $("#example4").progress({
        percent: 10,
    });
    $(".menu .item").tab();
    $(window).on("resize", function () {
        if ($(window).width() < 992) {
            $(".sidebar").addClass("sidebar-hidden");
            $(".content").addClass("content-full");
            $(".content").removeClass("content-shrink");
            $(".fa-bars").removeClass("hidden2");
            $(".sidebar-logo").addClass("hidden2");
            $(".mobile-view").addClass("hidden2");
            $(".fa-bars").click(function () {
                $(".mobile-view").toggleClass("hidden2");
            });
        } else {
            $(".sidebar").removeClass("sidebar-hidden");
            $(".sidebar").removeClass("sidebar-active");
            $(".content").removeClass("content-full");
            $(".content").addClass("content-shrink");
            $(".fa-bars").addClass("hidden2");
            $(".mobile-view").removeClass("hidden2");
        }
    });
    if ($(window).width() < 992) {
        $(".sidebar").addClass("sidebar-hidden");
        $(".content").addClass("content-full");
        $(".content").removeClass("content-shrink");
        $(".fa-bars").removeClass("hidden2");
        $(".sidebar-logo").addClass("hidden2");
        $(".mobile-view").addClass("hidden2");
        $(".fa-bars").click(function () {
            $(".mobile-view").toggleClass("hidden2");
        });
    } else {
        $(".sidebar").removeClass("sidebar-hidden");
        $(".sidebar").removeClass("sidebar-active");
        $(".content").removeClass("content-full");
        $(".content").addClass("content-shrink");
        $(".fa-bars").addClass("hidden2");
        $(".mobile-view").removeClass("hidden2");
    }
    $(".fa-bars").click(function () {
        $(".sidebar").toggleClass("sidebar-active");
        $(".sidebar").toggleClass("sidebar-hidden");
    });
    if ($(".repeater").length > 0) {
        $(".repeater").repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [
                {
                    // (Required)
                    // Specify the jQuery selector for this nested repeater
                    selector: ".inner-repeater",
                },
            ],
        });
    }
    if ($(".repeater2").length > 0) {
        $(".repeater2").repeater({});
        $(document).on("change", ".q_item", function () {
            var container = $(this)
                .parents(".inner-repeater")
                .find(".answer-Container");
            if ($(this).data("type") == "text") {
                $(container).hide();
            } else {
                $(container).show();
            }
        });
    }
});
if (document.querySelector("#companiesWidget")) {
    const ctx = document.querySelector("#companiesWidget").getContext("2d");
    new Chart(ctx, {
        type: "line",
        data: {
            datasets: [
                {
                    label: "data",
                    data: [5, 18, 14, 24, 16, 30],
                    pointBackgroundColor: "#028ac9",
                    backgroundColor: "rgba(58, 151, 194, 0.452)",
                },
            ],
            labels: ["january", "february", "march", "april", "may", "june"],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            aspectRatio: 3.2,
            tooltips: {
                intersect: false,
            },
            legend: {
                display: !1,
            },
            hover: {
                mode: "index",
            },
            scales: {
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: false,
                        },
                        scaleLabel: {
                            display: !0,
                        },
                        ticks: {
                            max: 30,
                            min: 0,
                        },
                    },
                ],
                yAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: true,
                            color: "#eee",
                        },
                        ticks: {
                            beginAtZero: false,
                            stepSize: 1000,
                        },
                    },
                ],
            },
            elements: {
                line: {
                    // tension: 0
                },
                point: {
                    radius: 0,
                    borderWidth: 1,
                },
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0,
                },
            },
        },
    });
}
if (document.querySelector("#employeesWidget")) {
    const ctx2 = document.querySelector("#employeesWidget").getContext("2d");
    new Chart(ctx2, {
        type: "line",
        data: {
            datasets: [
                {
                    label: "data",
                    data: [5, 18, 14, 24, 16, 30],
                    pointBackgroundColor: "#c48d0e",
                    backgroundColor: "rgba(196, 141, 14, 0.329)",
                },
            ],
            labels: ["january", "february", "march", "april", "may", "june"],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            aspectRatio: 3.2,
            tooltips: {
                intersect: false,
            },
            legend: {
                display: !1,
            },
            hover: {
                mode: "index",
            },
            scales: {
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: false,
                        },
                        scaleLabel: {
                            display: !0,
                        },
                        ticks: {
                            max: 30,
                            min: 0,
                        },
                    },
                ],
                yAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: true,
                            color: "#eee",
                        },
                        ticks: {
                            beginAtZero: false,
                            stepSize: 1000,
                        },
                    },
                ],
            },
            elements: {
                line: {
                    // tension: 0
                },
                point: {
                    radius: 0,
                    borderWidth: 1,
                },
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0,
                },
            },
        },
    });
}
if (document.querySelector("#surveysWidget")) {
    const ctx3 = document.querySelector("#surveysWidget").getContext("2d");
    new Chart(ctx3, {
        type: "line",
        data: {
            datasets: [
                {
                    label: "data",
                    data: [5, 18, 14, 24, 16, 30],
                    pointBackgroundColor: "#c4450e",
                    backgroundColor: "rgba(196, 69, 14, 0.329)",
                },
            ],
            labels: ["january", "february", "march", "april", "may", "june"],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            aspectRatio: 3.2,
            tooltips: {
                intersect: false,
            },
            legend: {
                display: !1,
            },
            hover: {
                mode: "index",
            },
            scales: {
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: false,
                        },
                        scaleLabel: {
                            display: !0,
                        },
                        ticks: {
                            max: 30,
                            min: 0,
                        },
                    },
                ],
                yAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: true,
                            color: "#eee",
                        },
                        ticks: {
                            beginAtZero: false,
                            stepSize: 1000,
                        },
                    },
                ],
            },
            elements: {
                line: {
                    // tension: 0
                },
                point: {
                    radius: 0,
                    borderWidth: 1,
                },
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0,
                },
            },
        },
    });
}
if (document.querySelector("#completedSurveysWidget")) {
    const ctx4 = document
        .querySelector("#completedSurveysWidget")
        .getContext("2d");
    new Chart(ctx4, {
        type: "line",
        data: {
            datasets: [
                {
                    label: "data",
                    data: [5, 18, 14, 24, 16, 30],
                    pointBackgroundColor: "#41a303",
                    backgroundColor: "rgba(75, 172, 75, 0.329)",
                },
            ],
            labels: ["january", "february", "march", "april", "may", "june"],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            aspectRatio: 3.2,
            tooltips: {
                intersect: false,
            },
            legend: {
                display: !1,
            },
            hover: {
                mode: "index",
            },
            scales: {
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: false,
                        },
                        scaleLabel: {
                            display: !0,
                        },
                        ticks: {
                            max: 30,
                            min: 0,
                        },
                    },
                ],
                yAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: true,
                            color: "#eee",
                        },
                        ticks: {
                            beginAtZero: false,
                            stepSize: 1000,
                        },
                    },
                ],
            },
            elements: {
                line: {
                    // tension: 0
                },
                point: {
                    radius: 0,
                    borderWidth: 1,
                },
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0,
                },
            },
        },
    });
}
if (document.querySelector("#surveyVisitChart")) {
    const chart = document.querySelector("#surveyVisitChart").getContext("2d");
    new Chart(chart, {
        type: "line",
        data: {
            labels: ["01", "06", "13", "17", "21", "26", "31"],
            datasets: [
                {
                    label: "This Month",
                    backgroundColor: "transparent",
                    borderColor: "#333",
                    borderWidth: 5,
                    data: [2000, 4000, 2000, 4550, 2750, 5000, 3760, 5870],
                },
                {
                    label: "Last Month",
                    borderColor: "red",
                    backgroundColor: "transparent",
                    borderWidth: 2,
                    borderDash: [10, 5],
                    data: [3000, 5000, 2750, 3870, 1750, 3520, 2000, 4000],
                },
            ],
        },
        options: {
            responsive: true,
            aspectRatio: 3.2,
            title: {
                display: !1,
            },
            tooltips: {
                intersect: false,
            },
            legend: {
                display: !1,
            },
            hover: {
                mode: "index",
            },
            scales: {
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: false,
                        },
                        scaleLabel: {
                            display: !0,
                        },
                        ticks: {
                            max: 30,
                            min: 0,
                        },
                    },
                ],
                yAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: true,
                            color: "#eee",
                        },
                        ticks: {
                            beginAtZero: false,
                            stepSize: 1000,
                            callback: function (value) {
                                const ranges = [
                                    {divider: 1e6, suffix: "M"},
                                    {divider: 1e3, suffix: "K"},
                                ];

                                function formatNumber(n) {
                                    for (let i = 0; i < ranges.length; i++) {
                                        if (n >= ranges[i].divider) {
                                            return (
                                                (n / ranges[i].divider).toString() + ranges[i].suffix
                                            );
                                        }
                                    }
                                    return n;
                                }

                                return formatNumber(value);
                            },
                        },
                    },
                ],
            },
            elements: {
                line: {
                    // tension: 0
                },
                point: {
                    radius: 0,
                    borderWidth: 1,
                },
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0,
                },
            },
        },
    });
}
if (document.querySelector("#employeesChart")) {
    const chartx = document.querySelector("#employeesChart").getContext("2d");

    new Chart(chartx, {
        type: "bar",
        data: {
            labels: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sept",
                "Oct",
                "Nov",
                "Dec",
            ],

            datasets: [
                {
                    label: "New Employee",
                    data: [180, 120, 240, 180, 90, 135, 120, 70, 45, 140, 159, 370],
                    backgroundColor: [
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                        "#6a1ccd",
                    ],
                    barPercentage: 0.6,
                    categoryPercentage: 0.3,
                },
                {
                    label: "Retained Employees",
                    data: [120, 190, 30, 57, 260, 320, 120, 80, 70, 136, 210, 200],
                    backgroundColor: [
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                        "#3d4465",
                    ],
                    barPercentage: 0.6,
                    categoryPercentage: 0.3,
                },
            ],
        },
        options: {
            responsive: true,
            aspectRatio: 3.2,
            legend: {
                display: false,
            },
            title: {
                display: false,
            },
            tooltips: {
                mode: "index",
            },
            scales: {
                xAxes: [
                    {
                        ticks: {
                            fontColor: "#c5c7de",
                        },
                    },
                ],
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: true,
                            fontColor: "#c5c7de",
                        },
                    },
                ],
            },
        },
    });
}
