var ctx = document.getElementById('doughnut').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Admin', 'Technician', 'HR', 'IT', 'Sales', 'Others'],
        datasets: [{
            label: 'Employees',
            data: [15, 19, 1, 2, 5, 13],
            backgroundColor: [
               
                'rgba(255,0,0)',
                'rgba(255,128,0)',
                'rgba(255,255,0)',
                'rgba(0,204,0)',
                'rgba(0,0,255)',
                'rgba(192,192,192)'
            ],
            borderColor: [
                'rgba(255,0,0)',
                'rgba(0,153,76)',
                'rgba(255,255,0)',
                'rgba(0,204,0)',
                'rgba(0,0,255)',
                'rgba(192,192,192)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        responsive:true
    }
});