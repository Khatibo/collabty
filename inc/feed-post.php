<!-- Social Form Start -->
 <div class="activity--avatar">
            <a href="member-activity-personal.html">
                <img src="img/activity-img/avatar-05.jpg" alt="">
            </a>
       </div>
  <div class="row feed-post pt--10 pb--10 mb--20 clearfix">

    
    <form class="form" action="feed-post.php" method="GET">
      
      <div class="col-md-7 col-sm-5 textarea">
        <textarea placeholder="What's new?" id="cmttextarea"></textarea>
      </div>
     

      <div class="col-md-3 pull-left">
          <label for="submit">
              <button class="btn bg-lighter pull-right post-btn" type="submit"> SUBMIT </button> 
          </label>
        <span class="attachment-upload">
          <label for="file-input">
              <a class="btn bg-lighter">
                 <i class="fa fa-camera"></i>
              </a>
          </label>
        
          <input id="file-input" type="file" />
          </span>
         
         </div>

      
    </form>

  <!--   <form class="search-form pull-left" action="feed-post.php" method="GET">
                                      <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Search" name="query">
                                          <span class="input-group-btn">
                                              <a href="javascript:;" class="btn submit">
                                                  <i class="icon-magnifier"></i>
                                              </a>
                                          </span>
                                      </div>
                                  </form> -->
  </div>
  <script src="commentsRepliesAjax.js"></script>