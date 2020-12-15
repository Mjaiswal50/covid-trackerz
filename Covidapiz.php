<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mj-covidz</title>
    
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
  </script><script type="text/javascript">
  const settings = {
  	"async": true,
  	"crossDomain": true,
  	"url": "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats?country=India",
  	"method": "GET",
  	"headers": {
  		"x-rapidapi-key": "11f0f6d3dcmsh78e8fa0554cb54fp1e75acjsncfdc2c7810dc",
  		"x-rapidapi-host": "covid-19-coronavirus-statistics.p.rapidapi.com"
  	}
  };
  $.ajax(settings).done(function (response) {
    $i=1;
    $.each(response.data.covid19Stats,function(key,value){$('#recordz').append('<tr><td id="no">'+($i++)+'</td><td id="p">'+value.province+'</td><td id="d">'+value.deaths+'</td><td id="c">'+value.confirmed+'</td><td id="r">'+value.recovered+'</td></tr>');});
    
    console.log(response.data.covid19Stats);
      });

    </script>
    
    <style media="screen">
      .content-info {
    background: #f9f9f9;
    padding: 40px 0;
    background-size: cover !important;
    background-position: top center !important;
    background-repeat: no-repeat !important;
    position: relative;
    padding-bottom: 100px
}
table {
    width: 100%;
    background: #fff;
    border: 1px solid #dedede
}

table thead tr th {
    padding: 20px;
    border: 1px solid #dedede;
    color: #000
}

table.table-striped tbody tr:nth-of-type(odd) {
    background: #f9f9f9
}

table.result-point tr td.number {
    width: 100px;
    position: relative
}

.text-left {
    text-align: left !important
}

table tr td {
    padding: 10px 20px;
    border: 1px solid #dedede
}

table.result-point tr td .fa.fa-caret-up {
    color: green
}

table.result-point tr td .fa {
    font-size: 20px;
    position: absolute;
    right: 20px
}

table tr td {
    padding: 10px 40px;
    border: 1px solid #dedede
}

table tr td img {
    max-width: 32px;
    float: left;
    margin-right: 11px;
    margin-top: 1px;
    border: 1px solid #dedede
}



td#r{
  background-color: ;  transform:scale(1,1);
      transition: all 0.12s;
}
td#r:hover{
  background-color: rgba(0,255, 0, 0.6);
   color:white;   transform:scale(1.5,1.5);
   text-shadow: 0.5px 1px black;
}



td#d{
  background-color: ;
    transform:scale(1,1);  transform:scale(1,1);
      transition: all 0.12s;
}
td#d:hover{
  background-color: rgba(255,0, 0, 0.8);
    color:white;
    transform:scale(1.5,1.5);
}


td#c{
  background-color: ;
  transform:scale(1,1);
      transition: all 0.2s;
}
td#c:hover{
  background-color: rgba(255,255, 0, 0.8);
    transform:scale(1.5,1.5);
  color:white;
       text-shadow: 0.5px 1px black;    transform:scale(1.5,1.5);
}


td#no{
  background-color: ;
      transition: all 0.2s;
}
td#no:hover{
  background-color: rgba(0,0,255, 0.8);
        color:white;
}


td#p{
  background-color: ;
      transition: all 0.2s;transform:scale(1,1);
}
td#p:hover{
  background-color: rgba(128, 128, 128, 0.8); transform:scale(1.2,1.5);
      color:white;
}


 h1{
   text-shadow: 2px 3px 1px black;
   font-weight: 50;
   background-color: #F9F9F9;
   height:100%;
 }
 
 th{

   background-color:rgba(206, 169, 206,0.5); 
 }
 
 th:hover{
   background-color:rgba(206, 169, 206,0.5);
       color:white; 
   text-shadow:1px 2px black;
 }
    </style>
  </head>
  <body>
    
    <h1 style="text-align:center;color:rgb(234, 45, 99);font-size:55px; margin-bottom:-1px;"> <img src="https://cdn.iconscout.com/icon/free/png-256/coronavirus-2312023-1920136.png" alt="" height="75px">&nbsp; &nbsp; Covid 19 Track Records &nbsp;&nbsp;<img src="https://cdn.iconscout.com/icon/free/png-256/coronavirus-2312023-1920136.png" alt="" height="75px"></h1>

    <section class="content-info">
        <div class="container paddings-mini">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point"  style="box-shadow:0 0 3px 1px black;">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-center" style="font-size:23px;">No.</th>
                                <th class="text-center" style="font-size:23px;">Province</th>
                                <th class="text-center" style="font-size:23px;">Deaths</th>
                                <th class="text-center" style="font-size:23px;">Confirmed</th>
                                <th class="text-center" style="font-size:23px;">Recovered</th>
                          
                            </tr>
                          
                        </thead>
                        <tbody class="text-center" id="recordz">
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
  </body>
</html>
