let labels1 = ['YES','NO'];
let data1 = [69,31];
let colors1 = ['#49A9EA','#36CAAB']; 
let blue_color = '#49A9EA';

let mongraphique1 = document.getElementById("myChart").getContext('2d');
let chart1 = new Chart(mongraphique1, {
    type: 'doughnut',
    data: {
        labels: labels1,
        datasets: [{
          data: data1,
          backgroundColor: colors1,

        }]
      },
    options: {
        title: {
            text: "DOUGHNUTS CHARTS",
            display: true

        }
    }
});

 var ctx = document.getElementById("myBarChart");
    var myLineChart = new Chart(ctx,{
        type: 'bar',
        data:{
            labels: _ydata,
            datasets: [{
                label: "INSCRIPTIONS SELON L'HEURE",
                backgroundColor: blue_color,
                borderColor: 'blue',
                data: _xdata
                    }]
            },
            options:{
                scales:{
                    xAxes: [{
                        time:{
                            unit: 'hour'
                        },
                        gridLines:{
                            display: false
                        }
                    }]
                }
            }
    });

