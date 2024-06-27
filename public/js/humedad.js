const ctx = document.getElementById('humidityDaysChart').getContext('2d');
const humidityDaysChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Día 1', 'Día 2', 'Día 3', 'Día 4', 'Día 5', 'Día 6', 'Día 7'],
        datasets: [{
            label: 'Humedad (%)',
            data: [50, 45, 50, 60, 70, 71, 75],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
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
                max: 100,
                title: {
                    display: true,
                    text: 'Humedad (%)'
                }
            }
        }
    }
});


