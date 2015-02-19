

<html>
	<head>
		<title>The City Watch</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<script type="text/javascript" src ="jquery.js"></script>
		<script type="text/javascript" src ="jspdf.min.js"></script>
		<link href="http://static.scripting.com/github/bootstrap2/css/bootstrap.css" rel="stylesheet">
		<link href="http://static.scripting.com/github/bootstrap2/css/prettify.css" rel="stylesheet">
		<script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/prettify.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-alert.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-dropdown.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-scrollspy.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-tab.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-tooltip.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-popover.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-button.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-collapse.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-carousel.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-typeahead.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/application.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfaExFhABnh7I3-vTHJjA4TWqtYnMccKE&amp;sensor=false" type="text/javascript">
		<script src="http://static.opml.org/scripts.js"></script>
		<link href="http://static.opml.org/styles.css" rel="stylesheet">

		<style>
			.divTabDemo {
				width: 600px;
				margin-left: auto;
				margin-right: auto;
				margin-top: 50px;
				}
			.divTabDemo h1 {
				margin-bottom: 25px;
				}
			.divTabDemo p {
				font-family: Georgia;
				font-size: 16px;
				line-height: 160%;
				}
			.divTabDemo li {
				font-family: Arial;
				font-size: 15px;
				font-weight: bold;
				}
				#container123
				{
					background-color: #FFFFFF;
					padding-left: 10px;
					padding-right:10px;
					padding-top: 10px;
					color : #384c80;
					width:1200px;
					margin-left:-300px;
				}
			</style>
			
			<script>
			function get_report()
			{
				$.post( "new_report.php", function( data ) {
				 $( "#entries" ).append(' <tr><td>Id</td><td>Type</td><td>Image</td><td>Description</td><td>Place</td><td>Posted On</td><td>Status</td><td></td>');
				$( "#entries" ).append( data );
			       	 });
			}
			function gen_report()
			{
				$.post( "report_gen.php", function( data ) {
				 $("#letter").append(data);
				});
			}
			function genreport(clicked_id)
			{
				var obj = {};
				obj['id'] = clicked_id;
				var nj = JSON.stringify(obj);
				$.post( "letter.php",{"mydata":nj}, function( data ) {
				
				// $("#letter").append(data);
				  
				});
				window.open('letter_save.php?id='+clicked_id);
			}
			function gen_table_pdf()
			{
				var doc = new jsPDF();
			       var specialElementHandlers = {
				'#editor': function (element, renderer) {
				    return true;
				}
			    };
				doc.fromHTML(document.getElementById('t1').innerHTML, 15, 15, {
				    'width': 170,
					'elementHandlers': specialElementHandlers
				     });
				     doc.save('report_table.pdf');
			 }
	</script>
	
	
	<script>
