/*
 Template Name: Admiria - Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Directory init js
 */



$(document).ready(function() {
  var SparklineCharts = function() {

    $('#sparkline1').sparkline([20, 12, 18, 8, 30, 9, 9, 10, 22], {
      type: 'line',
      width: '100%',
      height: '120',
      chartRangeMax: 40,
      lineColor: '#3bc3e9',
      fillColor: 'rgba(59, 195, 233, 0.3)',
      resize: true,
      highlightLineColor: 'rgba(0,0,0,.1)',
      highlightSpotColor: 'rgba(0,0,0,.2)'
    });

    $('#sparkline2').sparkline([5,6,2,8,9,4,7,10,11,12,10,4,7,10], {
      type: 'line',
      width: '100%',
      height: '120',
      chartRangeMax: 40,
      lineColor: '#4ac18e',
      fillColor: 'rgba(74, 193, 142, 0.3)',
      resize: true,
      highlightLineColor: 'rgba(0,0,0,.1)',
      highlightSpotColor: 'rgba(0,0,0,.2)'
    });

    $('#sparkline3').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
      type: 'line',
      width: '100%',
      height: '120',
      chartRangeMax: 40,
      lineColor: '#ea553d',
      fillColor: 'rgba(234, 85, 61, 0.3)',
      resize: true,
      highlightLineColor: 'rgba(0,0,0,.1)',
      highlightSpotColor: 'rgba(0,0,0,.2)'
    });

    $('#sparkline4').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
      type: 'line',
      width: '100%',
      height: '120',
      chartRangeMax: 40,
      lineColor: '#6d60b0',
      fillColor: 'rgba(109, 96, 176, 0.3)',
      resize: true,
      highlightLineColor: 'rgba(0,0,0,.1)',
      highlightSpotColor: 'rgba(0,0,0,.2)'
    });

    $('#sparkline5').sparkline([0, 13, 10, 14, 15, 10, 18, 20, 0], {
      type: 'line',
      width: '100%',
      height: '120',
      chartRangeMax: 40,
      lineColor: '#fb8c00',
      fillColor: 'rgba(251, 140, 0, 0.3)',
      resize: true,
      highlightLineColor: 'rgba(0,0,0,.1)',
      highlightSpotColor: 'rgba(0,0,0,.2)'
    });

    $('#sparkline6').sparkline([5,6,2,8,9,4,7,10,11,12,10,4,7,10], {
      type: 'line',
      width: '100%',
      height: '120',
      chartRangeMax: 40,
      lineColor: '#90a4ae',
      fillColor: 'rgba(129, 152, 163, 0.3)',
      resize: true,
      highlightLineColor: 'rgba(0,0,0,.1)',
      highlightSpotColor: 'rgba(0,0,0,.2)'
    });

  }
  var sparkResize;

  $(window).resize(function(e) {
    clearTimeout(sparkResize);
    sparkResize = setTimeout(SparklineCharts, 500);
  });
  SparklineCharts();

});