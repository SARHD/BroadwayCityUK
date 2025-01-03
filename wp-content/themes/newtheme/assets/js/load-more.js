jQuery(document).ready(function($) {
    $('#load-more-btn').click(function() {
        var button = $(this);
        var page = button.data('page');  // Get the current page from the button's data attribute

        // Send the AJAX request
        $.ajax({
            url: load_more_params.ajax_url,
            type: 'POST',
            data: {
                action: 'load_more_posts',
                page: page,
            },
            beforeSend: function() {
                button.text('Loading...'); // Change button text while loading
            },
            success: function(response) {
                if (response) {
                    // Append new posts to the posts container
                    $('#posts-list').append(response);

                    // Update the page number
                    button.data('page', page + 1);

                    // If there are no more posts, hide the button
                    if (response.trim() === '') {
                        button.hide();
                    } else {
                        button.text('Load More');
                    }
                }
            }
        });
    });
});


// jQuery(function($) {
//     var page = 2; // Start at the second page of posts

//     // When the "Load More" button is clicked
//     $('#load-more-btn').click(function() {
//         var button = $(this);
//         var data = {
//             action: 'load_more_posts',
//             page: page,
//             nonce: loadMoreParams.nonce  // Pass the nonce
//         };

//         // Make the AJAX request
//         $.post(loadMoreParams.ajaxurl, data, function(response) {
//             if (response.success) {
//                 // Append new posts
//                 $('#posts-list').append(response.data);
//                 page++; // Increment the page number
//             } else {
//                 button.hide(); // Hide the button if no more posts are available
//             }
//         }).fail(function() {
//             alert('There was an error loading more posts.');
//         });
//     });
// });