function sort_ob(Arrayofobject)
{
    Arrayofobject.sort(function(a,b) {
    return a.val - b.val;
    });
    return Arrayofobject;
}
function sort_by_zone(Arrayofobject)
{
    Arrayofobject.sort(function(a,b) {
    return a.zone - b.zone;
    });
    return Arrayofobject;
}
</script>
<script type="text/javascript">
    var map;
    var boundaryPolygon=new Array();
    var zones=new Array();
    zones[0]="IIT Kanpur";
    zones[1]="Nankari";
    zones[2]="Panki";
    zones[3]="Kalyanpur";
    zones[4]="Nawabganj";
    zones[5]="Rawatpur,Sharda Nagar, Kakadev , Pandu Nagar, Lajpat Nagar , Shastri Nagar, Sarvodaya Nagar";
    zones[6]="Azad Nagar, Sanjay Nagar, Ratan Lal Nagar";
    zones[7]="Govind Nagar,Anwar Ganj, Saket Nagar";
    zones[8]="Kidwai Nagar, Shyam Nagar, Ramadevi, Krishna Nagar";
    zones[9]="Yashoda Nagar";
    zones[10]="Old Kanpur";
    zones[11]="Harsh Nagar, JawaharNagar, Swaroop Nagar";
    zones[12]="Colonel Ganj, Mool Ganj ,Civil Lines";
    zones[13]="Kanpur Cantoment";
    zones[14]="Chakeri";
    
    var category = new Array();
    category[0] = 'Damaged Roads';
    category[1] = 'Garbage dumps';
    category[2] = 'Water logging';
    category[3] = 'Sewage problems';
    category[4] = 'Others';
    
    
   	var type1 = [8, 6, 3, 2, 4, 2, 6, 3, 2, 3, 6, 4, 1, 3,10];
	var type2 = [8, 6, 3, 2, 4, 2, 6, 3, 2, 3, 6, 4, 1, 3,10];
	var type3 = [8, 6, 3, 2, 4, 2, 6, 3, 2, 3, 6, 4, 1, 3,10];
	var type4 = [8, 6, 3, 2, 4, 2, 6, 3, 2, 3, 6, 4, 1, 3,10];
	var type5 = [8, 6, 3, 2, 4, 2, 6, 3, 2, 3, 6, 4, 1, 3,10];
	
	var type_array = new Array();
	type_array.push(type1);
	type_array.push(type2);
	type_array.push(type3);
	type_array.push(type4);
	type_array.push(type5);
	//alert(type_array[0][0]);
    	  var cumulative = [8, 6, 3, 2, 4, 2, 6, 3, 2, 3, 6, 4, 1, 3,10];
    
    var info_windows = new Array();
    var infoWindow;
    
    
    function hello()
    {
    initialize();
    drawPolygon();
    }
    
    function initialize() {
	    google.maps.Polygon.prototype.Contains = function (point) {
            // ray casting alogrithm http://rosettacode.org/wiki/Ray-casting_algorithm  http://jsfiddle.net/sid17/hLW3E/
            var crossings = 0,
            path = this.getPath();

            // for each edge
            for (var i = 0; i < path.getLength(); i++) {
                var a = path.getAt(i),
                j = i + 1;
                if (j >= path.getLength()) {
                    j = 0;
                }
                var b = path.getAt(j);
                if (rayCrossesSegment(point, a, b)) {
                    crossings++;
                }
            }

            // odd number of crossings?
            return (crossings % 2 == 1);

            function rayCrossesSegment(point, a, b) {
                var px = point.lng(),
                py = point.lat(),
                ax = a.lng(),
                ay = a.lat(),
                bx = b.lng(),
                by = b.lat();
                if (ay > by) {
                    ax = b.lng();
                    ay = b.lat();
                    bx = a.lng();
                    by = a.lat();
                }
                if (py == ay || py == by) py += 0.00000001;
                if ((py > by || py < ay) || (px > Math.max(ax, bx))) return false;
                if (px < Math.min(ax, bx)) return true;

                var red = (ax != bx) ? ((by - ay) / (bx - ax)) : Infinity;
                var blue = (ax != px) ? ((py - ay) / (px - ax)) : Infinity;
                return (blue >= red);
            }
        };


        var mapProp = {
            center: new google.maps.LatLng(26.456240059259713, 80.33213173470847),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        infoWindow = new google.maps.InfoWindow();

     
    }
    
    function drawPolygon() 
    {
    
        initialize();
        google.maps.event.trigger(map, 'resize');
     	map.setZoom(map.getZoom());
        var s;
        var boundary=new Array();
         
         
         boundary[0]='26.520042503795555 80.23950576782227,26.51927450691755 80.22714614868164,26.51420559869417 80.22954940795898,26.513283954978828 80.22079467773438,26.511133424214552 80.22869110107422,26.508675625466086 80.22697448730469,26.508368396924894 80.22560119628906,26.503452628523803 80.22542953491211,26.503299007372192 80.23126602172852,26.500380166468254 80.23195266723633,26.51082620224698 80.2467155456543';  //iit kanpur 

boundary[1]='26.51297673876348 80.22045135498047,26.516509675623976 80.21306991577148,26.518506504902675 80.21444320678711,26.523575223268086 80.2086067199707,26.52772219002311 80.21444320678711,26.528336542726354 80.22045135498047,26.52511115434938 80.22405624389648,26.519120906925508 80.22697448730469,26.51374477776101 80.22972106933594';
// nankari
boundary[2]='26.493005922377197 80.24757385253906,26.486245783028433 80.24723052978516,26.480714464293104 80.25066375732422,26.474875561466824 80.24843215942383,26.470265691997646 80.24139404296875,26.469651028780255 80.2577018737793,26.464887277524074 80.25598526000977,26.459508611702415 80.24620056152344,26.4587402103546 80.21976470947266,26.473031635843395 80.2195930480957,26.47472190212698 80.22302627563477,26.47994620453905 80.22457122802734,26.484094746245084 80.22113800048828,26.488550420644028 80.22954940795898,26.483941099220882 80.23126602172852,26.48132906840154 80.23143768310547,26.486860357575928 80.23675918579102';
//panki
boundary[3]='26.499919290074363 80.23195266723633,26.488550420644028 80.22954940795898,26.486399426973275 80.2305793762207,26.481021766757866 80.23143768310547,26.48716764361786 80.23710250854492,26.490086820057517 80.24242401123047,26.493466826493897 80.24791717529297,26.488396779573467 80.25684356689453,26.485938494522923 80.2635383605957,26.49546405631099 80.27057647705078,26.507446706371407 80.27435302734375,26.512515912899673 80.26250839233398,26.51097981333346 80.24654388427734';
//kalyanpur

boundary[4]='26.507293090560225 80.27486801147461,26.509904531413927 80.28791427612305,26.5076003219772 80.31658172607422,26.50053379152215 80.31503677368164,26.493774094878354 80.31366348266602,26.490086820057517 80.3158950805664,26.483019212764717 80.2994155883789,26.495310424480195 80.27057647705078';
//nawabganj
boundary[5]='26.495310424480195 80.27057647705078,26.48547756022487 80.2635383605957,26.493466826493897 80.24740219116211,26.485938494522923 80.24740219116211,26.480099856900377 80.25083541870117,26.47441458283159 80.24843215942383,26.470112026501113 80.2415657043457,26.469804694892417 80.25787353515625,26.464426258873313 80.2554702758789,26.459508611702415 80.24620056152344,26.462582165804314 80.32173156738281,26.471955998915437 80.31435012817383,26.483172861020634 80.29958724975586';
//rawatpur , sharda nagar , kakadev pandu nagar , lajpat nagar , shastri nagar , sarvodaya nagar
boundary[6]='26.458432848379417 80.22010803222656,26.440911859566835 80.26748657226562,26.434917225242593 80.29031753540039,26.44844313751643 80.29632568359375,26.45320756925689 80.29409408569336,26.46181378497245 80.29460906982422';
// azad nagar , sanjay nagar , ratan lal nagar

boundary[7]='26.43476351256958 80.2906608581543,26.420928532545656 80.31932830810547,26.43706918113747 80.3236198425293,26.455973923037437 80.33477783203125,26.46273584135519 80.32155990600586,26.46181378497245 80.29443740844727';
// govind nagar , saket nagar , anwar ganj

boundary[8]='26.420621069688035 80.31915664672852,26.40970560718363 80.34902572631836,26.40155677176992 80.36378860473633,26.40201804196874 80.37649154663086,26.40970560718363 80.3866195678711,26.413087973616875 80.38455963134766,26.436915471334792 80.35675048828125,26.45612760740985 80.3349494934082,26.44567660283237 80.32928466796875,26.436915471334792 80.3239631652832,26.428307395180617 80.32155990600586';
//kidwai nagar , shyam nagar , ramadevi , krishna nagar

boundary[9]='26.4207748012193 80.31898498535156,26.399865431935112 80.31400680541992,26.383412015165742 80.30920028686523,26.40124925727984 80.36378860473633,26.40970560718363 80.3488540649414,26.41524033698523 80.33374786376953';
//yashoda nagar 

boundary[10]='26.507446706371407 80.31692504882812,26.498075766015578 80.32293319702148,26.492545016412496 80.33031463623047,26.485938494522923 80.32327651977539,26.49024045886963 80.3158950805664,26.493927728762568 80.31366348266602';
//old kanpur


boundary[11]='26.492391380680253 80.33048629760742,26.48901134262387 80.34061431884766,26.485170269666398 80.34765243530273,26.477641394487726 80.3349494934082,26.462274814087085 80.32121658325195,26.471955998915437 80.31452178955078,26.483172861020634 80.29958724975586,26.489933181040094 80.31623840332031,26.485784849962197 80.3236198425293';
//harsh nagar, jawahar nagar, swaroop nagar

boundary[12]='26.44828944288833 80.34370422363281,26.460891721203744 80.35486221313477,26.467807019428264 80.36602020263672,26.46534829432821 80.36825180053711,26.46949736246286 80.37220001220703,26.48532391504829 80.34782409667969,26.47733408299156 80.33477783203125,26.469651028780255 80.32791137695312,26.46273584135519 80.32121658325195,26.459201251778744 80.32859802246094';
// colonel ganj , mool ganj , civil lines

boundary[13]='26.469651028780255 80.37220001220703,26.458586529469574 80.38078308105469,26.446752485327494 80.39073944091797,26.43476351256958 80.4085922241211,26.424771749095278 80.39966583251953,26.40924436771395 80.38644790649414,26.41339545655692 80.38473129272461,26.44844313751643 80.34353256225586,26.461045399011415 80.35486221313477,26.468114356372276 80.36567687988281,26.464579931962085 80.36842346191406';
// kanpur cantonment

boundary[14]='26.43476351256958 80.40876388549805,26.418315072126088 80.42610168457031,26.401864285440638 80.42078018188477,26.38725648131688 80.4305648803711,26.37849091177075 80.41854858398438,26.37833712391174 80.39108276367188,26.409551860898613 80.3866195678711';

// chakeri






         
       //alert(boundary.length);
       var colors = ['#FFFFFF','#FFE6F0','#FFCCE0','#FFB2D1','#FF99C2','#FF80B2','#FF66A3','#FF4D94','#FF3385','#FF1975','#FF0066','#E6005C','#CC0052','#B20047','#99003D'];
       ////code to fill color according to data

            var status = new Array();
          
            for(var i=0; i < cumulative.length; i++)
            {
                status.push({zone: i, val: cumulative[i]});
            }
            status = sort_ob(status);
    
            var zone_color_sorted = new Array();
            for(var i=0; i < cumulative.length; i++)
            {
                zone_color_sorted.push({zone: status[i]['zone'], color: colors[i]});
            }

            zone_color_sorted = sort_by_zone(zone_color_sorted);

       ///////
       ////// data for info window
       
      
       /////
       for (s=0;s<boundary.length;s++)
       {
        var boundarydata = new Array();
        //var boundarydata = new Array();
        var latlongs = boundary[s].split(",");
    	for (var i = 0; i < latlongs.length; i++) 
    	{
            latlong = latlongs[i].trim().split(" ");
            boundarydata[i] = new google.maps.LatLng(latlong[0], latlong[1]);
        }

        boundaryPolygon[s] = new google.maps.Polygon
        ({
            path: boundarydata,
            strokeColor: "#00000f",
            strokeOpacity: 0.2,
            strokeWeight: 1,
            fillColor: zone_color_sorted[s]['color'],
            fillOpacity: 0.5
        });

       

       //map.setCenter(boundarydata[0]);
        boundaryPolygon[s].setMap(map);
        }
        var content = 'sdfg' ;
         google.maps.event.addListener(boundaryPolygon[0], 'click', function (event) 
        {
           content = 'This is in region : ' + zones[0]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][0]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        google.maps.event.addListener(boundaryPolygon[1], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[1]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][1]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        google.maps.event.addListener(boundaryPolygon[2], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[2]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][2]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[3], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[3]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][3]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[4], 'click', function (event) 
        {

            content = 'This is in region : ' + zones[4]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][4]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        google.maps.event.addListener(boundaryPolygon[5], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[5]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][5]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[6], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[6]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][6]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[7], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[7]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][7]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[8], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[8]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][8]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[9], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[9]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][9]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        google.maps.event.addListener(boundaryPolygon[10], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[10]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][10]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[11], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[11]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][11]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[12], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[12]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][12]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        google.maps.event.addListener(boundaryPolygon[13], 'click', function (event) 
        {
            content = 'This is in region : ' + zones[13]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][13]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
        
        google.maps.event.addListener(boundaryPolygon[14], 'click', function (event) 
        {  
            content = 'This is in region : ' + zones[14]+'<br>';
            var temp = "";
            for (var i = 0;i<5;i++)
            {
            	temp += category[i] + " : " + type_array[i][14]+" reports"+"<br>"; 
            }
            content += temp;
            infoWindow.setContent(content);
            infoWindow.setPosition(event.latLng);
            infoWindow.open(map);
        });
        
       
        
        
    }
 	

	function btnCheckPointExistence_onclick() 
	{
		var latitude = document.getElementById('txtLattitude').value;
		var longitude = document.getElementById('txtLongitude').value;
		var myPoint = new google.maps.LatLng(latitude, longitude);
		if (boundaryPolygon[0].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.0");
		} 
		else  if (boundaryPolygon[1].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.1");
		} 
		else  if (boundaryPolygon[2].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.2");
		} 

		else  if (boundaryPolygon[3].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.3");
		} 
		else  if (boundaryPolygon[4].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.4");
		} 

		else  if (boundaryPolygon[5].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.5");
		} 

		else  if (boundaryPolygon[6].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.6");
		} 

		else  if (boundaryPolygon[7].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.7");
		} 

		else  if (boundaryPolygon[8].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.8");
		} 

		else  if (boundaryPolygon[9].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.9");
		} 

		else  if (boundaryPolygon[10].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon 10");
		} 


		else  if (boundaryPolygon[11].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon 11");
		} 


		else  if (boundaryPolygon[12].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon 12");
		} 


		else  if (boundaryPolygon[13].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon 13");
		} 


		else  if (boundaryPolygon[14].Contains(myPoint)) 
		{
		alert(myPoint + "is inside the polygon.14");
		} 
		else 
		{
		alert(myPoint + "is outside");
		}

    }
    

   
        google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript">
