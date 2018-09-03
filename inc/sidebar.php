 <div class="main--sidebar col-md-3 pb--60" data-trigger="stickyScroll" >

                    <div class="theiaStickySidebar white-bg">
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Upload to Your Portfolio</h2>
                            <ul class="nav add-post-icons">
                                <li><a data-target="#media--modal" href="#media-modal" class="tooltips" data-original-title="Upload Media" data-placement="bottom" data-toggle="modal"><span aria-hidden="true" class="icon-grid"></span></a></li>
                                <li> <a data-target="#blog--modal" class="tooltips" data-original-title="Post Blog" data-placement="bottom" data-toggle="modal"><span aria-hidden="true" class="icon-note"></span></a></li> 
                                <li><a data-target="#collab--modal" class="tooltips" data-original-title="Start Collaboration" data-placement="bottom" data-toggle="modal"><span aria-hidden="true" class="icon-rocket"></span></a></li>
                            </ul>
                          
                        </div>
                      
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Advertisements</h2>

                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="img/widgets-img/ad.jpg" alt="" class="center-block">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                      
                    </div> <!-- End theiaStickySidebar -->
                </div>


<div id="media--modal" class="modal form fade in" tabindex="-1" aria-hidden="false">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Upload Media Content to your Portfolio</h3>
      </div>
    <div class="modal-body">
           <ul class="nav nav-tabs">
             <li class="active"><a href="#picture-upload" data-toggle="tab">Picture</a></li>
             <li><a href="#video-upload" data-toggle="tab">Video</a></li>
             <li><a href="#audio-upload" data-toggle="tab">Audio</a></li>
           </ul>
       <div class="tab-content">
         <div class="tab-pane active" id="picture-upload">
          <form action="" method="post" enctype="multipart/form-data" id="upload-picture-form" class="form-horizontal">
                <div class="form-group pt--20">
                    <label class="col-md-3 control-label">Picture Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter text">
                        <span class="help-block"> Caption your picture </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Picture Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="3" maxlength="200"></textarea>
                    </div>
                </div>
          <div class="form-group">
                  <div class="col-md-3">
                    <label class="control-label" for="tags">Tags</label>
                  </div>
                    <div class="col-md-9">
                    <select name="tags[]" class="form-control select2 tags-list-media" multiple="multiple" data-maximum-selection-length="3">
                            <option value="autocad">AutoCAD</option>
                            <option value="interior">Interior Design</option>
                            <option value="landscape">Landscape Design</option>
                            <option value="architectural">Architectural Design</option>
                            <option value="conceptual">Conceptual Arch. Design</option>
                            <option value="furniture">Furniture Design</option>
                            <option value="3dmodeling">3D Max Modeling</option>
                            <option value="revit">Revit</option>
                            <option value="sketchup">Sketchup</option>
                            <option value="3dmax">3D Max Render</option>
                            <option value="logodesign">Logo Design</option>
                            <option value="animatedlogo">Animated Logo</option>
                            <option value="bannerads">Banner Ads </option>
                            <option value="photoshop">Photoshop</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="indesign">InDesign</option>
                            <option value="aftereffects">After effects </option>
                            <option value="motionsgraphics">Motion Graphic</option>
                            <option value="websitedesign">Website Design</option>
                            <option value="appdesign">App Design</option>
                            <option value="photoediting">Photo Editing</option>
                            <option value="photoretouching">Photo Retouching</option>
                            <option value="typography">Typography</option>
                            <option value="socialmediapostsdesign">Social Media Posts Design</option>
                            <option value="invitationdesign">Invitation Design</option>
                            <option value="packagingdesign">Packaging Design</option>
                            <option value="flyerdesign">Flyer Design</option>
                            <option value="icondesign">Icon Design</option>
                            <option value="businesscard">Business-card Design</option>
                            <option value="product">Product Design</option>
                            <option value="weddingplanner">Wedding Planner</option>
                            <option value="appdesign">Application Design</option>
                            <option value="webdesign">Web Design</option>
                            <option value="characterdesign">Character Design </option>
                            <option value="Sarcastic">Sarcastic</option>
                            <option value="Caricature">Caricature</option>
                            <option value="Tattoo">Tattoo Design</option>
                            <option value="Painting">Painting</option>
                            <option value="Oil">Oil Painting</option>
                            <option value="Street">Street Art </option>
                            <option value="Photography">Photography</option>
                            <option value="Jewelry">Jewelry Design</option>
                            <option value="Creative">Creative Art</option>
                            <option value="Crafts">Crafts</option> 
                            <option value="fashion">Fashion Design</option>
                            <option value="tshirt">T-shirt Design</option>
                            <optgroup label="Graphics">
                            <option value="Maya">Maya</option>
                            <option value="3dmax">3d Max</option>
                            <option value="cinema4d">Cinema 4D</option>
                            <option value="zbrush">Zbrush</option>
                            <option value="3dmodelling">3D Modelling</option>
                            <option value="3drenderring">3D Renderring</option>
                            <option value="vfx">VFX</option>
                            <option value="vr">VR</option>
                            <option value="3dchar">3D Character Animation</option>
                            <option value="2danimation">2D Animation</option>
                            <option value="motiongraphics">Motion Graphics</option>
                            <option value="2dgame">2D Game</option>
                            <option value="3dgamemodeling">3D Game Modeling</option>
                            <option value="3dgameanimation">3D Game Animation</option>

                            <option value="Script">Script Writer</option>
                            <option value="lyrics">Lyrics Writer</option>
                            <option value="Storytelling">Storytelling</option>
                            <option value="shortstories">Short Stories</option>
                            <option value="adwriter">Advertising Writer</option>
                            <option value="blogger">Blog Writer</option>
                            <option value="creative">Creative Content</option>
                            <option value="slogan">Slogan</option>
                            <option value="htmlcss">HTML/CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="php">PHP</option>
                            <option value="cms">CMS</option>
                            <option value="mysql">MySQL</option>
                            <option value="frontend">Front-End Developer</option>
                            <option value="backend">Back-end Developer</option>
                            <option value="fullstack">Full-Stack Developer</option>
                            <option value="Brainstorming">Brainstorming</option>
                            <option value="Acting">Acting</option>
                            <option value="Vocal">Vocal</option>
                            <option value="Voiceover">Voice Over</option>
                            <option value="singer">Singer</option>
                            <option value="soundtalent">Sound Talent</option>
                            <option value="Musician">Musician</option>
                            <option value="makeup">Makeup Artist </option>
                            <option value="videoediting">Video Editing</option>
                            <option value="soundeffects">Sound Effect</option>
                            <option value="filmdirector">Film Director</option>
                            <option value="musicvideos">Music Videos</option>
                            <option value="mediaproduction">Media Production</option>
                            <option value="Documentary">Documentary Videos</option>
                    </select>
                    </div>
                </div>
         
                <div class="form-group">
                    <label for="PicInputFile" class="col-md-3 control-label">Upload Photo</label>
                    <div class="col-md-9">
                        <input type="file" class="btn btn-outline red" multiple>
                        <p class="help-block"> 5mb / .jpg / .png <br> Choose multiple pics for album</p>
                    </div>
                </div>
          </form>
         </div>
       <div class="tab-pane" id="video-upload">
        <form action="" method="post" enctype="multipart/form-data" id="upload-video-form" class="form-horizontal">
            <div class="form-group pt--20">
                <label class="col-md-3 control-label">Video Title</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Enter text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Video Embed Link</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Enter URI">
                    <span class="help-block"> Youtube, Vimeo, Vidme </span>
                </div>
            </div>
            <div class="form-group">
                  <div class="col-md-3">
                    <label class="control-label" for="tags">Tags</label>
                  </div>
                    <div class="col-md-9">
                    <select name="tags[]" class="form-control select2 tags-list-media" multiple="multiple" data-maximum-selection-length="3">
                            <option value="autocad">AutoCAD</option>
                            <option value="interior">Interior Design</option>
                            <option value="landscape">Landscape Design</option>
                            <option value="architectural">Architectural Design</option>
                            <option value="conceptual">Conceptual Arch. Design</option>
                            <option value="furniture">Furniture Design</option>
                            <option value="3dmodeling">3D Max Modeling</option>
                            <option value="revit">Revit</option>
                            <option value="sketchup">Sketchup</option>
                            <option value="3dmax">3D Max Render</option>
                            <option value="logodesign">Logo Design</option>
                            <option value="animatedlogo">Animated Logo</option>
                            <option value="bannerads">Banner Ads </option>
                            <option value="photoshop">Photoshop</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="indesign">InDesign</option>
                            <option value="aftereffects">After effects </option>
                            <option value="motionsgraphics">Motion Graphic</option>
                            <option value="websitedesign">Website Design</option>
                            <option value="appdesign">App Design</option>
                            <option value="photoediting">Photo Editing</option>
                            <option value="photoretouching">Photo Retouching</option>
                            <option value="typography">Typography</option>
                            <option value="socialmediapostsdesign">Social Media Posts Design</option>
                            <option value="invitationdesign">Invitation Design</option>
                            <option value="packagingdesign">Packaging Design</option>
                            <option value="flyerdesign">Flyer Design</option>
                            <option value="icondesign">Icon Design</option>
                            <option value="businesscard">Business-card Design</option>
                            <option value="product">Product Design</option>
                            <option value="weddingplanner">Wedding Planner</option>
                            <option value="appdesign">Application Design</option>
                            <option value="webdesign">Web Design</option>
                            <option value="characterdesign">Character Design </option>
                            <option value="Sarcastic">Sarcastic</option>
                            <option value="Caricature">Caricature</option>
                            <option value="Tattoo">Tattoo Design</option>
                            <option value="Painting">Painting</option>
                            <option value="Oil">Oil Painting</option>
                            <option value="Street">Street Art </option>
                            <option value="Photography">Photography</option>
                            <option value="Jewelry">Jewelry Design</option>
                            <option value="Creative">Creative Art</option>
                            <option value="Crafts">Crafts</option> 
                            <option value="fashion">Fashion Design</option>
                            <option value="tshirt">T-shirt Design</option>
                            <optgroup label="Graphics">
                            <option value="Maya">Maya</option>
                            <option value="3dmax">3d Max</option>
                            <option value="cinema4d">Cinema 4D</option>
                            <option value="zbrush">Zbrush</option>
                            <option value="3dmodelling">3D Modelling</option>
                            <option value="3drenderring">3D Renderring</option>
                            <option value="vfx">VFX</option>
                            <option value="vr">VR</option>
                            <option value="3dchar">3D Character Animation</option>
                            <option value="2danimation">2D Animation</option>
                            <option value="motiongraphics">Motion Graphics</option>
                            <option value="2dgame">2D Game</option>
                            <option value="3dgamemodeling">3D Game Modeling</option>
                            <option value="3dgameanimation">3D Game Animation</option>

                            <option value="Script">Script Writer</option>
                            <option value="lyrics">Lyrics Writer</option>
                            <option value="Storytelling">Storytelling</option>
                            <option value="shortstories">Short Stories</option>
                            <option value="adwriter">Advertising Writer</option>
                            <option value="blogger">Blog Writer</option>
                            <option value="creative">Creative Content</option>
                            <option value="slogan">Slogan</option>
                            <option value="htmlcss">HTML/CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="php">PHP</option>
                            <option value="cms">CMS</option>
                            <option value="mysql">MySQL</option>
                            <option value="frontend">Front-End Developer</option>
                            <option value="backend">Back-end Developer</option>
                            <option value="fullstack">Full-Stack Developer</option>
                            <option value="Brainstorming">Brainstorming</option>
                            <option value="Acting">Acting</option>
                            <option value="Vocal">Vocal</option>
                            <option value="Voiceover">Voice Over</option>
                            <option value="singer">Singer</option>
                            <option value="soundtalent">Sound Talent</option>
                            <option value="Musician">Musician</option>
                            <option value="makeup">Makeup Artist </option>
                            <option value="videoediting">Video Editing</option>
                            <option value="soundeffects">Sound Effect</option>
                            <option value="filmdirector">Film Director</option>
                            <option value="musicvideos">Music Videos</option>
                            <option value="mediaproduction">Media Production</option>
                            <option value="Documentary">Documentary Videos</option>
                            <option value="other">Other</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                 <div class="col-md-3">
                   <label class="control-label" for="description">Video Description</label>
                 </div>
                 <div class="col-md-9">
                     <textarea class="form-control" rows="3" maxlength="200"></textarea>
                 </div>
               </div>
             <div class="form-group">
                    <label for="VideoInputFile" class="col-md-3 control-label">Upload Video</label>
                    <div class="col-md-9">
                        <input type="file" class="btn btn-outline red">
                        <p class="help-block"> 100MB / .mp4 / .avi</p>
                    </div>
                </div>
            </form>
      </div>
      <div class="tab-pane" id="audio-upload">
        <form action="" method="post" enctype="multipart/form-data" id="upload-audio-form" class="form-horizontal">
            <div class="form-group pt--20">
                <label class="col-md-3 control-label">Audio Title</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Enter text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Audio Embed Link</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="Enter URI">
                    <span class="help-block"> Youtube, SoundCloud </span>
                </div>
            </div>
            <div class="form-group">
                  <div class="col-md-3">
                    <label class="control-label" for="tags">Tags</label>
                  </div>
                    <div class="col-md-9">
                    <select name="tags[]" class="form-control select2 tags-list-media" multiple="multiple" data-maximum-selection-length="3">
                            <option value="autocad">AutoCAD</option>
                            <option value="interior">Interior Design</option>
                            <option value="landscape">Landscape Design</option>
                            <option value="architectural">Architectural Design</option>
                            <option value="conceptual">Conceptual Arch. Design</option>
                            <option value="furniture">Furniture Design</option>
                            <option value="3dmodeling">3D Max Modeling</option>
                            <option value="revit">Revit</option>
                            <option value="sketchup">Sketchup</option>
                            <option value="3dmax">3D Max Render</option>
                            <option value="logodesign">Logo Design</option>
                            <option value="animatedlogo">Animated Logo</option>
                            <option value="bannerads">Banner Ads </option>
                            <option value="photoshop">Photoshop</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="indesign">InDesign</option>
                            <option value="aftereffects">After effects </option>
                            <option value="motionsgraphics">Motion Graphic</option>
                            <option value="websitedesign">Website Design</option>
                            <option value="appdesign">App Design</option>
                            <option value="photoediting">Photo Editing</option>
                            <option value="photoretouching">Photo Retouching</option>
                            <option value="typography">Typography</option>
                            <option value="socialmediapostsdesign">Social Media Posts Design</option>
                            <option value="invitationdesign">Invitation Design</option>
                            <option value="packagingdesign">Packaging Design</option>
                            <option value="flyerdesign">Flyer Design</option>
                            <option value="icondesign">Icon Design</option>
                            <option value="businesscard">Business-card Design</option>
                            <option value="product">Product Design</option>
                            <option value="weddingplanner">Wedding Planner</option>
                            <option value="appdesign">Application Design</option>
                            <option value="webdesign">Web Design</option>
                            <option value="characterdesign">Character Design </option>
                            <option value="Sarcastic">Sarcastic</option>
                            <option value="Caricature">Caricature</option>
                            <option value="Tattoo">Tattoo Design</option>
                            <option value="Painting">Painting</option>
                            <option value="Oil">Oil Painting</option>
                            <option value="Street">Street Art </option>
                            <option value="Photography">Photography</option>
                            <option value="Jewelry">Jewelry Design</option>
                            <option value="Creative">Creative Art</option>
                            <option value="Crafts">Crafts</option> 
                            <option value="fashion">Fashion Design</option>
                            <option value="tshirt">T-shirt Design</option>
                            <optgroup label="Graphics">
                            <option value="Maya">Maya</option>
                            <option value="3dmax">3d Max</option>
                            <option value="cinema4d">Cinema 4D</option>
                            <option value="zbrush">Zbrush</option>
                            <option value="3dmodelling">3D Modelling</option>
                            <option value="3drenderring">3D Renderring</option>
                            <option value="vfx">VFX</option>
                            <option value="vr">VR</option>
                            <option value="3dchar">3D Character Animation</option>
                            <option value="2danimation">2D Animation</option>
                            <option value="motiongraphics">Motion Graphics</option>
                            <option value="2dgame">2D Game</option>
                            <option value="3dgamemodeling">3D Game Modeling</option>
                            <option value="3dgameanimation">3D Game Animation</option>

                            <option value="Script">Script Writer</option>
                            <option value="lyrics">Lyrics Writer</option>
                            <option value="Storytelling">Storytelling</option>
                            <option value="shortstories">Short Stories</option>
                            <option value="adwriter">Advertising Writer</option>
                            <option value="blogger">Blog Writer</option>
                            <option value="creative">Creative Content</option>
                            <option value="slogan">Slogan</option>
                            <option value="htmlcss">HTML/CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="php">PHP</option>
                            <option value="cms">CMS</option>
                            <option value="mysql">MySQL</option>
                            <option value="frontend">Front-End Developer</option>
                            <option value="backend">Back-end Developer</option>
                            <option value="fullstack">Full-Stack Developer</option>
                            <option value="Brainstorming">Brainstorming</option>
                            <option value="Acting">Acting</option>
                            <option value="Vocal">Vocal</option>
                            <option value="Voiceover">Voice Over</option>
                            <option value="singer">Singer</option>
                            <option value="soundtalent">Sound Talent</option>
                            <option value="Musician">Musician</option>
                            <option value="makeup">Makeup Artist </option>
                            <option value="videoediting">Video Editing</option>
                            <option value="soundeffects">Sound Effect</option>
                            <option value="filmdirector">Film Director</option>
                            <option value="musicvideos">Music Videos</option>
                            <option value="mediaproduction">Media Production</option>
                            <option value="Documentary">Documentary Videos</option>
                            <option value="other">Other</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                 <div class="col-md-3">
                   <label class="control-label" for="description">Audio Description</label>
                 </div>
                 <div class="col-md-9">
                     <textarea class="form-control" rows="3" maxlength="200"></textarea>
                 </div>
               </div>
             <div class="form-group last">
                    <label for="AudioInputFile" class="col-md-3 control-label">Upload Audio</label>
                    <div class="col-md-9">
                        <input type="file" class="btn btn-outline red">
                        <p class="help-block"> 5mb / 2mins / .mp3</p>
                    </div>
                </div>
            </form>
      </div>
       </div>

        <div class="modal-footer">
           <button type="button" data-dismiss="modal" class="btn">Close</button>
           <button type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

