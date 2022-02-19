<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'Javascript Minifier';
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
                                 by <a target="_blank" href="https://github.com/Skalman/UglifyJS-online">Skalman</a>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <div class="input-style-1">
                            Insert Code
                            <textarea class='c-input' id="in" rows="8" spellcheck="false" tabindex="1" autofocus></textarea>
                        </div>

                        <div id="header-link"></div>

                        <div class="tools">
                        <button class="d-none c-btn c-btn--primary" id="btn-go" tabindex="1">Minify</button>
                            <button class='d-none' id="btn-options" tabindex="2">Options</button>
                            <label class='d-none'><input id="cb-as-i-type" type="checkbox" checked> As I type</label>
                        </div>                        

                        <div class="i-error">
                            <pre id="error"></pre>
                        </div>

                        <div class="input-style-1">
                            Result : The minified output (<span id="stats"></span>)
                            <textarea class='c-input' id="out" spellcheck="false" tabindex="3" rows="10"></textarea>
                        </div>

                        <div class="i-options d-none">
                            <textarea id="options" rows="15" cols="80" spellcheck="false" tabindex="1">
                                {parse: {bare_returns     : false, ecma             : 8, expression       : false, filename         : null, html5_comments   : true, shebang          : true, strict           : false, toplevel         : null }, compress: {arrows           : true, booleans         : true, collapse_vars    : true, comparisons      : true, computed_props   : true, conditionals     : true, dead_code        : true, drop_console     : false, drop_debugger    : true, ecma             : 5, evaluate         : true, expression       : false, global_defs      : {}, hoist_funs       : false, hoist_props      : true, hoist_vars       : false, ie8              : false, if_return        : true, inline           : true, join_vars        : true, keep_classnames  : false, keep_fargs       : true, keep_fnames      : false, keep_infinity    : false, loops            : true, negate_iife      : true, passes           : 1, properties       : true, pure_getters     : "strict", pure_funcs       : null, reduce_funcs     : true, reduce_vars      : true, sequences        : true, side_effects     : true, switches         : true, top_retain       : null, toplevel         : false, typeofs          : true, unsafe           : false, unsafe_arrows    : false, unsafe_comps     : false, unsafe_Function  : false, unsafe_math      : false, unsafe_methods   : false, unsafe_proto     : false, unsafe_regexp    : false, unsafe_undefined : false, unused           : true, warnings         : false }, mangle: {eval             : false, ie8              : false, keep_classnames  : false, keep_fnames      : false, properties       : false, reserved         : [], safari10         : false, toplevel         : false }, output: {ascii_only       : false, beautify         : false, bracketize       : false, comments         : /@license|@preserve|^!/, ecma             : 5, ie8              : false, indent_level     : 4, indent_start     : 0, inline_script    : true, keep_quoted_props: false, max_line_len     : false, preamble         : null, preserve_line    : false, quote_keys       : false, quote_style      : 0, safari10         : false, semicolons       : true, shebang          : true, source_map       : null, webkit           : false, width            : 80, wrap_iife        : false }, wrap: false }
                            </textarea>
                            <div class="tools">
                                <button class="btn-main" id="btn-options-save" tabindex="2">Save</button>
                                <button id="btn-options-reset" tabindex="2">Use defaults</button>
                            </div>
                        </div>          

                        <script src="<?php echo base_url('storage/uglify/lib/minify.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/utils.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/ast.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/parse.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/transform.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/scope.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/output.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/compress.js') ?>"></script>
                        <script src="<?php echo base_url('storage/uglify/lib/propmangle.js') ?>"></script>
                        <!-- The following aren't needed: sourcemap.js, mozilla-ast.js -->

                        <script src="<?php echo base_url('storage/uglify/script.js') ?>"></script>


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
