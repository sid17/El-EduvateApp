var audio_context,
    recorder,
    volume,
    volumeLevel = 0,
    currentEditedSoundIndex;

function startUserMedia(stream) {
  var input = audio_context.createMediaStreamSource(stream);
  console.log('Media stream created.');

  volume = audio_context.createGainNode();
  volume.gain.value = volumeLevel;
  input.connect(volume);
  volume.connect(audio_context.destination);
  console.log('Input connected to audio context destination.');
  
  recorder = new Recorder(input);
  console.log('Recorder initialised.');
}

function changeVolume(value) {
  if (!volume) return;
  volumeLevel = value;
  volume.gain.value = value;
}

function startRecording(button) {
  recorder && recorder.record();
  button.disabled = true;
  button.nextElementSibling.disabled = false;
  console.log('Recording...');
}

function stopRecording(button) {
  recorder && recorder.stop();
  button.disabled = true;
  button.previousElementSibling.disabled = false;
  console.log('Stopped recording.');
  
  // create WAV download link using audio data blob
  createDownloadLink();
  
  recorder.clear();
}

function createDownloadLink() {
  currentEditedSoundIndex = -1;
  recorder && recorder.exportWAV(handleWAV.bind(this));

}



function sendWaveToPost(blob) 
{
	var x=new Date().getTime();
	alert(x);
	var file2 = new FileReader();
	file2.onloadend = function(e){				 
				$.ajax({
					url: "upload.php",
					type: "POST",
					data: file2.result,
					processData: false,
					contentType : "text/plain"
				});
			} ;
	file2.readAsDataURL( blob );
}















function handleWAV(blob) {
  var tableRef = document.getElementById('recordingslist');
  if (currentEditedSoundIndex !== -1) 
{
    $('#recordingslist tr:nth-child(' + (currentEditedSoundIndex + 1) + ')').remove();
}

  var url = URL.createObjectURL(blob);
  var newRow   = tableRef.insertRow(currentEditedSoundIndex);
  newRow.className = 'soundBite';
  var audioElement = document.createElement('audio');
  var downloadAnchor = document.createElement('a');
  var uploadAnchor = document.createElement('button');

  audioElement.controls = true;
  audioElement.src = url;

  downloadAnchor.href = url;
  downloadAnchor.download = new Date().toISOString() + '.wav';
  downloadAnchor.innerHTML = 'Download';
  downloadAnchor.className = 'btn btn-primary';
  uploadAnchor.onclick =  function(){ sendWaveToPost(blob); }


  uploadAnchor.innerHTML = 'Upload';
  uploadAnchor.className = 'btn btn-primary';
  
  var newCell = newRow.insertCell(-1);
  newCell.appendChild(audioElement);
  newCell = newRow.insertCell(-1);
  newCell.appendChild(downloadAnchor);
  newCell = newRow.insertCell(-1);
  newCell.appendChild(uploadAnchor);
  newCell = newRow.insertCell(-1);
  newCell = newRow.insertCell(-1);
  
}


window.onload = function init() {
  try {
    // webkit shim
    window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext;
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
    window.URL = window.URL || window.webkitURL || window.mozURL;
    
    audio_context = new AudioContext();
    console.log('Audio context set up.');
    console.log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
  } catch (e) {
    console.warn('No web audio support in this browser!');
  }
  
  navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
    console.warn('No live audio input: ' + e);
  });
};
