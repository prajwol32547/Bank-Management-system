

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['baishak', 'jestha', 'ahar', 'shrawan', 'bhadau', 'ahoj', 'kartik', 'mangsir','poush', 'magh','falgun','chaitra'],
        datasets: [{
            label: 'Deposited on scale of thousands',
            data: [12, 19, 3, 5, 2, 3,25],
            backgroundColor: [
                'green'
            ],
            borderColor: [
                'black'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});



