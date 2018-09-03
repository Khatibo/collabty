//when the user click submit post 
$(document).on('click', '.post-btn', function(e){
	e.preventDefault();
	console.log("SHAF el click beta3t post ");

		
		// elements
		var post_text = $('#cmttextarea').val();
		
		 
		$.ajax({
			url: "functions.php",
			type: "POST",
			data: {
				
			post_text:post_text,
			post_posted: 1

			},
			success: function(data){
				
				if (data === "error") {
					alert('There was an error adding your post. Please try again');
				} else {
				
					$('.posts_wrapper_').prepend(data);
					$('#cmttextarea').val('');
				}
			}
		});
	
});
	// When user clicks on submit reply to add reply under comment
	$(document).on('click', '#submit_comment', function(e){
		e.preventDefault();
		console.log("DAKHAL EL AJAX NEW COMMENT FORM");
		var comment_textarea = $(this).siblings('textarea'); // reply textarea element
			
			// elements
			var postID = $(this).data('id');
			var comment_text = $(this).siblings('textarea').val();
			var url = $(this).parent().attr('action');
			
			console.log(" el comment textb:"  );
			console.log(comment_text);
			 console.log(" el url :" + url);
			console.log(" el post ID EL SHAYFO");
			 console.log(postID);
			 
			$.ajax({
				url: "functions.php",
				type: "POST",
				data: {
					
				postID:postID,
				comment_text: comment_text,
				comment_posted: 1

				},
				success: function(data){
					
					if (data === "error") {
						alert('There was an error adding comment. Please try again');
					} else {
						$('.comments_wrapper_' + postID).append(data);
						comment_textarea.val('');
					}
				}
			});
		
	});
	$(document).on('click', '.reply-btn', function(e){
		e.preventDefault();
		// Get the comment id from the reply button's data-id attribute
		console.log("shaf el reply click");
		var comment_id = $(this).data('id');
		console.log("commend id " + comment_id);
		// show/hide the appropriate reply form (from the reply-btn (this), go to the parent element (comment-details)
		// and then its siblings which is a form element with id comment_reply_form_ + comment_id)
	
		
		var replyBar=document.getElementById("reply_bar_"+comment_id);
		if (replyBar.style.display === "block") {
			replyBar.style.display = "none";
		} else {
			replyBar.style.display = "block";
		}

		$(document).keypress( function(e){
			if(e.which!=13) return;
			e.preventDefault();
			
			
			
			var reply_text = $('#replytext_'+comment_id).val();
          if(reply_text=="")return;
			
				 
			console.log(" CONTENT OF THE REPLY"+reply_text);
			//console.log("URL:"+url);

			$.ajax({
				url: "functions.php",
				type: "POST",
				data: {
					comment_id: comment_id,
					reply_text: reply_text,
					reply_posted: 1
				},
				success: function(data){
					if (data === "error") {
						alert('There was an error adding reply. Please try again');
					} else {
						$('.replies_wrapper_' + comment_id).append(data);
						$('#replytext_'+comment_id).val('');
					}
				}
			});
		});
	});
