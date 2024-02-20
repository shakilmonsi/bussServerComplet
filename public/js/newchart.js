$(document).ready(function () {
    "use strict";
    $('.counter').counterUp({
      delay: 1,
      time: 500,
    });
  });



  //   Income Expense Chart Yearly

  var year = $('#year').val();
  var parseyear = year.split(",");
  
  var yearincome = $('#yearincome').val();
  var parseincome = yearincome.split(",");
  
  
  var yearexpense = $('#yearexpense').val();
  var parseexpense = yearexpense.split(",");

  var options = {
    // colors: ['#37a000'],
    chart: {
      height: 400,
      type: 'line',
      fontFamily: '"Nunito Sans", Helvetica, Arial, sans-serif',
      toolbar: {
        show: false,
      }
    },
    colors: ['#0ABFBC', '#C04848'],
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: ['25%'],
        endingShape: 'rounded'
      },
    },
    series: [{
      name: incomeLabel,
      type: 'column',
      data: parseincome
    }, {
      name: expenseLabel,
      type: 'line',
      data: parseexpense
    }],
    stroke: {
      width: [0, 3],
      curve: 'smooth',
      // colors: ['#C04848']
    },

    legend: {
      position: 'top',
      horizontalAlign: 'left'
    },
    tooltip: {
      // theme: 'light',
      style: {
        fontSize: '13px',
        fontWeight: 'bold',
      },
      y: {
        formatter: function (val) {
          return '$' + val
        }
      }
    },
   
    labels: parseyear,
    xaxis: {
      // type: 'datetime',
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      labels: {
        style: {
          fontWeight: 'bold',
        },
      },
    },
    grid: {
      // borderColor: "#eff2f7",
      strokeDashArray: 4,
    },
    yaxis: [{
      title: {
        // text: 'Income',
        style: {
          fontSize: '14px',
          fontWeight: 'bold',
        },
      },
      labels: {
        style: {
          fontWeight: 'bold',
        },
      },
    }, {
      opposite: true,
      title: {
        // text: 'Expence',
        style: {
          fontSize: '14px',
          fontWeight: 'bold',
        },
      },
      labels: {
        style: {
          fontWeight: 'bold',
        },
      },
    }]

  }
  var chart = new ApexCharts(
    document.querySelector("#apexMixedChart"),
    options
  );

  chart.render();



//   Income Expense Chart Yearly


//   Income Expense Chart Daily

var weekincome = $('#weekincome').val();
var parseincome = weekincome.split(",");


var weekexpense = $('#weekexpense').val();
var parseexpense = weekexpense.split(",");

console.log(parseincome)
console.log(parseexpense)

    var options = {
      chart: {
        type: "area",
        height: 400,
        // foreColor: "#999",
        stacked: true,
        fontFamily: '"Nunito Sans", Helvetica, Arial, sans-serif',
        dropShadow: {
          enabled: true,
          enabledSeries: [0],
          top: -2,
          left: 2,
          blur: 5,
          opacity: 0.06
        },
        toolbar: {
          show: false,
        }
      },
      colors: ['#0ABFBC', '#7474BF'],
      stroke: {
        curve: "smooth",
        width: 3
      },
      dataLabels: {
        enabled: false
      },
      series: [{
        name: incomeLabel,
        data: parseincome
      }, {
        name: expenseLabel,
        data: parseexpense
      }],
      markers: {
        size: 0,
        strokeColor: "#fff",
        strokeWidth: 3,
        strokeOpacity: 1,
        fillOpacity: 1,
        hover: {
          size: 6
        }
      },
      grid: {
        // borderColor: "#eff2f7",
        strokeDashArray: 4,
      },
      xaxis: {
        // type: "datetime",
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            fontWeight: 'bold',
          },
        },

        categories: [ saturday,sunday,monday,tuesday,wednesday,thursday,friday]
        
      },
      yaxis: {
        
        tooltip: {
          enabled: true
        },
        labels: {
          style: {
            fontWeight: 'bold',
          },
        },
      },
     
      tooltip: {
        x: {
          format: "dd MMM yyyy"
        },
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left'
      },
      fill: {
        type: "solid",
        fillOpacity: 0.7
      }
    };

    var chart = new ApexCharts(document.querySelector("#timelineChart"), options);

    chart.render();

    

//   Income Expense Chart Daily


//pay method chart
var paylable = $('#paylable').val();
var paymethodLable = paylable.split(",");

var paydata = $('#paydata').val();
var paymethodData = paydata.split(",").map(Number);;
    
    var options = {
      series: paymethodData,
      chart: {
        height: 400,
        // type: 'polarArea'
        type: 'pie'
      },
      colors: ['#0ABFBC', '#C04848', '#7474BF'],
      labels: paymethodLable,
      fill: {
        opacity: 1,
      },
      stroke: {
        width: 1,
        colors: undefined
      },
      yaxis: {
        show: false
      },
      // legend: {
      //   position: 'bottom'
      // },
      legend: {
        position: 'top',
        horizontalAlign: 'center'
      },
      plotOptions: {
        polarArea: {
          rings: {
            strokeWidth: 0
          },
          spokes: {
            strokeWidth: 0
          },
        }
      },
      theme: {
        monochrome: {
          // enabled: true,
          shadeTo: 'light',
          shadeIntensity: 0.6
        }
      }
    };

    var chart = new ApexCharts(document.querySelector("#monochromeChart"), options);
    chart.render();
  

//pay method chart


// monthly income expense

