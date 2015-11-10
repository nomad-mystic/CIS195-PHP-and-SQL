
<?php
/**
 * Created by Nomad_Mystic on 11/10/2015.
 */

require_once('constants.php');
require_once('functions.php');


?>


function init($test_JSON) {
    var ctx = document.getElementById("c").getContext("2d");

     var data = {
        labels: [
             '1980',
             '1981',
             '1982',
             '1983',
             '1984',
             '1985',
             '1986',
             '1987',
             '1988',
             '1989',
             '1990',
             '1991',
             '1992',
             '1993',
             '1994',
             '1995',
             '1996',
             '1997',
             '1998',
             '1999',
             '2000',
             '2001',
             '2002',
             '2003',
             '2004',
             '2005',
             '2006',
             '2007',
             '2008',
             '2009'
        ],
        datasets: [{
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: []
        }]
    };
     data.datasets[0].data = $test_JSON;
     console.log(data.datasets[0].data);

     var MyNewChart = new Chart(ctx).Line(data);
}

