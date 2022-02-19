<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'Parse HTML';
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
                                <p>Parse you html code to entities</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js" integrity="sha512-YHQNqPhxuCY2ddskIbDlZfwY6Vx3L3w9WRbyJCY81xpqLmrM6rL2+LocBgeVHwGY9SXYfQWJ+lcEWx1fKS2s8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                        <script type="text/javascript">
                            var escapeHtmlArray = {
                                "&": "&amp;",
                                "<": "&lt;",
                                ">": "&gt;",
                                '"': "&quot;",
                                "'": "&apos;"
                            };

                            function setToEditor(e) {
                                $("#input").val(""), $("#input").val(e.trim()), $("#temp").click()
                            }

                            function escapeHtml(e) {
                                return String(e).replace(/[&<>"']/g, function(e) {
                                    return escapeHtmlArray[e]
                                })
                            }

                            function unEscapeHtml(e) {
                                return String(e).replace(/&amp;/g, "&").replace(/&quot;/g, '"').replace(/&apos;/g, "'").replace(/&lt;/g, "<").replace(/&gt;/g, ">")
                            }

                            function escapeSQL(e) {
                                return String(e).replace(/'/g, '"')
                            }

                            function unEscapeSQL(e) {
                                return String(e).replace(/"/g, "'")
                            }

                            function escapeCSV(e) {
                                var r = String(e).replace(/"/g, '""');
                                return '"' != r.charAt(0) && (r = '"' + r), '"' != r.charAt(r.length - 1) && (r += '"'), r
                            }

                            function unEscapeCSV(e) {
                                return '"' == e.charAt(0) && (e = e.substring(1, e.length - 1)), '"' == e.charAt(e.length - 1) && (e = e.substring(0, e.length - 2)), String(e).replace(/""/g, '"')
                            }

                            function escapeJava(e) {
                                var r = "",
                                a = 0;
                                for (a = 0; a < e.length; a++) r += javaEscapeCode(e.charAt(a), !1);
                                    return r
                            }

                            function unEscapeJava(e) {
                                return e.replace(/\\r/g, "\r").replace(/\\n/g, "\n").replace(/\\'/g, "'").replace(/\\\"/g, '"').replace(/\\\\/g, "\\").replace(/\\t/g, "\t").replace(/\\b/g, "\b").replace(/\\f/g, "\f")
                            }

                            function unEscapeJavaScript(e) {
                                return e.replace(/\\r/g, "\r").replace(/\\n/g, "\n").replace(/\\'/g, "'").replace(/\\\"/g, '"').replace(/\\&/g, "&").replace(/\\\\/g, "\\").replace(/\\t/g, "\t").replace(/\\b/g, "\b").replace(/\\f/g, "\f").replace(/\\x2F/g, "/").replace(/\\x3C/g, "<").replace(/\\x3E/g, ">")
                            }

                            function javaEscapeCode(e, r) {
                                if (!r || "\n" != e) switch (e.charAt(0)) {
                                    case "\n":
                                    return "\\n";
                                    case "\r":
                                    return "\\r";
                                    case "'":
                                    return "\\'";
                                    case '"':
                                    return '\\"';
                                    case "\\":
                                    return "\\\\";
                                    case "\t":
                                    return "\\t";
                                    case "\b":
                                    return "\\b";
                                    case "\f":
                                    return "\\f";
                                    default:
                                    return e
                                }
                            }

                            function escapeJavascript(e) {
                                var r = "",
                                a = 0;
                                for (a = 0; a < e.length; a++) r += javascriptEscapeCode(e.charAt(a), !1);
                                    return r
                            }

                            function javascriptEscapeCode(e) {
                                switch (e.charAt(0)) {
                                    case "\r":
                                    return "\\r";
                                    case "\n":
                                    return "\\n";
                                    case "\v":
                                    return "\\v";
                                    case "'":
                                    return "\\'";
                                    case '"':
                                    return '\\"';
                                    case "&":
                                    return "\\&";
                                    case "\\":
                                    return "\\\\";
                                    case "\t":
                                    return "\\t";
                                    case "\b":
                                    return "\\b";
                                    case "\f":
                                    return "\\f";
                                    default:
                                    return e
                                }
                            }

                            function makeLink(e, r) {
                                e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                                var a = new RegExp("[\\?&]" + e + "=([^&#]*)").exec(r);
                                return null == a ? "" : decodeURIComponent(a[1].replace(/\+/g, " "))
                            }

                            function unLink(e) {
                                var r = makeLink("url", e);
                                return r || (r = makeLink("adurl", e)), r
                            }

                            function escapewithpre(e) {
                                var r = $("#input").val(),
                                a = $("#viewName").val().split("-")[0];
                                null != a && 0 != a.trim().length && ("html" == a.trim().toLowerCase() || "xml" == a.trim().toLowerCase() ? r = escapeHtml(r) : "java" == a.trim().toLowerCase() || "csharp" == a.trim().toLowerCase() ? r = escapeJava(r) : "javascript" == a.trim().toLowerCase() || "json" == a.trim().toLowerCase() ? r = escapeJavascript(r) : "sql" == a.trim().toLowerCase() ? r = escapeSQL(r) : "csv" == a.trim().toLowerCase() ? r = escapeCSV(r) : "un" == a.trim().toLowerCase() && (r = unLink(r)), $("#output").val("<pre>"+r+"</pre>"))
                            }

                            function escapewithprecode(e) {
                                var r = $("#input").val(),
                                a = $("#viewName").val().split("-")[0];
                                null != a && 0 != a.trim().length && ("html" == a.trim().toLowerCase() || "xml" == a.trim().toLowerCase() ? r = escapeHtml(r) : "java" == a.trim().toLowerCase() || "csharp" == a.trim().toLowerCase() ? r = escapeJava(r) : "javascript" == a.trim().toLowerCase() || "json" == a.trim().toLowerCase() ? r = escapeJavascript(r) : "sql" == a.trim().toLowerCase() ? r = escapeSQL(r) : "csv" == a.trim().toLowerCase() ? r = escapeCSV(r) : "un" == a.trim().toLowerCase() && (r = unLink(r)), $("#output").val("<pre><code>"+r+"</code></pre>"))
                            }

                            function escape(e) {
                                var r = $("#input").val(),
                                a = $("#viewName").val().split("-")[0];
                                null != a && 0 != a.trim().length && ("html" == a.trim().toLowerCase() || "xml" == a.trim().toLowerCase() ? r = escapeHtml(r) : "java" == a.trim().toLowerCase() || "csharp" == a.trim().toLowerCase() ? r = escapeJava(r) : "javascript" == a.trim().toLowerCase() || "json" == a.trim().toLowerCase() ? r = escapeJavascript(r) : "sql" == a.trim().toLowerCase() ? r = escapeSQL(r) : "csv" == a.trim().toLowerCase() ? r = escapeCSV(r) : "un" == a.trim().toLowerCase() && (r = unLink(r)), $("#output").val(r))
                            }

                            function unescape(e) {
                                var r = $("#input").val(),
                                a = $("#viewName").val().split("-")[0];
                                null != a && 0 != a.trim().length && ("html" == a.trim().toLowerCase() || "xml" == a.trim().toLowerCase() ? r = unEscapeHtml(r) : "java" == a.trim().toLowerCase() || "csharp" == a.trim().toLowerCase() ? r = unEscapeJava(r) : "javascript" == a.trim().toLowerCase() || "json" == a.trim().toLowerCase() ? r = unEscapeJavaScript(r) : "sql" == a.trim().toLowerCase() ? r = unEscapeSQL(r) : "csv" == a.trim().toLowerCase() && (r = unEscapeCSV(r)), $("#output").val(r))
                            } 
                        </script>


                        <div class="input-style-1">
                            <label>Input HTML</label>
                            <input id="viewName" type="hidden" value="html-escape-unescape" />
                            <textarea id="input" placeholder="<p>test</p>" rows="10"></textarea>
                        </div>

                        <div class="mb-4">
                            <input class="btn-primary rounded-md p-1" id="temp" onclick="escape(this)" title="Escape String" type="button" value="Escape" />
                            <input class="btn-primary rounded-md p-1" id="escapewithpre" onclick="escapewithpre(this)" title="Escape String" type="button" value="Escape Pre" />
                            <input class="btn-primary rounded-md p-1" id="escapewithprecode" onclick="escapewithprecode(this)" title="Escape String" type="button" value="Escape Pre Code" />
                            <input class="btn-primary rounded-md p-1" id="unescape" onclick="unescape(this);" title="Unescape String" type="button" value="Unescape" /> 
                        </div>


                        <div class="input-style-1">
                            <label>The Result String: </label>
                            <input id="viewName" type="hidden" value="html-escape-unescape" />
                             <textarea class="c-input" id="output" onclick="select()" placeholder="Output" rows="10"></textarea>
                        </div>

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
