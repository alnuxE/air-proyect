
const ctx3 = document.getElementById('airQualityDaysChart').getContext('2d');
const airQualityDaysChart = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: ['Día 1', 'Día 2', 'Día 3', 'Día 4', 'Día 5', 'Día 6', 'Día 7'],
        datasets: [{
            label: 'Calidad del Aire (PPM)',
            data: [1200, 1150, 935, 840, 1250, 1100, 1200],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: true,
            tension: 0.1
        }]
    },
    options: {
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Días'
                }
            },
            y: {
                min: 0,
                max: 2000,
                title: {
                    display: true,
                    text: 'Calidad del Aire (PPM)'
                }
            }
        }
    }
});