<div id="blog--modal" class="modal modal-lg form fade in" tabindex="-1" aria-hidden="false">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Create a Blog Post</h3>
      </div>
    <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data" id="blog-form" class="form-horizontal">
                <div class="form-group pt--20">
                    <label class="col-md-2 control-label">Blog Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter text">
                        
                    </div>
                </div>
                 <div class="form-group">
                    <label for="PicInputFile" class="col-md-2 control-label">Upload Blog Header Picture</label>
                    <div class="col-md-4">
                        <input type="file" class="btn btn-outline red">
                        <p class="help-block"> 5mb / .jpg / .png</p>
                    </div>
               
                  <div class="col-md-2">
                    <label class="control-label" for="visiblity">Whos Sees?</label>
                  </div>
                    <div class="col-md-3">
                    <select name="visiblity" class="form-control text-default" id="blog-visiblility">
                            <option value="">Who Sees?</option>
                            <option value="followers-only">Followers Only</option>
                            <option value="private">Public</option>
                    </select>
                     </div>
                    </div>
                    <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="tags">Tags</label>
                  </div>
                    <div class="col-md-9">
                    <select name="tags[]" class="form-control select2" id="tags-list-blog" multiple="multiple" data-maximum-selection-length="3">
                            <option value="autocad">AutoCAD</option>
                            <option value="interior">Interior Design</option>
                            <option value="landscape">Landscape Design</option>
                            <option value="architectural">Architectural Design</option>
                            <option value="conceptual">Conceptual Arch. Design</option>
                            <option value="furniture">Furniture Design</option>
                            <option value="3dmodeling">3D Max Modeling</option>
                            <option value="revit">Revit</option>
                            <option value="sketchup">Sketchup</option>
                            <option value="3dmax">3D Max Render</option>
                            <option value="logodesign">Logo Design</option>
                            <option value="animatedlogo">Animated Logo</option>
                            <option value="bannerads">Banner Ads </option>
                            <option value="photoshop">Photoshop</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="indesign">InDesign</option>
                            <option value="aftereffects">After effects </option>
                            <option value="motionsgraphics">Motion Graphic</option>
                            <option value="websitedesign">Website Design</option>
                            <option value="appdesign">App Design</option>
                            <option value="photoediting">Photo Editing</option>
                            <option value="photoretouching">Photo Retouching</option>
                            <option value="typography">Typography</option>
                            <option value="socialmediapostsdesign">Social Media Posts Design</option>
                            <option value="invitationdesign">Invitation Design</option>
                            <option value="packagingdesign">Packaging Design</option>
                            <option value="flyerdesign">Flyer Design</option>
                            <option value="icondesign">Icon Design</option>
                            <option value="businesscard">Business-card Design</option>
                            <option value="product">Product Design</option>
                            <option value="weddingplanner">Wedding Planner</option>
                            <option value="appdesign">Application Design</option>
                            <option value="webdesign">Web Design</option>
                            <option value="characterdesign">Character Design </option>
                            <option value="Sarcastic">Sarcastic</option>
                            <option value="Caricature">Caricature</option>
                            <option value="Tattoo">Tattoo Design</option>
                            <option value="Painting">Painting</option>
                            <option value="Oil">Oil Painting</option>
                            <option value="Street">Street Art </option>
                            <option value="Photography">Photography</option>
                            <option value="Jewelry">Jewelry Design</option>
                            <option value="Creative">Creative Art</option>
                            <option value="Crafts">Crafts</option> 
                            <option value="fashion">Fashion Design</option>
                            <option value="tshirt">T-shirt Design</option>
                            <optgroup label="Graphics">
                            <option value="Maya">Maya</option>
                            <option value="3dmax">3d Max</option>
                            <option value="cinema4d">Cinema 4D</option>
                            <option value="zbrush">Zbrush</option>
                            <option value="3dmodelling">3D Modelling</option>
                            <option value="3drenderring">3D Renderring</option>
                            <option value="vfx">VFX</option>
                            <option value="vr">VR</option>
                            <option value="3dchar">3D Character Animation</option>
                            <option value="2danimation">2D Animation</option>
                            <option value="motiongraphics">Motion Graphics</option>
                            <option value="2dgame">2D Game</option>
                            <option value="3dgamemodeling">3D Game Modeling</option>
                            <option value="3dgameanimation">3D Game Animation</option>

                            <option value="Script">Script Writer</option>
                            <option value="lyrics">Lyrics Writer</option>
                            <option value="Storytelling">Storytelling</option>
                            <option value="shortstories">Short Stories</option>
                            <option value="adwriter">Advertising Writer</option>
                            <option value="blogger">Blog Writer</option>
                            <option value="creative">Creative Content</option>
                            <option value="slogan">Slogan</option>
                            <option value="htmlcss">HTML/CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="php">PHP</option>
                            <option value="cms">CMS</option>
                            <option value="mysql">MySQL</option>
                            <option value="frontend">Front-End Developer</option>
                            <option value="backend">Back-end Developer</option>
                            <option value="fullstack">Full-Stack Developer</option>
                            <option value="Brainstorming">Brainstorming</option>
                            <option value="Acting">Acting</option>
                            <option value="Vocal">Vocal</option>
                            <option value="Voiceover">Voice Over</option>
                            <option value="singer">Singer</option>
                            <option value="soundtalent">Sound Talent</option>
                            <option value="Musician">Musician</option>
                            <option value="makeup">Makeup Artist </option>
                            <option value="videoediting">Video Editing</option>
                            <option value="soundeffects">Sound Effect</option>
                            <option value="filmdirector">Film Director</option>
                            <option value="musicvideos">Music Videos</option>
                            <option value="mediaproduction">Media Production</option>
                            <option value="Documentary">Documentary Videos</option>
                            <option value="other">Other</option>
                    </select>
                    </div>
                </div>
               <!--  <div class="form-group">
                 <div class="col-md-2">
                   <label class="control-label" for="quote">Blog Quote</label>
                 </div>
                 <div class="col-md-9">
                     <textarea class="form-control" rows="3"></textarea>
                 </div>
               </div> -->
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="brief">Brief</label>
                  </div>
                  <div class="col-md-9">
                      <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
           <div class="form-group last">
            <div class="col-md-2">
                  <label class="control-label ">Author Blog post</label>
                  </div>
                   <div class="col-md-9">
                       <textarea name="content" data-provide="markdown" rows="10" data-width="auto" class="form-control"></textarea>
                       <span class="help-block"> max length 300 chars </span>
                   </div>
           </div>
               
          </form>
    </div>

        <div class="modal-footer">
           <button type="button" data-dismiss="modal" class="btn">Close</button>
           <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>

