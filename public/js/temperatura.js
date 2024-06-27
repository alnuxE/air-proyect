const ctx1 = document.getElementById('temperatureDaysChart').getContext('2d');
const temperatureDaysChart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Día 1', 'Día 2', 'Día 3', 'Día 4', 'Día 5', 'Día 6', 'Día 7'],
        datasets: [{
            label: 'Temperatura (°C)',
            data: [23, 24, 22, 23, 18, 18, 17],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
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
                max: 55,
                title: {
                    display: true,
                    text: 'Temperatura (°C)'
                }
            }
        }
    }
});
