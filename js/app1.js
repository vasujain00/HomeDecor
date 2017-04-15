$(function(){
	  $.ajax({
	    url: 'http://localhost/HomeDecor/topproducts.php',
	    type: 'GET',
	    success : function(data) {
	      chartData = data;
	      var chartProperties = {
	        "caption": "Most popular products",
	        "xAxisName": "Products",
	        "yAxisName": "Sale",
	        "rotatevalues": "3",
	        "theme": "zune"
	      };
	      apiChart = new FusionCharts({
	        type: 'column2d',
	        renderAt: 'chart-container',
	        width: '550',
	        height: '350',
	        dataFormat: 'json',
	        dataSource: {
	          "chart": chartProperties,
	          "data": chartData
	        }
	      });
	      apiChart.render();
	    }
	  });
	});