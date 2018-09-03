<div class="modal-body">
        <?php
        if(isset($_POST['uploadCollaboration']))
        {
            add_collaboration();
        }
        ?>
            <form action="" method="post" enctype="multipart/form-data" id="blog-form" class="form-horizontal">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <div class="form-group pt--20">
                    <label class="col-md-2 control-label">Collaboration Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter text" name="title">

                    </div>
                </div>
                 <div class="form-group">
                    <label for="PicInputFile" class="col-md-2 control-label">Upload Collab Header Picture</label>
                    <div class="col-md-9">
                        <input type="file" class="btn btn-outline red" name="collab_image">
                        <p class="help-block"> 5mb / .jpg / .png</p>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="collabPrivacy">Whos Sees?</label>
                  </div>
                    <div class="col-md-3">
                    <select name="collabPrivacy" class="form-control text-default" id="collab-visiblility">
                            <option value="">Who Sees?</option>
                        <?php
                        $collabPrivacy = get_privacy();
                        if ($collabPrivacy != "NO")
                        {
                            while ($get = $collabPrivacy->fetch_assoc()) {
                                $privacy_name = $get['privacy'];
                                $privacy_id = $get['id'];
                                echo "
                                    <option value='$privacy_id'>$privacy_name</option>
                                    ";
                            }
                        }
                        ?>
                    </select>
                     </div>
                     <div class="col-md-2">
                    <label class="control-label" for="deadline">Deadline</label>
                  </div>
                    <div class="col-md-4">                                        
                        <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                            <input type="date" class="form-control" name="deadline">
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
                    <div class="col-md-3">
                    <select name="tags[]" class="form-control select2" id="tags-list-collab" multiple>
                        <?php
                        $result = get_categories();
                        if ($result != "NO")
                        {
                            while ($row = $result->fetch_assoc()) {
                                $cat_name = $row['category'];
                                $cat_id = $row['id'];
                                echo "<optgroup label='$cat_name'>";
                                $result2 = get_skills($cat_id);
                                while ($get = $result2->fetch_assoc()) {
                                    $skill_name = $get['skill'];
                                    $skill_id = $get['id'];
                                    echo " <option value='$skill_name'>$skill_name</option>";
                                }
                                echo "</optgroup>";
                            }
                        }
                        else
                        {
                            echo "<optgroup label='No Skill'></optgroup>";
                        }
                        ?>
                    </select>
                    </div>
                      <div class="col-md-2">
                    <label class="control-label" for="tags">Majors</label>
                  </div>
                    <div class="col-md-4">
                    <select name="majors[]" class="form-control select2" id="majors-list-collab" multiple>
                        <?php
                        $majors = get_majors();
                        if ($majors != "NO")
                        {
                            while ($row = $majors->fetch_assoc()) {
                                $major_name = $row['major'];
                                $major_id = $row['id'];
                                echo "
                                <option value='$major_name'>$major_name</option>
                                ";
                            }
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="type">Collab Type</label>
                  </div>
                    <div class="col-md-3">
                    <select name="collab_type" class="form-control text-default" id="collab-type">
                            <option value="">Choose Type</option>
                        <?php
                        $ctype = get_collab_type();
                        if ($ctype != "NO")
                        {
                            while ($row = $ctype->fetch_assoc()) {
                                $type_name = $row['type'];
                                $type_id = $row['id'];
                                echo "
                                <option value='$type_id'>$type_name</option>
                                ";
                            }
                        }
                        ?>
                    </select>
                     </div>
                     <div class="col-md-2">
                    <label class="control-label" for="amount">Amount</label>
                  </div>
                    <div class="col-md-4">
                              <input type="number" class="form-control" placeholder="Numbers only" name="amount">
                     </div>
                  </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="tags">Collaboration Goal/Brief</label>
                  </div>
                  <div class="col-md-9">
                      <textarea class="form-control" rows="3" name="brief"></textarea>
                  </div>
                </div>
           <div class="form-group last">
            <div class="col-md-2">
                  <label class="control-label ">Author Collab Post</label>
                  </div>
                   <div class="col-md-9">
                       <textarea name="post" data-provide="markdown" rows="10" data-width="auto" class="form-control"></textarea>
                       <span class="help-block"> max length 300 chars </span>
                   </div>
           </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn">Close</button>
                    <input type="submit" class="btn btn-primary" name="uploadCollaboration" value="Submit">
                </div>
          </form>
    </div>