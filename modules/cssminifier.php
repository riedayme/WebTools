<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'CSS Minifier';
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
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <div class="input-style-1">
                            <textarea rows="15" autofocus="" id="cssField" placeholder="Paste your CSS code here..." spellcheck="false"></textarea>
                        </div>

                        <input class="opt1" id="stripAllComment" type="checkbox" /> 
                        <label for="stripAllComment">Strip all comments</label>

                        <input class="opt2" id="superCompact" type="checkbox" /> 
                        <label for="superCompact">Super compact</label>

                        <br>

                        <input class="opt3" id="betterIndentation" type="checkbox" /> 
                        <label for="betterIndentation">Keep indentation</label>

                        <input checked="" class="opt4" id="keepLastComma" type="checkbox" /> 
                        <label for="keepLastComma">Remove the last semicolon</label>

                        <div class='mt-3'>
                            <button class='btn-primary p-1' onclick="compressCSS(&quot;cssField&quot;);">Compress CSS</button>
                            <button class='btn-primary p-1' onclick="clearField(&quot;cssField&quot;);">Clear Field</button> 
                            <button class='btn-primary p-1' onclick="selectAll(&quot;cssField&quot;);">Select All</button>
                        </div>

                        <script type="text/javascript">
                            function get(e) {
                                return document.getElementById(e)
                            }

                            function compressCSS(e) {
                                var a = get(e),
                                c = /@(media|-w|-m|-o|keyframes|page)(.*?)\{([\s\S]+?)?\}\}/gi,
                                n = a.value,
                                t = n.length;
                                n = sa.checked || sc.checked ? n.replace(/\/\*[\w\W]*?\*\//gm, "") : n.replace(/(\n+)?(\/\*[\w\W]*?\*\/)(\n+)?/gm, "\n$2\n"), n = n.replace(/([\n\r\t\s ]+)?([\,\:\;\{\}]+?)([\n\r\t\s ]+)?/g, "$2"), n = sc.checked ? n : n.replace(/\}(?!\})/g, "}\n"), n = bi.checked ? n.replace(c, function(e) {
                                    return e.replace(/\n+/g, "\n  ")
                                }) : n.replace(c, function(e) {
                                    return e.replace(/\n+/g, "")
                                }), n = bi.checked && !sc.checked ? n.replace(/\}\}/g, "}\n}") : n, n = bi.checked && !sc.checked ? n.replace(/@(media|-w|-m|-o|keyframes)(.*?)\{/g, "@$1$2{\n  ") : n, n = cm.checked ? n.replace(/;\}/g, "}") : n.replace(/\}/g, ";}").replace(/;+\}/g, ";}").replace(/\};\}/g, "}}"), n = n.replace(/\:0(px|em|pt)/gi, ":0"), n = n.replace(/ 0(px|em|pt)/gi, " 0"), n = n.replace(/\s+\!important/gi, "!important"), n = n.replace(/(^\n+|\n+$)/, ""), a.value = n
                            }

                            function clearField(e) {
                                var a = get(e);
                                a.value = "", a.focus()
                            }

                            function selectAll(e) {
                                get(e).focus(), get(e).select()
                            }
                            var sa = get("stripAllComment"),
                            sc = get("superCompact"),
                            cm = get("keepLastComma"),
                            bi = get("betterIndentation"),
                            bs = get("breakSelector"),
                            tt = get("toTab"),
                            sb = get("spaceBetween"),
                            ip = get("inlineSingleProp"),
                            rs = get("removeLastSemicolon"),
                            il = get("inlineLayout"),
                            si = get("singleBreak");
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
