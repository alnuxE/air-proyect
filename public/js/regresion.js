// Datos de muestra
const dataPoints = [
    { x: 50, y: 23 },
    { x: 45, y: 24 },
    { x: 50, y: 22 },
    { x: 60, y: 23 },
    { x: 70, y: 18 },
    { x: 71, y: 17 }
];

// Calcular la línea de regresión
const linearRegression = (data) => {
    const n = data.length;
    const sumX = data.reduce((acc, point) => acc + point.x, 0);
    const sumY = data.reduce((acc, point) => acc + point.y, 0);
    const sumXY = data.reduce((acc, point) => acc + point.x * point.y, 0);
    const sumXX = data.reduce((acc, point) => acc + point.x * point.x, 0);

    const slope = (n * sumXY - sumX * sumY) / (n * sumXX - sumX * sumX);
    const intercept = (sumY - slope * sumX) / n;

    return { slope, intercept };
};

const { slope, intercept } = linearRegression(dataPoints);

// Crear puntos para la línea de tendencia
const trendLine = dataPoints.map(point => ({
    x: point.x,
    y: slope * point.x + intercept
}));

const ctx4 = document.getElementById('multiLineChart').getContext('2d');
const humidityTemperatureChart = new Chart(ctx4, {
    type: 'scatter',
    data: {
        datasets: [
            {
                label: 'Humedad vs. Temperatura',
                data: dataPoints,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'Línea de tendencia',
                data: trendLine,
                type: 'line',
                fill: false,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                pointRadius: 0
            }
        ]
    },
    options: {
        scales: {
            x: {
                type: 'linear',
                position: 'bottom',
                title: {
                    display: true,
                    text: 'Temperatura (°C)'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Humedad (%)'
                }
            }
        }
    }
});
