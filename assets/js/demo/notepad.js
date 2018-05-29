$(function(){
    $('#summernote').summernote({
	height: ($(window).height() - 440),
	toolbar: [
	    ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['codeview','fullscreen','hello']]
        ],
    oninit: function(e) {
      var noteBtn = '<button id="readmore" type="button" class="btn btn-default btn-sm btn-small" title="Readmore" data-event="readmore" tabindex="-1">Readmore</button>';
      var fileGroup = '<div class="note-file btn-group">' + noteBtn + '</div>';
      $(fileGroup).appendTo($('.note-toolbar'));
      // Button tooltips
      $('#readmore').tooltip({
        container: 'body',
        placement: 'bottom'
      });
      // Button events
      $('#readmore').click(function(event) {
        var selection = document.getSelection();
        var cursorPos = selection.anchorOffset;
        var oldContent = selection.anchorNode.nodeValue;
        var toInsert = "<--readmore-->";
        var newContent = oldContent.substring(0, cursorPos) + toInsert + oldContent.substring(cursorPos);
        selection.anchorNode.nodeValue = newContent;

      });
    },

    });
    
});
