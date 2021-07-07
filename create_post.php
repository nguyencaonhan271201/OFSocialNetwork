<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js" integrity="sha512-pF+DNRwavWMukUv/LyzDyDMn8U2uvqYQdJN0Zvilr6DDo/56xPDZdDoyPDYZRSL4aOKO/FGKXTpzDyQJ8je8Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.bootstrap4.min.css" integrity="sha512-MMojOrCQrqLg4Iarid2YMYyZ7pzjPeXKRvhW9nZqLo6kPBBTuvNET9DBVWptAo/Q20Fy11EIHM5ig4WlIrJfQw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="postDiv container-fluid d-flex p-0">
    <div class="postUserImg">
        <img src="https://upload.wikimedia.org/wikipedia/vi/f/f5/Dua_Lipa_-_Future_Nostalgia_%28Official_Album_Cover%29.png">
    </div>    


    <div class="container-fluid">
        <form class="postForm" name="form" action="" method="post" enctype="multipart/form-data">
            <div class="d-flex">                                           
                <h2>talking about</h2>                                
                <div class="container-fluid">
                    <select class="postMvVl"></select>
                </div>
            </div>

            <textarea class="postCap" id="post_content" name="caption"></textarea>                           

            <div class="postFile_preview_div">
                <img class="postFile_preview">
            </div>
            <label>
                <i class="bi bi-image"></i>
                <input class="postFile" type="file" name="create_user_img" accept="image/png, image/jpeg" onchange='previewFile(this,$(".postForm .postFile_preview"));'>
            </label>
            
            <select class="postMode">
                <option value="1">Public</option>
                <option value="2">Followers</option>
                <option value="3">Private</option>
            </select>

            <button>submit</button>
        </form>
    </div>
</div>