</script>
			
		</head>
	<body>
		
					
					
					

        <input id="btnPolygonDraw"  class="btn btn-primary btn-large" onclick="return drawPolygon()" style="margin-left:200px"  type="button" value="Render Map" />
  <br />  <br />
      
<div id="googleMap" style="height:730px;width:1200px;margin-left:-300px">
    
    </div>

					
					
					
					
					
					
					</div>
					
					
					
					
					
					
					
					
					
					
					
				</div>
			</div>
		<script language="JavaScript" type="text/javascript">
	var imageUrl = "http://counters.scripting.com/counters/count.gif";
	var imageTag = "<img src=\"" + imageUrl + "?group=tabsDemo3&referer=" + escape (document.referrer) + "\" height=\"1\" width=\"1\">";
	document.write (imageTag);
	</script>
	
	<script>
function build_histogram()
{

var zones=new Array();
zones[0]="IIT Kanpur";
zones[1]="Nankari";
zones[2]="Panki";
zones[3]="Kalyanpur";
zones[4]="Nawabganj";
zones[5]="Rawatpur,Sharda Nagar, Kakadev , Pandu Nagar, Lajpat Nagar , Shastri Nagar, Sarvodaya Nagar";
zones[6]="Azad Nagar, Sanjay Nagar, Ratan Lal Nagar";
zones[7]="Govind Nagar,Anwar Ganj, Saket Nagar";
zones[8]="Kidwai Nagar, Shyam Nagar, Ramadevi, Krishna Nagar";
zones[9]="Yashoda Nagar";
zones[10]="Old Kanpur";
zones[11]="Harsh Nagar, JawaharNagar, Swaroop Nagar";
zones[12]="Colonel Ganj, Mool Ganj ,Civil Lines";
zones[13]="Kanpur Cantoment";
zones[14]="Chakeri";

var number=14;
//var number=5;
var heig=document.getElementById('histogram').style.height;
var res = heig.substring(0,heig.length-2);
var h=parseInt(res) ;
//var w=1200;
var wid=document.getElementById('histogram').style.width;
res = wid.substring(0,wid.length-2);
var w=parseInt(res) ;
//var count = [1,2,3,4,5];
var count = [1,2,3,4,5,6,7,8,9,1,2,3,4,5];
var maximum =count[0];
var heig_1=document.getElementById('histogram_sub').style.height;
res = heig_1.substring(0,heig_1.length-2);
var h_1=parseInt(res) ;
var i;
//alert(h);
//alert(w);
for (i=1; i<count.length;i++) 
{
    if ( count[i]>maximum) 
    {
      maximum = count[i]
    }
}
maximum=maximum+1;
//alert(maximum);
var wscale=w*2/3/number;
//var hscale=h/max;
var leftprev;
var div = document.createElement('div');
var div_1 = document.createElement('div');
var parent=document.getElementById('histogram');
var parent_1=document.getElementById('histogram_sub');
parent.appendChild(div);
parent_1.appendChild(div_1);
div.style.position="absolute";
div.style.width=wscale+'px';
div.style.height=(h*count[0]/maximum)+'px';
div.style.marginLeft=(wscale/4)+'px';
div.style.marginTop=(h-h*count[0]/maximum)+'px';
div.style.backgroundColor="white";
div.style.textAlign="center";
div.style.fontSize="150%";
div.innerHTML="<b>"+count[0]+"</b>";
div.style.color="#384c80";

div_1.style.position="absolute";
div_1.style.width=wscale+'px';
div_1.style.height=h_1+'px';
div_1.style.marginLeft=(wscale/4)+'px';
div_1.style.marginTop='0px';
div_1.style.backgroundColor="white";
div_1.style.textAlign="center";
div_1.style.wordWrap="break-word";
div_1.style.fontSize="100%";
div_1.innerHTML="zone"+1;
div_1.style.color="#384c80";

leftprev=wscale/4+wscale;
for (i=1;i<count.length;i++) 
{
var div = document.createElement('div');
var div_1 = document.createElement('div');
div.style.width=wscale+'px';
div.style.position="absolute";
div.style.height=(h*count[i]/maximum)+'px';
div.style.marginLeft=(leftprev+wscale/2)+'px';
div.style.marginTop=(h-h*count[i]/maximum)+'px';
div.style.backgroundColor="white";

parent.appendChild(div); 
div.innerHTML="<b>"+count[i]+"</b>";
div.style.color="#384c80";
div.style.textAlign="center";
div.style.fontSize="200%";
parent_1.appendChild(div_1); 

div_1.style.position="absolute";
div_1.style.width=wscale+'px';
div_1.style.height='100px';
div_1.style.marginLeft=(leftprev+wscale/2)+'px';
div_1.style.marginTop='0px';
div_1.style.backgroundColor="white";
div_1.style.textAlign="center";
div_1.style.wordWrap="break-word";
div_1.style.fontSize="100%";
div_1.innerHTML="zone"+(i+1);
div_1.style.color="384c80";

leftprev=leftprev+wscale+wscale/2; 


}
var str="";
for (i=0;i<count.length;i++)
{
str=str+"<b>zone"+(i+1)+":</b>         "+zones[i]+"</br>";
}
str="<span style=\"color:#384c80;font-size:2em\">"+str+"</span>";
document.getElementById('ward_info').innerHTML=str;
}
build_histogram();
</script>



	
	

		</body>
	</html>