var monthincome = $('#monthincome').val();
var parseincome = monthincome.split(",");


var monthexpense = $('#monthexpense').val();
var parseexpense = monthexpense.split(",");


var options = {
      chart: {
        height: 400,
        type: "line",
        stacked: false,
        fontFamily: '"Nunito Sans", Helvetica, Arial, sans-serif',
        toolbar: {
          show: false
        },
      },
      plotOptions: {
        line: {
          style: {
            fontSize: "12px",
            fontWeight: "bold"
          },
          background: {
            enabled: true,
            foreColor: "#fff"
          }
        },
        bar: {
          columnWidth: ['50%'],
          dataLabels: {
            position: "bottom",
            offset: -10,
            style: {
              colors: ["#FFF"]
            },
            background: {
              enabled: true,
              foreColor: "#fff"
            }
          }
        }
      },
      stroke: {
        width: [0, 0, 3]
      },
      series: [
        {
          name: totalPaid,
          type: "column",
          data: parseincome
        },
        {
          name: totalExpece,
          type: "column",
          data: parseexpense
        },
        {
          name: difference,
          type: "line",
          data: []
        }
      ],
      // colors: ["#002060", "#0ABFBC"],
      // colors: ["#480048", "#C04848"],
      // colors: ["#348AC7", "#7474BF"],
      colors: ["#185a9d", "#43cea2"],

      xaxis: {
        categories: [january, february, march, april, may, june,july,august,september,october,november,december],
        axisBorder: {
          show: true,
          color: "#bec7e0"
        },
        axisTicks: {
          show: true,
          color: "#bec7e0"
        },
        labels: {
          style: {
            fontWeight: 'bold',
          },
        },
      },
      yaxis: [
        {
          seriesName: "Total Paid",
          show: false,
          axisTicks: {
            show: false
          },
          axisBorder: {
            show: false,
            color: "#20016c"
          },
          labels: {
            style: {
              fontWeight: 'bold',
            }
          },
          title: {
            text: "Total Paid"
          }
        },
        {
          seriesName: "Total Paid",
          axisTicks: {
            show: false
          },
          axisBorder: {
            show: false,
            color: "#77d0ba"
          },
          labels: {
            style: {
              fontWeight: 'bold',
            },
            offsetX: 10
          },
          // title: {
          //   text: "Total Incurred"
          // }
        },
        {
          // reversed: true,
          // opposite: true,
          // axisTicks: {
          //   show: false
          // },
          // axisBorder: {
          //   show: false,
          //   color: "#fa5c7c"
          // },
          // labels: {
          //   formatter(value) {
          //     return `${value.toFixed(2)}%`;
          //   },
          //   style: {
          //     color: "#fa5c7c"
          //   }
          // },
          // title: {
          //   text: "% Difference"
          // }
        }
      ],
      tooltip: {
        followCursor: true,
        shared: true
      },
      // grid: {
      //   borderColor: "#f1f3fa"
      // },
      grid: {
        // borderColor: "#eff2f7",
        strokeDashArray: 4,
      },
      legend: {
        position: "top",
        // offsetY: 6,
      },
      responsive: [
        {
          breakpoint: 600,
          options: {
            yaxis: {
              show: false
            },
            legend: {
              show: false
            }
          }
        }
      ]
    };

    var chart = new ApexCharts(document.querySelector("#lineChart"), options);

    chart.render();


// monthly income expense



// monthly ticket booking

var monthticket = $('#ticketbook').val();
var totalTicket = monthticket.split(",");

    var options = {
      chart: {
        height: 400,
        type: "area",
        stacked: true,
        dropShadow: {
          enabled: true,
          enabledSeries: [0],
          top: -2,
          left: 2,
          blur: 5,
          opacity: 0.06
        },
        toolbar: {
          show: false,
        },
        fontFamily: '"Nunito Sans", Helvetica, Arial, sans-serif',
      },
      colors: ['#185a9d'],
      dataLabels: {
        enabled: false
      },
      series: [
        {
          name: "Series 1",
          data: totalTicket
        }
      ],
      fill: {
        type: "gradient",
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.7,
          opacityTo: 0.9,
          stops: [0, 90, 100]
        }
      },
      grid: {
        // borderColor: "#eff2f7",
        strokeDashArray: 4,
      },
      xaxis: {
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            fontWeight: 'bold',
          },
        },
        categories: [january, february, march, april, may, june,july,august,september,october,november,december],
      },




    };

    var chart = new ApexCharts(document.querySelector("#gradientLineArea"), options);

    chart.render();



// monthly ticket booking



//agent ticket booking

var agentlable = $('#agentlable').val();
var agentName = agentlable.split(",");

var agentdata = $('#agentamount').val();
var agentTotalData = agentdata.split(",");


var options = {
  chart: {
    type: "bar",
    height: "400",
    toolbar: {
      show: false,
    },
  },
  colors: ['#185a9d'],
  // colors: ['#7474BF'],
  series: [
    {
      name: "sales",
      data: agentTotalData
    }
  ],
  plotOptions: {
    bar: {
      distributed: true
    }
  },
  grid: {
    // borderColor: "#eff2f7",
    strokeDashArray: 4,
  },
  
  xaxis: {
    categories: agentName,
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    labels: {
      style: {
        fontWeight: 'bold',
      },
    },
  },
  legend: {
    show: false
  }
};

var chart = new ApexCharts(document.querySelector("#barChart"), options);

chart.render();



//agent ticket booking