<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'HTML Compressor';
include "template/header.php";
?>
<section class="section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="titlemb-30 mb-30">
                                <h2><?php echo $title; ?></h2>
                                <p>Compress you html code</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <div class="input-style-1">
                            <label>Kode HTML</label>
                            <textarea id="oldCode" name="oldCode" placeholder="<p>test</p>" rows="10"></textarea>
                        </div>


                        <div class="form-check checkbox-style mb-20">
                            <input class="form-check-input" type="checkbox" id="headstatus" name="headstatus" value="true">
                            <label class="form-check-label" for="headstatus">
                                Don't compress HTML head of document
                            </label>
                        </div>

                        <div class="mb-3">
                            <input class='btn-primary p-1 rounded-md' type="button" name="html-compressor" value="Compress HTML" id="HTMLcompressor"/>
                            <input class='btn-primary p-1 rounded-md' type="button" name="clearText" id="clearText" value="Reset"/>
                        </div>

                        <div class="input-style-1">
                            <label>Result</label>
                            <textarea id="newCode" name="newCode" onclick="this.select()" onfocus="this.select()" readonly="readonly" rows="10"></textarea>
                        </div>

                        <script type="text/javascript">
                            document.getElementById("HTMLcompressor").addEventListener("click", function () {
                                var allHTML = document.getElementById("oldCode").value;
                                var headHTML = "";
                                var removeThis = "";
                                var headstatus = document.getElementById("headstatus").checked;
                                if(headstatus != true){
                                    /* Compress all the things! */
                                    allHTML = allHTML.replace(/(\r\n|\n|\r|\t)/gm,"");
                                    allHTML = allHTML.replace(/\s+/g," ");
                                }else{
                                    /* Don't compress the head */ 
                                    allHTML = allHTML.replace(new RegExp("</HEAD","gi"),'</head');
                                    allHTML = allHTML.replace(new RegExp("</head ","gi"),'</head');

                                    var bodySplit = "</head>"; 
                                    var i = allHTML.indexOf(bodySplit) != -1;
                                    if(i == true){
                                        var bodySplit = "</head>"; 
                                        tempo = allHTML.split(new RegExp(bodySplit,'i'));
                                        headHTML = tempo[0];
                                        allHTML = tempo[1];
                                    }else{
                                        bodySplit = ""; 
                                    }
                                    allHTML = allHTML.replace(/(\r\n|\n|\r|\t)/gm,"");
                                    allHTML = allHTML.replace(/\s+/g," ");
                                    allHTML = headHTML + bodySplit + '\n' + allHTML;
                                }
                                document.getElementById("newCode").value = allHTML;
                            }); 

                            /*reset text areas*/
                            document.getElementById("clearText").addEventListener("click", function () {
                                document.getElementById("oldCode").value = "";
                                document.getElementById("newCode").value = "";
                                document.getElementById("oldCode").focus();
                            });

                            var textBox = document.getElementById("newCode");
                            textBox.onfocus = function() {
                                textBox.select();
                                textBox.onmouseup = function() {
                                    textBox.onmouseup = null;
                                    return false;
                                };
                            };      
                        </script>

                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
    </div>
</section>
<?php
include "template/footer.php";
?>