<div id="collab--modal" class="modal modal-lg form fade in" tabindex="-1" aria-hidden="false">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Start a Collaboration</h3>
      </div>
    <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data" id="blog-form" class="form-horizontal">
                <div class="form-group pt--20">
                    <label class="col-md-2 control-label">Collaboration Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter text">
                        
                    </div>
                </div>
                 <div class="form-group">
                    <label for="PicInputFile" class="col-md-2 control-label">Upload Collab Header Picture</label>
                    <div class="col-md-9">
                        <input type="file" class="btn btn-outline red">
                        <p class="help-block"> 5mb / .jpg / .png</p>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="visiblity">Who Sees?</label>
                  </div>
                    <div class="col-md-3">
                    <select name="visiblity" class="form-control text-default" id="collab-visiblility">
                            <option value="">Who Sees?</option>
                            <option value="followers-only">Followers Only</option>
                            <option value="public">Public</option>
                    </select>
                     </div>
                     <div class="col-md-2">
                    <label class="control-label" for="deadline">Deadline</label>
                  </div>
                    <div class="col-md-4">                                        
                        <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                            <input type="text" class="form-control" data-provide="datepicker">
                            <span class="input-group-btn">
                                <button class="btn default" type="button">
                                    <i class="fa fa-calendar"></i>
                                </button>
                            </span>
                        </div>
                                                           
                     </div>
                  </div>
                 <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="tags">Tags</label>
                  </div>
                    <div class="col-md-9">
                    <select name="tags[]" class="form-control select2" id="tags-list-collab" multiple="multiple" data-maximum-selection-length="3">
                            <option value="autocad">AutoCAD</option>
                            <option value="interior">Interior Design</option>
                            <option value="landscape">Landscape Design</option>
                            <option value="architectural">Architectural Design</option>
                            <option value="conceptual">Conceptual Arch. Design</option>
                            <option value="furniture">Furniture Design</option>
                            <option value="3dmodeling">3D Max Modeling</option>
                            <option value="revit">Revit</option>
                            <option value="sketchup">Sketchup</option>
                            <option value="3dmax">3D Max Render</option>
                            <option value="logodesign">Logo Design</option>
                            <option value="animatedlogo">Animated Logo</option>
                            <option value="bannerads">Banner Ads </option>
                            <option value="photoshop">Photoshop</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="indesign">InDesign</option>
                            <option value="aftereffects">After effects </option>
                            <option value="motionsgraphics">Motion Graphic</option>
                            <option value="websitedesign">Website Design</option>
                            <option value="appdesign">App Design</option>
                            <option value="photoediting">Photo Editing</option>
                            <option value="photoretouching">Photo Retouching</option>
                            <option value="typography">Typography</option>
                            <option value="socialmediapostsdesign">Social Media Posts Design</option>
                            <option value="invitationdesign">Invitation Design</option>
                            <option value="packagingdesign">Packaging Design</option>
                            <option value="flyerdesign">Flyer Design</option>
                            <option value="icondesign">Icon Design</option>
                            <option value="businesscard">Business-card Design</option>
                            <option value="product">Product Design</option>
                            <option value="weddingplanner">Wedding Planner</option>
                            <option value="appdesign">Application Design</option>
                            <option value="webdesign">Web Design</option>
                            <option value="characterdesign">Character Design </option>
                            <option value="Sarcastic">Sarcastic</option>
                            <option value="Caricature">Caricature</option>
                            <option value="Tattoo">Tattoo Design</option>
                            <option value="Painting">Painting</option>
                            <option value="Oil">Oil Painting</option>
                            <option value="Street">Street Art </option>
                            <option value="Photography">Photography</option>
                            <option value="Jewelry">Jewelry Design</option>
                            <option value="Creative">Creative Art</option>
                            <option value="Crafts">Crafts</option> 
                            <option value="fashion">Fashion Design</option>
                            <option value="tshirt">T-shirt Design</option>
                            <optgroup label="Graphics">
                            <option value="Maya">Maya</option>
                            <option value="3dmax">3d Max</option>
                            <option value="cinema4d">Cinema 4D</option>
                            <option value="zbrush">Zbrush</option>
                            <option value="3dmodelling">3D Modelling</option>
                            <option value="3drenderring">3D Renderring</option>
                            <option value="vfx">VFX</option>
                            <option value="vr">VR</option>
                            <option value="3dchar">3D Character Animation</option>
                            <option value="2danimation">2D Animation</option>
                            <option value="motiongraphics">Motion Graphics</option>
                            <option value="2dgame">2D Game</option>
                            <option value="3dgamemodeling">3D Game Modeling</option>
                            <option value="3dgameanimation">3D Game Animation</option>

                            <option value="Script">Script Writer</option>
                            <option value="lyrics">Lyrics Writer</option>
                            <option value="Storytelling">Storytelling</option>
                            <option value="shortstories">Short Stories</option>
                            <option value="adwriter">Advertising Writer</option>
                            <option value="blogger">Blog Writer</option>
                            <option value="creative">Creative Content</option>
                            <option value="slogan">Slogan</option>
                            <option value="htmlcss">HTML/CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="php">PHP</option>
                            <option value="cms">CMS</option>
                            <option value="mysql">MySQL</option>
                            <option value="frontend">Front-End Developer</option>
                            <option value="backend">Back-end Developer</option>
                            <option value="fullstack">Full-Stack Developer</option>
                            <option value="Brainstorming">Brainstorming</option>
                            <option value="Acting">Acting</option>
                            <option value="Vocal">Vocal</option>
                            <option value="Voiceover">Voice Over</option>
                            <option value="singer">Singer</option>
                            <option value="soundtalent">Sound Talent</option>
                            <option value="Musician">Musician</option>
                            <option value="makeup">Makeup Artist </option>
                            <option value="videoediting">Video Editing</option>
                            <option value="soundeffects">Sound Effect</option>
                            <option value="filmdirector">Film Director</option>
                            <option value="musicvideos">Music Videos</option>
                            <option value="mediaproduction">Media Production</option>
                            <option value="Documentary">Documentary Videos</option>
                            <option value="other">Other</option>
                    </select>
                    </div>
                    <!--   <div class="col-md-2">
                                        <label class="control-label" for="tags">Majors</label>
                                      </div> -->
                  <!--   <div class="col-md-4">
                  <select name="majors[]" class="form-control select2" id="majors-list-collab" multiple="multiple" data-maximum-selection-length="3">
                          <option value="1">Major 1</option>
                          <option value="2">Major 2 </option>
                           <option value="3">Major 3</option>
                            <option value="4">Major 4 </option>
                  
                  </select>
                  </div> -->
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="type">Collab Type</label>
                  </div>
                    <div class="col-md-3">
                    <select name="visiblity" class="form-control text-default" id="collab-type">
                            <option value="">Choose Type</option>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                    </select>
                     </div>
                     <div class="col-md-2">
                    <label class="control-label" for="amount">Amount</label>
                  </div>
                    <div class="col-md-4">                                        
  
                              <input type="number" class="form-control collab-amount" placeholder="Numbers only">                             
                     </div>
                  </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="brief">Collaboration Goal/Brief</label>
                  </div>
                  <div class="col-md-9">
                      <textarea class="form-control brief" rows="3" name="brief"></textarea>
                  </div>
                </div>
           <div class="form-group last">
            <div class="col-md-2">
                  <label class="control-label ">Author Collab Post</label>
                  </div>
                   <div class="col-md-9">
                       <textarea name="content" data-provide="markdown" rows="10" data-width="auto" class="form-control" maxlength="300"></textarea>
                       <span class="help-block"> max length 300 chars </span>
                   </div>
           </div>
               
          </form>
    </div>
        <div class="modal-footer">
           <button type="button" data-dismiss="modal" class="btn">Close</button>
           <button type="button" class="btn btn-primary">Submit</button>
        </div>
</div>
  