function dynamicColors() {
var r = Math.floor(Math.random() * 255);
var g = Math.floor(Math.random() * 255);
var b = Math.floor(Math.random() * 255);
return "rgb(" + r + "," + g + "," + b + ")";
}
var color=[];
var options= {
  hover: {
    onHover: function(e,a) {
     /* $("#canvas1").css("cursor", e[0] ? "pointer" : "default");

       without jquery it can be like this:*/
        var el = document.getElementById("myChart1");
        el.style.cursor = a[0] ? "pointer" : "default";
        var el = document.getElementById("myChart2");
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
  onClick: function(evt, activePoint){
    var selectedIndex = activePoint[0]._index;
    var label = this.data.labels[selectedIndex];
    var value = this.data.datasets[0].data[selectedIndex];
    window.open("report.php?label="+label,"_blank");
  }
}
