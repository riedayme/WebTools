<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'CURL to PHP';
include "template/header.php";
?>
<section class="section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlemb-30 mb-30">
                                <h2><?php echo $title; ?></h2>
                                by <a target="_blank" href="https://incarnate.github.io/curl-to-php/">incarnate.github.io</a>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                      <textarea class='c-input' id="input" rows="10" placeholder="Paste curl here"></textarea>
                      <div id="output" onclick="clip(this)"></div>

                      <style>
                        #input,#output{border:1px solid #CCC;padding:10px;outline:none;font:16px/1.5em Consolas,Menlo,Monaco,'Courier New',monospace;white-space:pre;tab-size:4}
                        #input{width:100%;margin-bottom:20px;overflow-y:auto;resize:vertical}
                        #output{background-color:#F0F8FF;/* "aliceblue" - happened on that by chance choosing a color in chrome inspector tools */
                        word-wrap:break-word;font-size:14px;overflow-x:auto}
                    </style>
                    <link rel="stylesheet" href="<?php echo base_url('storage/curltophp/color-brewer.css') ?>">

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js" integrity="sha512-YHQNqPhxuCY2ddskIbDlZfwY6Vx3L3w9WRbyJCY81xpqLmrM6rL2+LocBgeVHwGY9SXYfQWJ+lcEWx1fKS2s8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                    <script type="text/javascript">
                        var clip=function(e){var n=document.createRange();n.selectNodeContents(e);var a=window.getSelection();a.removeAllRanges(),a.addRange(n)};
                    </script>

                    <script src="<?php echo base_url('storage/curltophp/highlight.pack.js') ?>" type="text/javascript"></script>
                    <script src="<?php echo base_url('storage/curltophp/common.js') ?>" type="text/javascript"></script>
                    <script src="<?php echo base_url('storage/curltophp/curl-to-php.js') ?>" type="text/javascript"></script>                      

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
