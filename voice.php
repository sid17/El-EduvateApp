<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="script/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="script/jquery-ui.js"></script>
<script type="text/javascript" src="script/jquery-animate-css-rotate-scale.js"></script>
<script type="text/javascript" src="script/jquery-css-transform.js"></script>
<script type="text/javascript" src="script/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript" src="script/queryLoader.js"></script>
<script type="text/javascript" src="script/colortip-1.0-jquery.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<script>
function levenshteinDistance (s, t) 
{
if (!s.length) return t.length;
if (!t.length) return s.length;
return Math.min(
levenshteinDistance(s.substr(1), t) + 1,
levenshteinDistance(t.substr(1), s) + 1,
levenshteinDistance(s.substr(1), t.substr(1)) + (s[0] !== t[0] ? 1 : 0)
);
}
</script>
</head>
<body>
<!--<div id="speechinput">
  <input id="speech" type="text" speech="speech" x-webkit-speech="x-webkit-speech" onspeechchange="processspeech();" onwebkitspeechchange="processspeech();" />
  <input style="display:none" type="text" id="myInput" value="initial"/>
  <div style="display:none" id="speechnotification"></div>-->
</body>

</html>
