
// Income Expense Chart Start
const yearexpenseincome = document.getElementById('yearexpenseincome');
var year = $('#year').val();
var parseyear = year.split(",");

var yearincome = $('#yearincome').val();
var parseincome = yearincome.split(",");


var yearexpense = $('#yearexpense').val();
var parseexpense = yearexpense.split(",");


const myChart = new Chart(yearexpenseincome, {
    type: 'bar',
    data: {
        labels: parseyear,
        datasets: [
            {
            label: '# of Income',
            
            data: parseincome,
            backgroundColor: ['rgba(48, 209, 72,0.3)'],
            borderColor: ['rgba(48, 209, 72)' ],
            borderWidth: 1
            },

            {
                label: '# of Expence',
                data: parseexpense,
                backgroundColor: ['rgba(250, 125, 140,0.5)' ],
                borderColor: [ 'rgba(250, 125, 140)'],
                borderWidth: 1
            }
        ]
    },
   
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Chart For Yearly Income & Expense'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


const dailyexpenseincome = document.getElementById('dailyexpenseincome');

var weekincome = $('#weekincome').val();
var parseincome = weekincome.split(",");


var weekexpense = $('#weekexpense').val();
var parseexpense = weekexpense.split(",");

const dayIncomeExpenceChart = new Chart(dailyexpenseincome, {
    type: 'line',
    data: {
        labels: [ 'Sunday', 'Monday', 'Tuesday', 'wednesday', 'Thursday','Friday','Saturday'],

        datasets: [
            {
            label: '# of Income',
            
            data: parseincome,
            backgroundColor: ['rgba(48, 209, 72,0.3)'],
            borderColor: ['rgba(48, 209, 72)' ],
            borderWidth: 1
            },

            {
                label: '# of Expence',
                data: parseexpense,
                backgroundColor: ['rgba(250, 125, 140,0.5)' ],
                borderColor: [ 'rgba(250, 125, 140)'],
                borderWidth: 1
            }
        ]
    },
   
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Chart For Daily Income & Expense'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});



const monthexpenseincome = document.getElementById('monthlyexpenseincome');

var monthincome = $('#monthincome').val();
var parseincome = monthincome.split(",");


var monthexpense = $('#monthexpense').val();
var parseexpense = monthexpense.split(",");


const monthIncomeExpenceChart = new Chart(monthexpenseincome, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June','July','August','September','October','November','December'],
        datasets: [
            {
            label: '# of Income',
            
            data: parseincome,
            backgroundColor: ['rgba(48, 209, 72,0.3)'],
            borderColor: ['rgba(48, 209, 72)' ],
            borderWidth: 1
            },

            {
                label: '# of Expence',
                data: parseexpense,
                backgroundColor: ['rgba(250, 125, 140,0.5)' ],
                borderColor: [ 'rgba(250, 125, 140)'],
                borderWidth: 1
            }
        ]
    },
   
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Chart For Monthly Income & Expense'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


// Income Expense Chart END


// PayType Chart Start


const paytype = document.getElementById('payType');

var paylable = $('#paylable').val();
var paymethodLable = paylable.split(",");

var paydata = $('#paydata').val();
var paymethodData = paydata.split(",");



const payTypeTotal = new Chart(paytype, {
    type: 'polarArea',
    data: {
        labels: paymethodLable,
        datasets: [{
            label: '# of Paymethods',
            data: paymethodData,
            backgroundColor: [
                
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
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


// PayType Chart End


//Agent Data

const agentTicketBooking = document.getElementById('agenttickebooking');

var agentlable = $('#agentlable').val();
var agentName = agentlable.split(",");

var agentdata = $('#agentamount').val();
var agentTotalData = agentdata.split(",");

const agentBookTicketChart = new Chart(agentTicketBooking, {
    type: 'bar',
    data: {
        labels: agentName,
        datasets: [
            {
            label: '# of Ticket Booking',
            
            data: agentTotalData,
            backgroundColor: ['rgba(54, 162, 235, 0.2)'],
            borderColor: ['rgb(54, 162, 235)' ],
            borderWidth: 1
            },

            
        ]
    },
   
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Chart For Agent Total Ticket Booking'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});




//Agent Data


// Ticketbook Chart Start

const monthticketbook = document.getElementById('tickebook');

var monthticket = $('#ticketbook').val();
var totalTicket = monthticket.split(",");




const monthticketbookChart = new Chart(monthticketbook, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June','July','August','September','October','November','December'],
        datasets: [
            {
            label: '# of Income',
            
            data: totalTicket,
            backgroundColor: ['rgb(255, 205, 86,0.2)'],
            borderColor: ['rgba(255, 210, 86)' ],
            borderWidth: 1
            },

          
        ]
    },
   
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Chart For Monthly Ticket Booking'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


// Ticketbook Chart End




