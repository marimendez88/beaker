<?php

/* ElaoErrorNotifierBundle::mail.html.twig */
class __TwigTemplate_948d4bf9959041ecc7a4f8d1e00f9d8b405bf6baa7b58426ed5c6de3414c64ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e760f4e5ef3b1aefceec7616a1df417c7b37079d42a9ff0fabfee9062eda8ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e760f4e5ef3b1aefceec7616a1df417c7b37079d42a9ff0fabfee9062eda8ee3->enter($__internal_e760f4e5ef3b1aefceec7616a1df417c7b37079d42a9ff0fabfee9062eda8ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ElaoErrorNotifierBundle::mail.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo ")</title>
        <style type=\"text/css\">
        html {
            background: #eee;
        }

        body {
            font: 11px Verdana, Arial, sans-serif;
            color: #333;
        }

        .sf-exceptionreset, .sf-exceptionreset .block, .sf-exceptionreset #message {
            margin: auto;
        }

        img {
            border: 0;
        }

        .clear {
            clear: both;
            height: 0;
            font-size: 0;
            line-height: 0;
        }

        .clear_fix:after {
            content: \"\\0020\";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }
        .clear_fix {
            display: inline-block;
        }
        * html .clear_fix {
            height: 1%;
        }
        .clear_fix {
            display: block;
        }

        .header {
            padding: 30px 30px 20px 30px;
        }

        pre {
            white-space: normal;
            font-family: Arial, Helvetica, sans-serif;
        }

        table td {
            text-align: left;
        }

        /*
        Copyright (c) 2010, Yahoo! Inc. All rights reserved.
        Code licensed under the BSD License:
        http://developer.yahoo.com/yui/license.html
        version: 3.1.2
        build: 56
        */
        .sf-exceptionreset html{color:#000;background:#FFF;}.sf-exceptionreset body,.sf-exceptionreset div,.sf-exceptionreset dl,.sf-exceptionreset dt,.sf-exceptionreset dd,.sf-exceptionreset ul,.sf-exceptionreset ol,.sf-exceptionreset li,.sf-exceptionreset h1,.sf-exceptionreset h2,.sf-exceptionreset h3,.sf-exceptionreset h4,.sf-exceptionreset h5,.sf-exceptionreset h6,.sf-exceptionreset pre,.sf-exceptionreset code,.sf-exceptionreset form,.sf-exceptionreset fieldset,.sf-exceptionreset legend,.sf-exceptionreset input,.sf-exceptionreset textarea,.sf-exceptionreset p,.sf-exceptionreset blockquote,.sf-exceptionreset th,.sf-exceptionreset td{margin:0;padding:0;}.sf-exceptionreset .sf-exceptionreset fieldset,.sf-exceptionreset img{border:0;}.sf-exceptionreset address,.sf-exceptionreset caption,.sf-exceptionreset cite,.sf-exceptionreset code,.sf-exceptionreset dfn,.sf-exceptionreset em,.sf-exceptionreset strong,.sf-exceptionreset th,.sf-exceptionreset var{font-style:normal;font-weight:normal;}.sf-exceptionreset li{list-style:none;}.sf-exceptionreset caption,.sf-exceptionreset th{text-align:left;}.sf-exceptionreset h1,.sf-exceptionreset h2,.sf-exceptionreset h3,.sf-exceptionreset h4,.sf-exceptionreset h5,.sf-exceptionreset h6{font-size:100%;font-weight:normal;}.sf-exceptionreset q:before,.sf-exceptionreset q:after{content:'';}.sf-exceptionreset abbr,.sf-exceptionreset acronym{border:0;font-variant:normal;}.sf-exceptionreset sup{vertical-align:text-top;}.sf-exceptionreset sub{vertical-align:text-bottom;}.sf-exceptionreset input,.sf-exceptionreset textarea,.sf-exceptionreset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-exceptionreset input,.sf-exceptionreset textarea,.sf-exceptionreset select{*font-size:100%;}.sf-exceptionreset legend{color:#000;}

        .sf-exceptionreset html,
        .sf-exceptionreset body {
            width: 100%;
            min-height: 100%;
            _height: 100%;
            margin: 0;
            padding: 0;
        }
        .sf-exceptionreset body {
            font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
            text-align: left;
            background-color: #efefef;
        }

        .sf-exceptionreset abbr {
            border-bottom: 1px dotted #000;
            cursor: help;
        }

        .sf-exceptionreset p {
            font-size: 14px;
            line-height: 20px;
            color: #868686;
            padding-bottom: 20px;
        }

        .sf-exceptionreset strong {
            color: #313131;
            font-weight: bold;
        }

        .sf-exceptionreset a {
            color: #6c6159;
        }
        .sf-exceptionreset a img {
            border: none;
        }
        .sf-exceptionreset a:hover {
            text-decoration: underline;
        }

        .sf-exceptionreset em {
            font-style: italic;
        }

        .sf-exceptionreset h2,
        .sf-exceptionreset h3 {
            font-weight: bold;
        }
        .sf-exceptionreset h1 {
            font-family: Georgia, \"Times New Roman\", Times, serif;
            font-size: 20px;
            color: #313131;
            word-break: break-all;
        }

        .sf-exceptionreset li {
            padding-bottom: 10px;
        }

        .sf-exceptionreset .traces {
            padding-bottom: 14px;
        }
        .sf-exceptionreset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
            white-space: break-word;
        }
        .sf-exceptionreset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-exceptionreset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-exceptionreset .traces li:after {
            content: \"\\00A0\";
        }

        .sf-exceptionreset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }

        .sf-exceptionreset .block,
        .sf-exceptionreset .block_exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
        }
        .sf-exceptionreset .block {
            background-color: #FFFFFF;
            border: 1px solid #dfdfdf;
            padding: 40px 50px;
        }
        .sf-exceptionreset .block_exception div {
            color: #313131;
            font-size: 10px;
        }

        .sf-exceptionreset .block_exception_detected .illustration_exception,
        .sf-exceptionreset .block_exception_detected .text_exception {
            float: left;
        }
        .sf-exceptionreset .block_exception_detected .illustration_exception {
            width: 152px;
        }
        .sf-exceptionreset .block_exception_detected .text_exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }

        .sf-exceptionreset .text_exception .open_quote,
        .sf-exceptionreset .text_exception .close_quote {
            position: absolute;
        }
        .sf-exceptionreset .open_quote {
            top: 0;
            left: 0;
        }
        .sf-exceptionreset .close_quote {
            bottom: 0;
            right: 50px;
        }

        .sf-exceptionreset .block_exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-exceptionreset .block_exception p a,
        .sf-exceptionreset .block_exception p a:hover {
            color: #565656;
        }

        .sf-exceptionreset h2 {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            padding-bottom: 16px;
        }

        .sf-exceptionreset li a {
            background: none;
            color: #868686;
            text-decoration: none;
        }

        .sf-exceptionreset li a:hover {
            background: none;
            color: #313131;
            text-decoration: underline;
        }

        .sf-exceptionreset .logs h2 {
            float: left;
            width: 654px;
        }

        .sf-exceptionreset .error_count {
            float: right;
            width: 170px;
            text-align: right;
        }

        .sf-exceptionreset .error_count span {
            display: inline-block;
            background-color: #aacd4e;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: white;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-exceptionreset .toggle {
            vertical-align: middle;
        }

        .sf-exceptionreset .linked ul,
        .sf-exceptionreset .linked li {
            display: inline;
        }

        .sf-exceptionreset #output_content {
            color: #000;
            font-size: 12px;
        }

        .sf-exceptionreset ol {
            padding: 10px 0;
        }
        .sf-exceptionreset ol li {
            list-style: decimal;
            margin-left: 20px;
            padding: 2px;
            padding-bottom: 20px;
        }
        .sf-exceptionreset ol ol li {
            list-style-position: inside;
            margin-left: 0;
            white-space: nowrap;
            font-size: 12px;
            padding-bottom: 0;
        }
        .sf-exceptionreset li .selected {
            background-color: #ffd;
        }
        </style>
    </head>
    <body>
        <div id=\"content\">
                <div class=\"sf-exceptionreset\">
                    <div class=\"block_exception\">
                        <div class=\"block_exception_detected clear_fix\">
                            <table style=\"background-color: #F6F6F6; border: 1px solid #DFDFDF; padding: 30px 28px; width: 100%;\">
                                <tr>
                                    <td style=\"width: 150px;\">
                                    </td>
                                    <td>
                                        <div class=\"text_exception\">
                                            <h1>";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h1>
                                            <div>
                                                <strong>";
        // line 304
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</strong> - ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()));
        echo "
                                            </div>
                                            <!--<div class=\"linked\"><span><strong>1</strong> linked Exception:</span>
                                                    <ul>
                                                            <li>
                                                                    <abbr title=\"Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException\">ResourceNotFoundException</abbr>
                                                            </li>
                                                    </ul>
                                            </div>-->
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>";
        // line 322
        echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Information:</h4>
                            <strong>Generated at: </strong> ";
        // line 326
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i:s"), "html", null, true);
        echo " <br />
                            <strong>Class name: </strong> ";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class", array()), "html", null, true);
        echo " <br />
                            <strong>Message: </strong> ";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " <br />
                            ";
        // line 329
        if ((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request"))) {
            echo "<strong>Uri: </strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "uri", array()), "html", null, true);
            echo " <br />";
        }
        // line 330
        echo "                            ";
        if ((isset($context["command"]) ? $context["command"] : $this->getContext($context, "command"))) {
            // line 331
            echo "                                <strong>Command:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["command"]) ? $context["command"] : $this->getContext($context, "command")), "name", array()), "html", null, true);
            echo "<br>
                            ";
        }
        // line 333
        echo "                        </td>
                    </tr>
                </table>";
        // line 338
        echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <div class=\"block\">
                                <h4>Stack Trace</h4>
                                ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 344
            echo "                                    ";
            // line 345
            echo "                                    <ol class=\"traces list_exception\" id=\"traces\">
                                        ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["e"], "trace", array()));
            foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
                // line 347
                echo "                                            ";
                // line 348
                echo "                                            <li>
                                            ";
                // line 349
                if ($this->getAttribute($context["trace"], "class", array(), "any", true, true)) {
                    // line 350
                    echo "                                                at
                                                <strong>
                                                    <abbr title=\"";
                    // line 352
                    echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                    echo "</abbr>
                                                    ";
                    // line 353
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["trace"], "type", array()) . $this->getAttribute($context["trace"], "function", array())), "html", null, true);
                    echo "
                                                </strong>
                                                ";
                    // line 355
                    if ($this->getAttribute($context["trace"], "args", array(), "any", true, true)) {
                        // line 356
                        echo "                                                    ";
                        if (twig_test_iterable($this->getAttribute($context["trace"], "args", array()))) {
                            // line 357
                            echo "                                                        ";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute($context["trace"], "args", array()));
                            echo "
                                                    ";
                        } else {
                            // line 359
                            echo "                                                        (";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "args", array()), "html", null, true);
                            echo ")
                                                    ";
                        }
                        // line 361
                        echo "                                                ";
                    }
                    // line 362
                    echo "                                            ";
                } else {
                    // line 363
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "function", array()), "html", null, true);
                    echo "()
                                            ";
                }
                // line 365
                echo "                                            ";
                if (((($this->getAttribute($context["trace"], "file", array(), "any", true, true) && $this->getAttribute($context["trace"], "file", array())) && $this->getAttribute($context["trace"], "line", array(), "any", true, true)) && $this->getAttribute($context["trace"], "line", array()))) {
                    // line 366
                    echo "                                                ";
                    echo (($this->getAttribute($context["trace"], "function", array())) ? ("<br />") : (""));
                    echo "
                                                in ";
                    // line 367
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute($context["trace"], "file", array()), $this->getAttribute($context["trace"], "line", array()));
                    echo "&nbsp;
                                                <div id=\"trace_";
                    // line 368
                    echo twig_escape_filter($this->env, ("0_" . $context["i"]), "html", null, true);
                    echo "\" class=\"trace\">
                                                    ";
                    // line 369
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute($context["trace"], "file", array()), $this->getAttribute($context["trace"], "line", array()));
                    echo "
                                                </div>
                                            ";
                }
                // line 372
                echo "                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "                                    </ol>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        echo "                            </div>
                        </td>
                    </tr>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>
                ";
        // line 387
        if ((isset($context["command_input"]) ? $context["command_input"] : $this->getContext($context, "command_input"))) {
            // line 388
            echo "                    ";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["command_input"]) ? $context["command_input"] : $this->getContext($context, "command_input")), "options", array()))) {
                // line 390
                echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                            <tr>
                                <td>
                                    <h4>Command Options</h4>
                                    <table>
                                    <tr>
                                        <th>Variable</th>
                                        <th>Value</th>
                                    </tr>
                                    ";
                // line 399
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["command_input"]) ? $context["command_input"] : $this->getContext($context, "command_input")), "options", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 400
                    echo "                                        <tr>
                                            <th style=\"border-top: 1px solid #999; vertical-align: top;\"><pre>";
                    // line 401
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " =</pre></th>
                                            <td style=\"border-top: 1px solid #999\">";
                    // line 402
                    echo $this->env->getExtension('Elao\ErrorNotifierBundle\Twig\DumpyTwigFilter')->preYamlDump($context["value"], 2);
                    echo "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 405
                echo "                                </table>
                                </td>
                            </tr>
                        </table>
                    ";
            }
            // line 410
            echo "                    ";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["command_input"]) ? $context["command_input"] : $this->getContext($context, "command_input")), "arguments", array()))) {
                // line 412
                echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                            <tr>
                                <td>

                                    <h4>Command Arguments</h4>
                                    <table>

                                        <tr>
                                            <th>Variable</th>
                                            <th>Value</th>
                                        </tr>
                                        ";
                // line 423
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["command_input"]) ? $context["command_input"] : $this->getContext($context, "command_input")), "arguments", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 424
                    echo "                                            <tr>
                                                <th style=\"border-top: 1px solid #999; vertical-align: top;\"><pre>";
                    // line 425
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " =</pre></th>
                                                <td style=\"border-top: 1px solid #999\">";
                    // line 426
                    echo $this->env->getExtension('Elao\ErrorNotifierBundle\Twig\DumpyTwigFilter')->preYamlDump($context["value"], 2);
                    echo "</td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 429
                echo "                                    </table>
                                </td>
                            </tr>
                        </table>
                    ";
            }
            // line 434
            echo "                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>
                ";
        }
        // line 440
        echo "                ";
        if (array_key_exists("context", $context)) {
            // line 442
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                        <tr>
                            <td>
                                <h4>Scope Variables</h4>

                                ";
            // line 447
            if (twig_length_filter($this->env, (isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")))) {
                // line 448
                echo "                                    <table>
                                        <tr>
                                            <th>Variable</th>
                                            <th>Value</th>
                                        </tr>
                                        ";
                // line 453
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 454
                    echo "                                            <tr>
                                                <th style=\"border-top: 1px solid #999; vertical-align: top;\"><pre>\$";
                    // line 455
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " =</pre></th>
                                                <td style=\"border-top: 1px solid #999\">";
                    // line 456
                    echo $this->env->getExtension('Elao\ErrorNotifierBundle\Twig\DumpyTwigFilter')->preYamlDump($context["value"], 2);
                    echo "</td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 459
                echo "                                    </table>
                                ";
            } else {
                // line 461
                echo "                                    <p>
                                        <em>No variables captured</em>
                                    </p>
                                ";
            }
            // line 465
            echo "                            </td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td style=\"height: 20px;\"></td>
                        </tr>
                    </table>
                ";
        }
        // line 475
        echo "                ";
        if ((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request"))) {
            // line 477
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request GET Parameters</h4>

                            ";
            // line 482
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()))) {
                // line 483
                echo "                                ";
                $this->loadTemplate("ElaoErrorNotifierBundle::_bag.html.twig", "ElaoErrorNotifierBundle::mail.html.twig", 483)->display(array("bag" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array())));
                // line 484
                echo "                            ";
            } else {
                // line 485
                echo "                                <p>
                                    <em>No GET parameters</em>
                                </p>
                            ";
            }
            // line 489
            echo "                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>";
            // line 500
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request POST Parameters</h4>

                            ";
            // line 505
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "request", array()), "all", array()))) {
                // line 506
                echo "                                ";
                $this->loadTemplate("ElaoErrorNotifierBundle::_bag.html.twig", "ElaoErrorNotifierBundle::mail.html.twig", 506)->display(array("bag" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "request", array())));
                // line 507
                echo "                            ";
            } else {
                // line 508
                echo "                                <p>
                                    <em>No POST parameters</em>
                                </p>
                            ";
            }
            // line 512
            echo "                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>";
            // line 523
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Attributes</h4>

                            ";
            // line 528
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "attributes", array()), "all", array()))) {
                // line 529
                echo "                                ";
                $this->loadTemplate("ElaoErrorNotifierBundle::_bag.html.twig", "ElaoErrorNotifierBundle::mail.html.twig", 529)->display(array("bag" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "attributes", array())));
                // line 530
                echo "                            ";
            } else {
                // line 531
                echo "                                <p>
                                    <em>No Request Attributes</em>
                                </p>
                            ";
            }
            // line 535
            echo "                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>";
            // line 546
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Cookies</h4>

                            ";
            // line 551
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "cookies", array()), "all", array()))) {
                // line 552
                echo "                                ";
                $this->loadTemplate("ElaoErrorNotifierBundle::_bag.html.twig", "ElaoErrorNotifierBundle::mail.html.twig", 552)->display(array("bag" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "cookies", array())));
                // line 553
                echo "                            ";
            } else {
                // line 554
                echo "                                <p>
                                    <em>No Request Cookies</em>
                                </p>
                            ";
            }
            // line 558
            echo "                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>";
            // line 569
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Headers</h4>
                            ";
            // line 573
            $this->loadTemplate("ElaoErrorNotifierBundle::_bag.html.twig", "ElaoErrorNotifierBundle::mail.html.twig", 573)->display(array("bag" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "headers", array())));
            // line 574
            echo "                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>";
            // line 585
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Server Parameters </h4>
                            ";
            // line 589
            $this->loadTemplate("ElaoErrorNotifierBundle::_bag.html.twig", "ElaoErrorNotifierBundle::mail.html.twig", 589)->display(array("bag" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "server", array())));
            // line 590
            echo "                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>";
            // line 601
            echo "<table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Session Attributes</h4>

                            ";
            // line 606
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()), "all", array()))) {
                // line 607
                echo "                                <table>
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                    </tr>
                                    ";
                // line 612
                $context["attributes"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()), "all", array());
                // line 613
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 614
                    echo "                                        <tr>
                                            <th>";
                    // line 615
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</th>
                                            <td>";
                    // line 616
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->dump($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), $context["key"], array(), "array")), "html", null, true);
                    echo "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 619
                echo "                                </table>
                            ";
            } else {
                // line 621
                echo "                                <p>
                                    <em>No session attributes</em>
                                </p>
                            ";
            }
            // line 625
            echo "                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>
        ";
        }
        // line 635
        echo "
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_e760f4e5ef3b1aefceec7616a1df417c7b37079d42a9ff0fabfee9062eda8ee3->leave($__internal_e760f4e5ef3b1aefceec7616a1df417c7b37079d42a9ff0fabfee9062eda8ee3_prof);

    }

    public function getTemplateName()
    {
        return "ElaoErrorNotifierBundle::mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 635,  879 => 625,  873 => 621,  869 => 619,  860 => 616,  856 => 615,  853 => 614,  848 => 613,  846 => 612,  839 => 607,  837 => 606,  830 => 601,  820 => 590,  818 => 589,  812 => 585,  802 => 574,  800 => 573,  794 => 569,  784 => 558,  778 => 554,  775 => 553,  772 => 552,  770 => 551,  763 => 546,  753 => 535,  747 => 531,  744 => 530,  741 => 529,  739 => 528,  732 => 523,  722 => 512,  716 => 508,  713 => 507,  710 => 506,  708 => 505,  701 => 500,  691 => 489,  685 => 485,  682 => 484,  679 => 483,  677 => 482,  670 => 477,  667 => 475,  655 => 465,  649 => 461,  645 => 459,  636 => 456,  632 => 455,  629 => 454,  625 => 453,  618 => 448,  616 => 447,  609 => 442,  606 => 440,  598 => 434,  591 => 429,  582 => 426,  578 => 425,  575 => 424,  571 => 423,  558 => 412,  555 => 410,  548 => 405,  539 => 402,  535 => 401,  532 => 400,  528 => 399,  517 => 390,  514 => 388,  512 => 387,  499 => 376,  492 => 374,  485 => 372,  479 => 369,  475 => 368,  471 => 367,  466 => 366,  463 => 365,  457 => 363,  454 => 362,  451 => 361,  445 => 359,  439 => 357,  436 => 356,  434 => 355,  429 => 353,  423 => 352,  419 => 350,  417 => 349,  414 => 348,  412 => 347,  408 => 346,  405 => 345,  403 => 344,  399 => 343,  392 => 338,  388 => 333,  382 => 331,  379 => 330,  373 => 329,  369 => 328,  365 => 327,  361 => 326,  355 => 322,  335 => 304,  330 => 302,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>{{ exception.message }} ({{ status_code }})</title>
        <style type=\"text/css\">
        html {
            background: #eee;
        }

        body {
            font: 11px Verdana, Arial, sans-serif;
            color: #333;
        }

        .sf-exceptionreset, .sf-exceptionreset .block, .sf-exceptionreset #message {
            margin: auto;
        }

        img {
            border: 0;
        }

        .clear {
            clear: both;
            height: 0;
            font-size: 0;
            line-height: 0;
        }

        .clear_fix:after {
            content: \"\\0020\";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }
        .clear_fix {
            display: inline-block;
        }
        * html .clear_fix {
            height: 1%;
        }
        .clear_fix {
            display: block;
        }

        .header {
            padding: 30px 30px 20px 30px;
        }

        pre {
            white-space: normal;
            font-family: Arial, Helvetica, sans-serif;
        }

        table td {
            text-align: left;
        }

        /*
        Copyright (c) 2010, Yahoo! Inc. All rights reserved.
        Code licensed under the BSD License:
        http://developer.yahoo.com/yui/license.html
        version: 3.1.2
        build: 56
        */
        .sf-exceptionreset html{color:#000;background:#FFF;}.sf-exceptionreset body,.sf-exceptionreset div,.sf-exceptionreset dl,.sf-exceptionreset dt,.sf-exceptionreset dd,.sf-exceptionreset ul,.sf-exceptionreset ol,.sf-exceptionreset li,.sf-exceptionreset h1,.sf-exceptionreset h2,.sf-exceptionreset h3,.sf-exceptionreset h4,.sf-exceptionreset h5,.sf-exceptionreset h6,.sf-exceptionreset pre,.sf-exceptionreset code,.sf-exceptionreset form,.sf-exceptionreset fieldset,.sf-exceptionreset legend,.sf-exceptionreset input,.sf-exceptionreset textarea,.sf-exceptionreset p,.sf-exceptionreset blockquote,.sf-exceptionreset th,.sf-exceptionreset td{margin:0;padding:0;}.sf-exceptionreset .sf-exceptionreset fieldset,.sf-exceptionreset img{border:0;}.sf-exceptionreset address,.sf-exceptionreset caption,.sf-exceptionreset cite,.sf-exceptionreset code,.sf-exceptionreset dfn,.sf-exceptionreset em,.sf-exceptionreset strong,.sf-exceptionreset th,.sf-exceptionreset var{font-style:normal;font-weight:normal;}.sf-exceptionreset li{list-style:none;}.sf-exceptionreset caption,.sf-exceptionreset th{text-align:left;}.sf-exceptionreset h1,.sf-exceptionreset h2,.sf-exceptionreset h3,.sf-exceptionreset h4,.sf-exceptionreset h5,.sf-exceptionreset h6{font-size:100%;font-weight:normal;}.sf-exceptionreset q:before,.sf-exceptionreset q:after{content:'';}.sf-exceptionreset abbr,.sf-exceptionreset acronym{border:0;font-variant:normal;}.sf-exceptionreset sup{vertical-align:text-top;}.sf-exceptionreset sub{vertical-align:text-bottom;}.sf-exceptionreset input,.sf-exceptionreset textarea,.sf-exceptionreset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-exceptionreset input,.sf-exceptionreset textarea,.sf-exceptionreset select{*font-size:100%;}.sf-exceptionreset legend{color:#000;}

        .sf-exceptionreset html,
        .sf-exceptionreset body {
            width: 100%;
            min-height: 100%;
            _height: 100%;
            margin: 0;
            padding: 0;
        }
        .sf-exceptionreset body {
            font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
            text-align: left;
            background-color: #efefef;
        }

        .sf-exceptionreset abbr {
            border-bottom: 1px dotted #000;
            cursor: help;
        }

        .sf-exceptionreset p {
            font-size: 14px;
            line-height: 20px;
            color: #868686;
            padding-bottom: 20px;
        }

        .sf-exceptionreset strong {
            color: #313131;
            font-weight: bold;
        }

        .sf-exceptionreset a {
            color: #6c6159;
        }
        .sf-exceptionreset a img {
            border: none;
        }
        .sf-exceptionreset a:hover {
            text-decoration: underline;
        }

        .sf-exceptionreset em {
            font-style: italic;
        }

        .sf-exceptionreset h2,
        .sf-exceptionreset h3 {
            font-weight: bold;
        }
        .sf-exceptionreset h1 {
            font-family: Georgia, \"Times New Roman\", Times, serif;
            font-size: 20px;
            color: #313131;
            word-break: break-all;
        }

        .sf-exceptionreset li {
            padding-bottom: 10px;
        }

        .sf-exceptionreset .traces {
            padding-bottom: 14px;
        }
        .sf-exceptionreset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
            white-space: break-word;
        }
        .sf-exceptionreset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-exceptionreset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-exceptionreset .traces li:after {
            content: \"\\00A0\";
        }

        .sf-exceptionreset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }

        .sf-exceptionreset .block,
        .sf-exceptionreset .block_exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
        }
        .sf-exceptionreset .block {
            background-color: #FFFFFF;
            border: 1px solid #dfdfdf;
            padding: 40px 50px;
        }
        .sf-exceptionreset .block_exception div {
            color: #313131;
            font-size: 10px;
        }

        .sf-exceptionreset .block_exception_detected .illustration_exception,
        .sf-exceptionreset .block_exception_detected .text_exception {
            float: left;
        }
        .sf-exceptionreset .block_exception_detected .illustration_exception {
            width: 152px;
        }
        .sf-exceptionreset .block_exception_detected .text_exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }

        .sf-exceptionreset .text_exception .open_quote,
        .sf-exceptionreset .text_exception .close_quote {
            position: absolute;
        }
        .sf-exceptionreset .open_quote {
            top: 0;
            left: 0;
        }
        .sf-exceptionreset .close_quote {
            bottom: 0;
            right: 50px;
        }

        .sf-exceptionreset .block_exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-exceptionreset .block_exception p a,
        .sf-exceptionreset .block_exception p a:hover {
            color: #565656;
        }

        .sf-exceptionreset h2 {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            padding-bottom: 16px;
        }

        .sf-exceptionreset li a {
            background: none;
            color: #868686;
            text-decoration: none;
        }

        .sf-exceptionreset li a:hover {
            background: none;
            color: #313131;
            text-decoration: underline;
        }

        .sf-exceptionreset .logs h2 {
            float: left;
            width: 654px;
        }

        .sf-exceptionreset .error_count {
            float: right;
            width: 170px;
            text-align: right;
        }

        .sf-exceptionreset .error_count span {
            display: inline-block;
            background-color: #aacd4e;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: white;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-exceptionreset .toggle {
            vertical-align: middle;
        }

        .sf-exceptionreset .linked ul,
        .sf-exceptionreset .linked li {
            display: inline;
        }

        .sf-exceptionreset #output_content {
            color: #000;
            font-size: 12px;
        }

        .sf-exceptionreset ol {
            padding: 10px 0;
        }
        .sf-exceptionreset ol li {
            list-style: decimal;
            margin-left: 20px;
            padding: 2px;
            padding-bottom: 20px;
        }
        .sf-exceptionreset ol ol li {
            list-style-position: inside;
            margin-left: 0;
            white-space: nowrap;
            font-size: 12px;
            padding-bottom: 0;
        }
        .sf-exceptionreset li .selected {
            background-color: #ffd;
        }
        </style>
    </head>
    <body>
        <div id=\"content\">
                <div class=\"sf-exceptionreset\">
                    <div class=\"block_exception\">
                        <div class=\"block_exception_detected clear_fix\">
                            <table style=\"background-color: #F6F6F6; border: 1px solid #DFDFDF; padding: 30px 28px; width: 100%;\">
                                <tr>
                                    <td style=\"width: 150px;\">
                                    </td>
                                    <td>
                                        <div class=\"text_exception\">
                                            <h1>{{ exception.message }}</h1>
                                            <div>
                                                <strong>{{ status_code }}</strong> - {{ exception.class|abbr_class }}
                                            </div>
                                            <!--<div class=\"linked\"><span><strong>1</strong> linked Exception:</span>
                                                    <ul>
                                                            <li>
                                                                    <abbr title=\"Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException\">ResourceNotFoundException</abbr>
                                                            </li>
                                                    </ul>
                                            </div>-->
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                {#-- Trace Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Information:</h4>
                            <strong>Generated at: </strong> {{ \"now\"|date(\"d-m-Y H:i:s\") }} <br />
                            <strong>Class name: </strong> {{ exception.class }} <br />
                            <strong>Message: </strong> {{ exception.message }} <br />
                            {% if request %}<strong>Uri: </strong> {{ request.uri }} <br />{% endif %}
                            {% if command %}
                                <strong>Command:</strong> {{ command.name }}<br>
                            {% endif %}
                        </td>
                    </tr>
                </table>

                {#-- Trace Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <div class=\"block\">
                                <h4>Stack Trace</h4>
                                {% for position, e in exception.toarray %}
                                    {# see TwigBundle:Exception:traces.html.twig #}
                                    <ol class=\"traces list_exception\" id=\"traces\">
                                        {% for i, trace in e.trace %}
                                            {# see TwigBundle:Exception:trace.html.twig #}
                                            <li>
                                            {% if trace.class is defined %}
                                                at
                                                <strong>
                                                    <abbr title=\"{{ trace.class }}\">{{ trace.class }}</abbr>
                                                    {{ trace.type ~ trace.function }}
                                                </strong>
                                                {% if trace.args is defined %}
                                                    {% if trace.args is iterable %}
                                                        {{ trace.args|format_args }}
                                                    {% else %}
                                                        ({{ trace.args }})
                                                    {% endif %}
                                                {% endif %}
                                            {% else %}
                                                {{ trace.function }}()
                                            {% endif %}
                                            {% if trace.file is defined and trace.file and trace.line is defined and trace.line %}
                                                {{ trace.function ? '<br />' : '' }}
                                                in {{ trace.file|format_file(trace.line) }}&nbsp;
                                                <div id=\"trace_{{ 0 ~ '_' ~ i }}\" class=\"trace\">
                                                    {{ trace.file|file_excerpt(trace.line) }}
                                                </div>
                                            {% endif %}
                                            </li>
                                        {% endfor %}
                                    </ol>
                                {% endfor %}
                            </div>
                        </td>
                    </tr>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>
                {% if command_input %}
                    {% if command_input.options|length %}
                        {#-- Command Options Block --#}
                        <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                            <tr>
                                <td>
                                    <h4>Command Options</h4>
                                    <table>
                                    <tr>
                                        <th>Variable</th>
                                        <th>Value</th>
                                    </tr>
                                    {% for key, value in command_input.options %}
                                        <tr>
                                            <th style=\"border-top: 1px solid #999; vertical-align: top;\"><pre>{{ key }} =</pre></th>
                                            <td style=\"border-top: 1px solid #999\">{{ value|dumpy(2) }}</td>
                                        </tr>
                                    {% endfor %}
                                </table>
                                </td>
                            </tr>
                        </table>
                    {% endif %}
                    {% if command_input.arguments|length %}
                        {#-- Command Arguments Block --#}
                        <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                            <tr>
                                <td>

                                    <h4>Command Arguments</h4>
                                    <table>

                                        <tr>
                                            <th>Variable</th>
                                            <th>Value</th>
                                        </tr>
                                        {% for key, value in command_input.arguments %}
                                            <tr>
                                                <th style=\"border-top: 1px solid #999; vertical-align: top;\"><pre>{{ key }} =</pre></th>
                                                <td style=\"border-top: 1px solid #999\">{{ value|dumpy(2) }}</td>
                                            </tr>
                                        {% endfor %}
                                    </table>
                                </td>
                            </tr>
                        </table>
                    {% endif %}
                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>
                {% endif %}
                {% if context is defined %}
                    {#-- Variables Parameters Block --#}
                    <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                        <tr>
                            <td>
                                <h4>Scope Variables</h4>

                                {% if context|length %}
                                    <table>
                                        <tr>
                                            <th>Variable</th>
                                            <th>Value</th>
                                        </tr>
                                        {% for key, value in context %}
                                            <tr>
                                                <th style=\"border-top: 1px solid #999; vertical-align: top;\"><pre>\${{ key }} =</pre></th>
                                                <td style=\"border-top: 1px solid #999\">{{ value|dumpy(2) }}</td>
                                            </tr>
                                        {% endfor %}
                                    </table>
                                {% else %}
                                    <p>
                                        <em>No variables captured</em>
                                    </p>
                                {% endif %}
                            </td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td style=\"height: 20px;\"></td>
                        </tr>
                    </table>
                {% endif %}
                {% if request %}
                {#-- Request GET Parameters Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request GET Parameters</h4>

                            {% if request.query.all|length %}
                                {% include 'ElaoErrorNotifierBundle::_bag.html.twig' with { 'bag': request.query } only %}
                            {% else %}
                                <p>
                                    <em>No GET parameters</em>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>

                {#-- Request POST Parameters Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request POST Parameters</h4>

                            {% if request.request.all|length %}
                                {% include 'ElaoErrorNotifierBundle::_bag.html.twig' with { 'bag': request.request } only %}
                            {% else %}
                                <p>
                                    <em>No POST parameters</em>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>

                {#-- Request Attributes Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Attributes</h4>

                            {% if request.attributes.all|length %}
                                {% include 'ElaoErrorNotifierBundle::_bag.html.twig' with { 'bag': request.attributes } only %}
                            {% else %}
                                <p>
                                    <em>No Request Attributes</em>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>

                {#-- Request Cookies Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Cookies</h4>

                            {% if request.cookies.all|length %}
                                {% include 'ElaoErrorNotifierBundle::_bag.html.twig' with { 'bag': request.cookies } only %}
                            {% else %}
                                <p>
                                    <em>No Request Cookies</em>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>

                {#-- Request Headers Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Headers</h4>
                            {% include 'ElaoErrorNotifierBundle::_bag.html.twig' with { 'bag': request.headers } only %}
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>

                {#-- Request Server Parameters Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Request Server Parameters </h4>
                            {% include 'ElaoErrorNotifierBundle::_bag.html.twig' with { 'bag': request.server } only %}
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>

                {#-- Request Session Attributes Block --#}
                <table style=\"background: #fff; margin: 0 0 20px 0; width: 100%;\">
                    <tr>
                        <td>
                            <h4>Session Attributes</h4>

                            {% if request.session.all|length %}
                                <table>
                                    <tr>
                                        <th>Key</th>
                                        <th>Value</th>
                                    </tr>
                                    {% set attributes = request.session.all %}
                                    {% for key in attributes|keys|sort %}
                                        <tr>
                                            <th>{{ key }}</th>
                                            <td>{{ attributes[key]|yaml_dump }}</td>
                                        </tr>
                                    {% endfor %}
                                </table>
                            {% else %}
                                <p>
                                    <em>No session attributes</em>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td style=\"height: 20px;\"></td>
                    </tr>
                </table>
        {% endif %}

            </div>
        </div>
    </body>
</html>
", "ElaoErrorNotifierBundle::mail.html.twig", "/Users/mj/Desktop/beaker/vendor/elao/error-notifier-bundle/Resources/views/mail.html.twig");
    }
}
