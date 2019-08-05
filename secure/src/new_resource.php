<div class="col-md-8 order-md-1 card">
    <h2 style="margin-bottom:10px !important;margin-top:10px !important">Adatok</h2>

    <h4 style="margin-bottom:10px !important;margin-top:10px !important">Képek feltöltése:</h4>
    <hr>
        <div class="row">
            <div class="input-group" id="drag_and_drop">
                <form action="/file-upload" class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div><!-- row -->

        <?php 
        
        ?>

<script>

Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 1, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};
</script>
  </div> <!-- col-md-8 order-md-1 card -->

 