import "./bootstrap";
import { Chart } from "chart.js/auto";

const ctx = document.getElementById("myChart").getContext("2d");
let chart;
let currentSlide = 0;
let slides = [
    {
        label: "Slide 1",
        data: [75, 25],
        backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(211, 211, 211, 0.2)",
        ],
        borderColor: ["rgba(255, 99, 132, 1)", "rgba(211, 211, 211, 1)"],
        borderWidth: 1,
    },
    {
        label: "Slide 2",
        data: [60, 40],
        backgroundColor: [
            "rgba(54, 162, 235, 0.2)",
            "rgba(211, 211, 211, 0.2)",
        ],
        borderColor: ["rgba(54, 162, 235, 1)", "rgba(211, 211, 211, 1)"],
        borderWidth: 1,
    },
    {
        label: "Slide 3",
        data: [85, 15],
        backgroundColor: [
            "rgba(255, 206, 86, 0.2)",
            "rgba(211, 211, 211, 0.2)",
        ],
        borderColor: ["rgba(255, 206, 86, 1)", "rgba(211, 211, 211, 1)"],
        borderWidth: 1,
    },
];

// Plugin to display percentage in the center of the doughnut chart
const percentagePlugin = {
    id: "percentagePlugin",
    afterDatasetsDraw: (chart) => {
        const { ctx, data } = chart;
        const { datasets } = data;
        const total = datasets[0].data.reduce((acc, value) => acc + value, 0);
        const percentage = Math.round((datasets[0].data[0] / total) * 100);

        ctx.save();
        ctx.font = "bold 20px Arial";
        ctx.fillStyle = "black";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        const centerX = chart.getDatasetMeta(0).data[0].x;
        const centerY = chart.getDatasetMeta(0).data[0].y;
        ctx.fillText(`${percentage}%`, centerX, centerY);
        ctx.restore();
    },
};

chart = new Chart(ctx, {
    type: "doughnut",
    data: {
        datasets: [slides[currentSlide]],
    },
    options: {
        plugins: {
            percentagePlugin: true,
        },
        responsive: true,
        maintainAspectRatio: true,
        aspectRatio: 1,

        // To ensure fixed size
        width: 200,
        height: 200,
    },
    plugins: [percentagePlugin],
});

const paginationBullets = document.querySelectorAll(".pagination-bullet");

paginationBullets.forEach((bullet, index) => {
    bullet.addEventListener("click", () => {
        currentSlide = index;
        updateChart();
        updatePagination();
    });
});

function updateChart() {
    chart.data.datasets = [slides[currentSlide]];
    chart.update();
}

function updatePagination() {
    paginationBullets.forEach((bullet, index) => {
        if (index === currentSlide) {
            bullet.classList.add("active");
        } else {
            bullet.classList.remove("active");
        }
    });
}

//

var ctxStacked = document.getElementById("stackedArea").getContext("2d");
var stackedChart1 = new Chart(ctxStacked, {
    type: "line",
    data: {
        labels: ["15 APRIL", "", "", "", "21 APRIL"],

        datasets: [
            {
                label: "Point 01",
                data: [0, 350, 275, 450, 20, 30, 45],
                backgroundColor: "rgba(20, 122, 214, 0.5)",
                borderColor: "rgba(20, 122, 214, 1)",
                borderWidth: 2,
                fill: true,
            },
            {
                label: "Point 02",
                data: [300, 100, 0],
                backgroundColor: "rgba(236, 102, 102, 0.1)",
                borderColor: "rgba(236, 102, 102, 1)",
                borderWidth: 2,
                fill: true,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                stacked: true,
            },
            x: {
                stacked: true,
            },
        },
        layout: {
            padding: {
                left: 20,
                right: 20,
                top: 20,
                bottom: 20,
            },
        },
        plugins: {
            legend: {
                position: "bottom",
            },
        },
    },
});

const ctxMultiLine = document.getElementById("multiLineChart").getContext("2d");

const data = {
    labels: ["M", "T", "W", "T", "F", "S", "S"],
    datasets: [
        {
            label: "Uploaded",
            data: [250, 468, 318, 270, 320, 200, 240, 190, 180, 210, 260, 284],
            backgroundColor: "rgba(236, 102, 102, 0.3)",
            borderColor: "rgba(236, 102, 102, 1.0)",
            fill: true,
            tension: 0.4,
        },
    ],
};

const options = {
    scales: {
        x: {
            grid: {
                display: false,
            },
        },
        y: {
            grid: {
                display: false,
            },
        },
    },
    plugins: {
        tooltip: {
            enabled: true,
            mode: "index",
            intersect: false,
            backgroundColor: "rgba(255, 255, 255, 1)",
            titleColor: "black",
            bodyColor: "#000",
            bodyFont: {
                family: "Nunito Sans",
                size: 14,
                weight: "bold",
            },
        },
        legend: {
            display: false,
        },
    },
    interaction: {
        mode: "index",
        intersect: false,
    },
};

const multiLineChart = new Chart(ctxMultiLine, {
    type: "line",
    data: data,
    options: options,
});
