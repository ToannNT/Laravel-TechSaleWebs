// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Function to fetch data and create the chart
async function fetchBarChartData() {
  try {
    const response = await fetch('/admin/bar-data');
    const data = await response.json();
    createBarChart(data);
  } catch (error) {
    console.error('Error fetching bar chart data:', error);
  }
}

// Function to create the Bar Chart
function createBarChart(data) {
  var ctx = document.getElementById("myBarChart");
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: data.labels.map(month => `Month ${month}`),
      datasets: [{
        label: "Revenue",
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: data.revenue,
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'month'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 6
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: Math.max(...data.revenue) + 1000,
            maxTicksLimit: 5,
            callback: function (value, index, values) {
              return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value);
            }
          },
          gridLines: {
            display: true
          }
        }],
      },
      legend: {
        display: false
      },
      tooltips: {
        callbacks: {
          label: function (tooltipItem, chart) {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(tooltipItem.yLabel);
          }
        }
      }
    }
  });
}

// Fetch the data and create the chart
fetchBarChartData();
