import Chart from "chart.js/auto";

const ctxBar = document.getElementById("barChart").getContext("2d");
new Chart(ctxBar, {
    type: "bar",
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [
            {
                label: "# of Votes",
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(255, 206, 86, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                    "rgba(153, 102, 255, 0.2)",
                    "rgba(255, 159, 64, 0.2)",
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(255, 206, 86, 1)",
                    "rgba(75, 192, 192, 1)",
                    "rgba(153, 102, 255, 1)",
                    "rgba(255, 159, 64, 1)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});

const ctxLine = document.getElementById("lineChart").getContext("2d");
new Chart(ctxLine, {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "rgb(255, 99, 132)",
                borderColor: "rgb(255, 99, 132)",
                data: [0, 10, 5, 2, 20, 30, 45],
            },
        ],
    },
    options: {},
});

const ctxPie = document.getElementById("pieChart").getContext("2d");
new Chart(ctxPie, {
    type: "pie",
    data: {
        labels: ["Red", "Blue", "Yellow"],
        datasets: [
            {
                label: "My First Dataset",
                data: [300, 50, 100],
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(54, 162, 235)",
                    "rgb(255, 205, 86)",
                ],
                hoverOffset: 4,
            },
        ],
    },
});

const ctxDoughnut = document.getElementById("doughnutChart").getContext("2d");
new Chart(ctxDoughnut, {
    type: "doughnut",
    data: {
        labels: ["Red", "Blue", "Yellow"],
        datasets: [
            {
                label: "My First Dataset",
                data: [300, 50, 100],
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(54, 162, 235)",
                    "rgb(255, 205, 86)",
                ],
                hoverOffset: 4,
            },
        ],
    },
});

const ctxRadar = document.getElementById("radarChart").getContext("2d");
new Chart(ctxRadar, {
    type: "radar",
    data: {
        labels: [
            "Eating",
            "Drinking",
            "Sleeping",
            "Designing",
            "Coding",
            "Cycling",
            "Running",
        ],
        datasets: [
            {
                label: "My First Dataset",
                data: [65, 59, 90, 81, 56, 55, 40],
                fill: true,
                backgroundColor: "rgba(255, 99, 132, 0.2)",
                borderColor: "rgb(255, 99, 132)",
                pointBackgroundColor: "rgb(255, 99, 132)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgb(255, 99, 132)",
            },
            {
                label: "My Second Dataset",
                data: [28, 48, 40, 19, 96, 27, 100],
                fill: true,
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderColor: "rgb(54, 162, 235)",
                pointBackgroundColor: "rgb(54, 162, 235)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgb(54, 162, 235)",
            },
        ],
    },
    options: {
        elements: {
            line: {
                borderWidth: 3,
            },
        },
    },
});

const ctxPolarArea = document.getElementById("polarAreaChart").getContext("2d");
new Chart(ctxPolarArea, {
    type: "polarArea",
    data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Blue"],
        datasets: [
            {
                label: "My First Dataset",
                data: [11, 16, 7, 3, 14],
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(75, 192, 192)",
                    "rgb(255, 205, 86)",
                    "rgb(201, 203, 207)",
                    "rgb(54, 162, 235)",
                ],
            },
        ],
    },
});
