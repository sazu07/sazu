/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#imgpreview')
                      .attr('src', e.target.result);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }

      /**
         user edit section
       */
      function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imgpreviewedit')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

      
      
            function readURL(input) {
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function (e) {
                              $('#imgprevieweditone')
                                  .attr('src', e.target.result);
                          };

                          reader.readAsDataURL(input.files[0]);
                      }
                  }
                  
                  /**
                     user delete section
                   */
                  $(function(){
                    $(document).on('click', '.delete', function(){
                      var url= $(this).data('url');
                      $('#delete-form').attr('action', url);
                    });
                  });

                  $(function(){
                    $(document).on('click', '.restore', function(){
                      var url= $(this).data('url');
                      $('#restore-form').attr('action', url);
                    });
                  });
