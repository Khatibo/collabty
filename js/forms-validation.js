var FormsValidation = function () {


    var editprofileVal = function() {
            var editprofileForm = $('#edit-profile');
            var editprofileFormInput = $('#edit-profile input');
            var editprofileError = $('.alert-danger', editprofileForm);
            var editprofileSuccess = $('.alert-success', editprofileForm);

              $.validator.addMethod('filesize', function(value, element, param) {
                // param = size (en bytes) 
                // element = element to validate (<input>)
                // value = value of the element (file name)
                return this.optional(element) || (element.files[0].size <= param) 
                });

               editprofileFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#edit-profile').validate().form()) {
                                $('#edit-profile').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            editprofileForm.validate({

                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    photo: {
                        extension: "jpg|jpeg|png",
                        required: false,
                        filesize: 52428800 
                    },
                    cover: {
                        required: false,
                        extension: "jpg|jpeg|png",
                        filesize: 52428800 
                    },
                    'skills-list': {
                        required: true
                    },
                    'full-name': {
                        required:true,
                        minlength:5
                    },
                    'profile-brief': {
                        required:false,
                        minlength:5,
                        maxlength:210
                    },
                    'work-title': {
                        maxlength:80
                    },
                    'work-experience': {
                        maxlength:300
                    },
                    facebook: {
                        url:true
                    },
                    instagram: {
                        url:true
                    },
                    twitter: {
                        url:true
                    },
                    pintrest: {
                        url:true
                    },
                    dribble: {
                        url:true
                    },
                    linkedin: {
                        url:true
                    },
                    cloud: {
                        url:true
                    },
                    behance: {
                        url:true
                    },
                    youtube: {
                        url:true
                    }

                },

            messages: {
                photo: {
                    extension: "Only JPG/PNG/GIF is accepted.",
                    filesize: "file size less than 1MB"
                },
                cover: {
                    extension: "Only JPG/PNG is accepted.",
                    filesize: "file size less than 3MB"
                },
                'full-name': {
                        required: "Full name is required",
                        minlength: "Minimum length 5 chars"
                 },
                'profile-brief': {
                    minlength: "Minimum length is 5 chars",
                    maxlength: "Maximum length is 250 chars"
                },
                'work-title': {
                    maxlength: "Maximum length 80 chars"
                },
                'work-experience': {
                    maxlength: "Maximum length 300 chars"
                },
                socialURL: { //bring back the common name socialURL[]
                    url: "Enter a valid URL"
                }
            },



                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    editprofileSuccess.hide();
                    editprofileError.removeClass('display-hide');
                    App.scrollTo(editprofileError, -200);
                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                   //  editprofileSuccess.removeClass('display-hide');
                },

                submitHandler: function (form) {
                 editprofileError.addClass('display-hide');
                  editprofileSuccess.removeClass('display-hide');
                    form[0].submit(); // submit the form

                }
        });
    }


    var accsettingsVal = function() {

            var accountSettingsForm = $('#account-settings');
            var accountSettingsFormInput = $('#account-settings input');
            var accountSettingsError = $('.alert-danger', accountSettingsForm);
            var accountSettingsSuccess = $('.alert-success', accountSettingsForm);

              
               accountSettingsFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#account-settings').validate().form()) {
                                $('#account-settings').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            accountSettingsForm.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    photo: {
                        extension: "jpg|jpeg|png",
                        required: false,
                        filesize: 1048576 
                    },
                    cover: {
                        required: false,
                        extension: "jp?g",
                        filesize: 3145728 
                    },
                    'skills-list': {
                        required: true
                    }
                },

            messages: {
                photo: {
                    extension: "Only JPG/PNG/GIF is accepted.",
                    filesize: "file size less than 1MB"
                },
                cover: {
                    extension: "Only JPG/PNG is accepted.",
                    filesize: "file size less than 3MB"
                }
               
            },



                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    accountSettingsSuccess.hide();
                    accountSettingsError.removeClass('display-hide');
                    App.scrollTo(accountSettingsError, -200);
                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                accountSettingsError.addClass('display-hide');
                accountSettingsSuccess.removeClass('display-hide');
                form[0].submit(); // submit the form

                }

             

            });
    }

    var uploadPicVal = function() {

            var uploadPictureForm = $('#upload-picture-form');
            var uploadPictureFormInput = $('#upload-picture-form input');
            var uploadPictureError = $('.alert-danger', uploadPictureForm);
            var uploadPictureSuccess = $('.alert-success', uploadPictureForm);

                $.validator.addMethod('filesize', function(value, element, param) {
                // param = size (en bytes) 
                // element = element to validate (<input>)
                // value = value of the element (file name)
                return this.optional(element) || (element.files[0].size <= param) 
                });
              
               uploadPictureFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#upload-picture-form').validate().form()) {
                                $('#upload-picture-form').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            uploadPictureForm.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    'picture_title': {
                        required: true,
                        minlength: 3 
                    },
                    'picture_description': {
                        required: true,
                        minlength: 3,
                        maxlength: 150 
                    },
                    picture: {
                        required: true,
                        extension: "jpg|jpeg|png",
                        filesize: 5000000
                    },
                    tags: {
                        required:true
                    }

                },

            messages: {
                    'picture_title': {
                        required: "Picture Title is required",
                        minlength: "Title Minimum length is 3"
                    },
                    'picture_description': {
                        required: "Picture Description is required",
                        minlength: "Description Minimum length is 3",
                        maxlength: "Description Minimum length is 150"
                    },
                    picture: {
                        required: "Picture upload is required",
                        extension: "only Image formats jpg/png",
                        filesize: "Max file size is 5MB"
                    },
                    tags: {
                        required: "Tags are required"
                    }
               
            },



                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    uploadPictureSuccess.hide();
                    uploadPictureError.removeClass('display-hide');
                    App.scrollTo(uploadPictureError, -200);

                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                   // $(element).closest('span.help-block').addClass('display-hide');
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                uploadPictureError.addClass('display-hide');
                uploadPictureSuccess.removeClass('display-hide');
                form[0].submit(); // submit the form

                }

             

            });
    }


    var uploadVideoVal = function() {

            var uploadVideoForm = $('#upload-video-form');
            var uploadVideoFormInput = $('#upload-video-form input');
            var uploadVideoError = $('.alert-danger', uploadVideoForm);
            var uploadVideoSuccess = $('.alert-success', uploadVideoForm);

                $.validator.addMethod('filesize', function(value, element, param) {
                // param = size (en bytes) 
                // element = element to validate (<input>)
                // value = value of the element (file name)
                return this.optional(element) || (element.files[0].size <= param) 
                });
              
               uploadVideoFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#upload-video-form').validate().form()) {
                                $('#upload-video-form').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            uploadVideoForm.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    'video_title': {
                        required: true,
                        minlength: 3 
                    },
                    'video_link' : {
                        required:false,
                        url : true
                    },
                    'video_description': {
                        required: true,
                        minlength: 3,
                        maxlength: 150 
                    },
                    video: {
                        extension: "mp4|avi|mov",
                        filesize: 50000000
                    },
                    tags: {
                        required:true
                    }

                },

            messages: {
                    'video_title': {
                        required: "Title is required",
                        minlength: "min length is 3 chars" 
                    },
                    'video_link' : {
                        url : "Provide a valid embed Youtube/Vimeo link to your video"
                    },
                    'video_description': {
                        required: "Video Description is required",
                        minlength: "Minimum length is 3 chars",
                        maxlength: "Maximum length is 150 chars" 
                    },
                    video: {
                        extension: "Only video formats are allowed mp4 / avi / mov",
                        filesize: "filesize limit is 50mb"
                    },
                    tags: {
                        required:true
                    }
               
            },


                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    uploadVideoSuccess.hide();
                    uploadVideoError.removeClass('display-hide');
                    App.scrollTo(uploadVideoError, -200);

                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                   // $(element).closest('span.help-block').addClass('display-hide');
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                uploadVideoError.addClass('display-hide');
                uploadVideoSuccess.removeClass('display-hide');
                form[0].submit(); // submit the form

                }

             

            });


    }


    var uploadAudioVal = function() {

            var uploadAudioForm = $('#upload-audio-form');
            var uploadAudioFormInput = $('#upload-audio-form input');
            var uploadAudioError = $('.alert-danger', uploadAudioForm);
            var uploadAudioSuccess = $('.alert-success', uploadAudioForm);

                $.validator.addMethod('filesize', function(value, element, param) {
                // param = size (en bytes) 
                // element = element to validate (<input>)
                // value = value of the element (file name)
                return this.optional(element) || (element.files[0].size <= param) 
                });
              
               uploadAudioFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#upload-audio-form').validate().form()) {
                                $('#upload-audio-form').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            uploadAudioForm.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    'audio_title': {
                        required: true,
                        minlength: 3 
                    },
                    'audio_link' : {
                        url : true
                    },
                    'audio_description': {
                        required: true,
                        minlength: 3,
                        maxlength: 150 
                    },
                    audio: {
                        extension: "mp3",
                        filesize: 7000000
                    },
                    tags: {
                        required:true
                    }

                },

            messages: {
                     'audio_title': {
                        required: "Title your audio track",
                        minlength: 3 
                    },
                    'audio_link' : {
                        url : "Provide a Youtube/Soundcloud link to your audio track"
                    },
                    'audio_description': {
                        required: "Describe your audio track",
                        minlength: "Minimum Description is 3 chars",
                        maxlength: "Maximum Description is 150 chars" 
                    },
                    audio: {
                        extension: "Only .mp3 files supported",
                        filesize: "Maximum filesize is 7mb"
                    },
                    tags: {
                        required:true
                    }
               
            },



                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    uploadAudioSuccess.hide();
                    uploadAudioError.removeClass('display-hide');
                    App.scrollTo(uploadAudioError, -200);

                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                   // $(element).closest('span.help-block').addClass('display-hide');
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                uploadAudioError.addClass('display-hide');
                uploadAudioSuccess.removeClass('display-hide');
                form[0].submit(); // submit the form

                }

            });

    }


    var blogFormVal = function() {

            var uploadBlogForm = $('#blog-form');
            var uploadBlogFormInput = $('#blog-form input');
            var uploadBlogError = $('.alert-danger', uploadBlogForm);
            var uploadBlogSuccess = $('.alert-success', uploadBlogForm);

                $.validator.addMethod('filesize', function(value, element, param) {
                // param = size (en bytes) 
                // element = element to validate (<input>)
                // value = value of the element (file name)
                return this.optional(element) || (element.files[0].size <= param) 
                });
              
               uploadBlogFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#blog-form').validate().form()) {
                                $('#blog-form').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            uploadBlogForm.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    'blog_title': {
                        required: true,
                        minlength: 3 
                    },
                    'blog_image' : {
                        required: true,
                        extension: "jpg|jpeg|png",
                        filesize: 5000000
                    },
                    privacy : {
                        required: true
                    },
                    brief : {
                        required: true,
                        minlength: 3,
                        maxlength: 300 
                    },
                    post: {
                        required:true
                    },
                    tags: {
                        required:true
                    }

                },

            messages: {
                     'blog_title': {
                        required: "Blog Title is required",
                        minlength: "Minimum length is 3 chars" 
                    },
                    'blog_image' : {
                        extension: "Only image formats jpg / png",
                        filesize: "Maximum filesize is 5mb"
                    },
                    privacy : {
                        required: "Privacy setting is required"
                    },
                    brief : {
                        required: "Blog brief is required",
                        minlength: "Brief Minimum length is 3 chars",
                        maxlength: "brief Maximum length is 300 chars" 
                    },
                    post: {
                        required:"Post Content is required"
                    },
                    tags: {
                        required:"Tags are required"
                    }
               
            },



                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    uploadBlogSuccess.hide();
                    uploadBlogError.removeClass('display-hide');
                    App.scrollTo(uploadBlogError, -200);

                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                   // $(element).closest('span.help-block').addClass('display-hide');
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                uploadBlogError.addClass('display-hide');
                uploadBlogSuccess.removeClass('display-hide');
                form[0].submit(); // submit the form

                }

            });

    }

    var collabFormVal = function() {

            var collabForm = $('#collab-form');
            var collabFormInput = $('#collab-form input');
            var collabFormError = $('.alert-danger', collabForm);
            var collabFormSuccess = $('.alert-success', collabForm);

                $.validator.addMethod('filesize', function(value, element, param) {
                // param = size (en bytes) 
                // element = element to validate (<input>)
                // value = value of the element (file name)
                return this.optional(element) || (element.files[0].size <= param) 
                });
              
               collabFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#collab-form').validate().form()) {
                                $('#collab-form').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            collabForm.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    'collab_title': {
                        required: true,
                        minlength: 3 
                    },
                    'collab_image' : {
                        extension: "jpg|jpeg|png",
                        filesize: 5000000
                    },
                    collabPrivacy : {
                        required: true
                    },
                    deadline: {
                        date:true,
                        required:true
                    },
                    'collab_type' : {
                        required: true
                    },
                    amount: {
                        required:false,
                        digits: true
                    },
                    brief :{
                        required:true,
                        minlength:3,
                        maxlength:300
                    },
                    'collab_post': {
                         required:false,
                        minlength:3,
                        maxlength:300
                    },
                    tags: {
                        required:true
                    }

                },

            messages: {
                    'collab_title': {
                        required: "Collab title required",
                        minlength: "Minimum length is 3 chars" 
                    },
                    'collab_image' : {
                        extension: "Image formats only jpg|jpeg|png",
                        filesize: "Maximum filesize 5mb"
                    },
                    collabPrivacy : {
                        required: "Collab Privacy is required"
                    },
                    deadline: {
                        date:"Enter a valid date",
                        required:"Deadline is required"
                    },
                    'collab_type' : {
                        required: "Collab type is required"
                    },
                    amount: {
                        digits: "Enter valid digits only"
                    },
                    brief :{
                        required:"Collab Brief is required",
                        minlength:"Minimum length is 3 chars",
                        maxlength:"Maximum length is 300 chars"
                    },
                    'collab_post': {
                        minlength:"Minimum length is 3 chars",
                        maxlength:"Maximum length is 300 chars"
                    },
                    tags: {
                        required:"Select atleast 1 tag"
                    }
               
            },



                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    collabFormSuccess.hide();
                    collabFormError.removeClass('display-hide');
                    App.scrollTo(collabFormError, -200);

                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                   // $(element).closest('span.help-block').addClass('display-hide');
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                collabFormError.addClass('display-hide');
                collabFormSuccess.removeClass('display-hide');
                form[0].submit(); // submit the form

                }

            });

    }

    var createEventVal = function() {

            var createEventForm = $('#event-form');
            var createEventFormInput = $('#event-form input');
            var createEventFormError = $('.alert-danger', createEventForm);
            var createEventFormSuccess = $('.alert-success', createEventForm);

                $.validator.addMethod('filesize', function(value, element, param) {
                // param = size (en bytes) 
                // element = element to validate (<input>)
                // value = value of the element (file name)
                return this.optional(element) || (element.files[0].size <= param) 
                });
              
               createEventFormInput.keypress(function(e) {
                        if (e.which == 13) {
                            if ($('#event-form').validate().form()) {
                                $('#event-form').submit(); //form validation success, call ajax form submit
                            }
                            return false;
                        }
                    });
            createEventForm.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                ignore: "", // validate all fields including form hidden input
                rules: {
                    title: {
                        required: true,
                        minlength: 3 
                    },
                    location: {
                        required:true
                    },
                    'event_picture' : {
                        extension: "jpg|jpeg|png",
                        filesize: 5000000
                    },
                    visiblity : {
                        required: true
                    },
                    from: {
                        date:true,
                        required:true
                    },
                    to: {
                        date:true,
                        required:true
                    },
                    'event_type' : {
                        required: true
                    },
                    fees: {
                        digits: true
                    },
                    description :{
                        required:true,
                        minlength:3,
                        maxlength:300
                    },
                    tags: {
                        required:true
                    }

                },

            messages: {
                    title: {
                        required: "Event Title is required",
                        minlength: "Minimum length is 3 chars" 
                    },
                    location: {
                        required:"Event location is required"
                    },
                    event_picture : {
                        extension: " Only image formats jpg - jpeg - png",
                        filesize: "Maximum filesize is 5mb"
                    },
                    visiblity : {
                        required: "Event visiblity is required"
                    },
                    from: {
                        date:"Please provide a valid date",
                        required:"event start date is required"
                    },
                    to: {
                       date:"Please provide a valid date",
                        required:"event end date is required"
                    },
                    'event_type' : {
                        required: "Specify the type of event"
                    },
                    fees: {
                        digits: "Include any admission fees, digits only"
                    },
                    description :{
                        required:"Event Description is required",
                        minlength:"Minimum length is 3 chars",
                        maxlength:"Maximum length is 300 chars"
                    },
                    tags: {
                        required:"select atleast one tag"
                    }
               
            },



                errorPlacement: function (error, element) { // render error placement for each input typeW
               if (element.parent(".form-group").size() > 0) {
                        error.insertAfter(element.parent(".form-group"));
                    } else if (element.attr("data-error-container")) { 
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); // for other inputs, just perform default behavior
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    createEventFormSuccess.hide();
                    createEventFormError.removeClass('display-hide');
                    App.scrollTo(createEventFormError, -200);

                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                   // $(element).closest('span.help-block').addClass('display-hide');
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                createEventFormError.addClass('display-hide');
                createEventFormSuccess.removeClass('display-hide');
                form[0].submit(); // submit the form

                }

            });

    }

    return {
        //main function to initiate the module
        init: function () {

            editprofileVal();
            accsettingsVal();
            uploadPicVal();
            uploadVideoVal();
            uploadAudioVal();
            blogFormVal();
            collabFormVal();
            createEventVal();

        }

    };

}();

jQuery(document).ready(function() {
    FormsValidation.init();
});