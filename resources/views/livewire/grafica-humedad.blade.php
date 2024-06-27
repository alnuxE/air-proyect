<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gráfico de Humedad vs. Temperatura</title>
        <link href="dist/output.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100 flex items-center justify-center h-screen">

        <div class="bg-white p-8 rounded-lg shadow-lg w-2/3">
            <h2 class="text-2xl font-bold mb-4">Humedad vs. Temperatura</h2>
            <canvas id="humidityTemperatureChart" class="w-full"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Datos de muestra
            const dataPoints = [{
                    x: 22,
                    y: 65
                },
                {
                    x: 25,
                    y: 70
                },
                {
                    x: 27,
                    y: 75
                },
                {
                    x: 30,
                    y: 80
                },
                {
                    x: 32,
                    y: 85
                },
                {
                    x: 35,
                    y: 90
                }
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

                return {
                    slope,
                    intercept
                };
            };

            const {
                slope,
                intercept
            } = linearRegression(dataPoints);

            // Crear puntos para la línea de tendencia
            const trendLine = dataPoints.map(point => ({
                x: point.x,
                y: slope * point.x + intercept
            }));

            const ctx = document.getElementById('humidityTemperatureChart').getContext('2d');
            const humidityTemperatureChart = new Chart(ctx, {
                type: 'scatter',
                data: {
                    datasets: [{
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
        </script>
    </body>

    </html>

</div>
