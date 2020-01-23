var chart={
  type: 'pie',
  data: {
    labels: result.labels,
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",

      ],
      data: [result.data]
    }]
  },
  options:{
    hover: {
      onHover: function(e,a) {
       /* $("#canvas1").css("cursor", e[0] ? "pointer" : "default");

         without jquery it can be like this:*/
          var el = document.getElementById("myChart");
          el.style.cursor = a[0] ? "pointer" : "default";

      }
    },
    plugins:{
      datalabels:{
        labels: {
                    value: {
                        color: 'red',
                        font:{size: '20'}
                    }
                }
      }
    },
    onClick: function(evt){
      var activePoint = myChart.getElementsAtEvent(evt);
      var selectedIndex = activePoint[0]._index;
      var label = this.data.labels[selectedIndex];
      var value = this.data.datasets[0].data[selectedIndex];
      window.open("report.php?index="+label,"_blank");
    }
  }
}
