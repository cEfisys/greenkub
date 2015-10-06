<?php

/* partials/base.html.twig */
class __TwigTemplate_6f8896c1d5d5322c35f6c82ca9f8bfc92d671bc9acc308ceec14e4594071e7d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts_bottom' => array($this, 'block_javascripts_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "    </head>
    <body id=\"page-top\" class=\"index\">

        ";
        // line 31
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 34
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
                    ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "
                    ";
        // line 42
        $this->displayBlock('javascripts_bottom', $context, $blocks);
        // line 49
        echo "                    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

                </body>
                </html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/global.css", 1 => 100), "method");
        // line 13
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome/css/font-awesome.min.css", 1 => 100), "method");
        // line 14
        echo "            <link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
            <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
            <link href=\"http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
            <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 24
        echo "
        ";
    }

    // line 31
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 32)->display($context);
        // line 33
        echo "        ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "                    ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "                        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "                    ";
    }

    // line 42
    public function block_javascripts_bottom($context, array $blocks = array())
    {
        // line 43
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 44
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.easing.min.js"), "method");
        // line 45
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/classie.js"), "method");
        // line 46
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/cbpAnimatedHeader.js"), "method");
        // line 47
        echo "                        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/agency.js"), "method");
        // line 48
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 48,  184 => 47,  181 => 46,  178 => 45,  175 => 44,  172 => 43,  169 => 42,  165 => 40,  162 => 39,  159 => 38,  154 => 35,  150 => 36,  147 => 35,  144 => 34,  140 => 33,  137 => 32,  134 => 31,  129 => 24,  126 => 23,  123 => 22,  114 => 14,  111 => 13,  108 => 12,  105 => 11,  98 => 26,  96 => 22,  90 => 20,  88 => 11,  83 => 9,  80 => 8,  78 => 7,  70 => 6,  67 => 5,  64 => 4,  54 => 49,  52 => 42,  49 => 41,  47 => 38,  44 => 37,  41 => 34,  39 => 31,  34 => 28,  32 => 4,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="icon" type="image/png" href="{{ url('theme://img/favicon.png') }}" />*/
/* */
/*         {% block stylesheets %}*/
/*             {% do assets.addCss('theme://css-compiled/global.css',100) %}*/
/*             {% do assets.addCss('theme://css/font-awesome/css/font-awesome.min.css',100) %}*/
/*             <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*             <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>*/
/*             <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/*             <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/* */
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/*         {% endblock head%}*/
/*     </head>*/
/*     <body id="page-top" class="index">*/
/* */
/*         {% block header_navigation %}*/
/*             {% include 'partials/navigation.html.twig' %}*/
/*         {% endblock %}*/
/*                 {% block body %}*/
/*                     {% block content %}{% endblock %}*/
/*                     {% endblock %}*/
/* */
/*                     {% block footer %}*/
/*                         {% include 'partials/footer.html.twig' %}*/
/*                     {% endblock %}*/
/* */
/*                     {% block javascripts_bottom %}*/
/*                         {% do assets.addJs('theme://js/bootstrap.min.js',100) %}*/
/*                         {% do assets.addJs('theme://js/jquery.easing.min.js') %}*/
/*                         {% do assets.addJs('theme://js/classie.js') %}*/
/*                         {% do assets.addJs('theme://js/cbpAnimatedHeader.js') %}*/
/*                         {% do assets.addJs('theme://js/agency.js') %}*/
/*                     {% endblock %}*/
/*                     {{ assets.js() }}*/
/* */
/*                 </body>*/
/*                 </html>*/
/* */
