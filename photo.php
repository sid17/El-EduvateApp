    <script src="https://www.google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">
    google.load('search', '1');
    function searchComplete(searcher) {
      if (searcher.results && searcher.results.length > 0) {
        var contentDiv = document.getElementById('content');
        contentDiv.innerHTML = '';
        var results = searcher.results;
        for (var i = 0; i < 1; i++) {
          // For each result write it's title and image to the screen
          var result = results[i];
          var imgContainer = document.createElement('div');
    	  //var title = document.createElement('h2');
          // We use titleNoFormatting so that no HTML tags are left in the title
          //title.innerHTML = result.titleNoFormatting;
    	  var newImg = document.createElement('img');
          // There is also a result.url property which has the escaped version
          newImg.src = result.tbUrl;
    	   //imgContainer.appendChild(title);
          imgContainer.appendChild(newImg);
    	  // Put our title + image in the content
          contentDiv.appendChild(imgContainer);
        }
      }
    }
    function OnCall(x) {
      // Our ImageSearch instance.
      var imageSearch = new google.search.ImageSearch();
    // Restrict to extra large images only
     // imageSearch.setRestriction(google.search.ImageSearch.RESTRICT_IMAGESIZE,
                                 //google.search.ImageSearch.IMAGESIZE_MEDIUM);
    imageSearch.setSearchCompleteCallback(this, searchComplete, [imageSearch]);
    
      // Find me a beautiful car.
      imageSearch.execute(x);
    }
    google.setOnLoadCallback(OnLoad);
    </script>
  
