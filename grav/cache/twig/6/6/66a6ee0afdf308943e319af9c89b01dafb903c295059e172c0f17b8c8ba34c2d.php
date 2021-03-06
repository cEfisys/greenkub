<?php

/* modular/clients.html.twig */
class __TwigTemplate_4566a8afa140713a8206630d4c8381083b698c18771b241c2329d65eb5d43ab7 extends Twig_Template
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
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-12 text-center\">
        ";
        // line 3
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</div>
<aside class=\"clients\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "clients", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 10
            echo "                <div class=\"col-md-3 col-sm-6\">
                    <a href=\"";
            // line 11
            echo $this->getAttribute($context["client"], "url", array());
            echo "\">
                        <img src=\"";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["client"], "logo", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-centered\" alt=\"\">
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
        </div>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "modular/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  43 => 12,  39 => 11,  36 => 10,  32 => 9,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-lg-12 text-center">*/
/*         {{ content }}*/
/*     </div>*/
/* </div>*/
/* <aside class="clients">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {% for client in page.header.clients %}*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <a href="{{ client.url }}">*/
/*                         <img src="{{ page.media[client.logo].url }}" class="img-responsive img-centered" alt="">*/
/*                     </a>*/
/*                 </div>*/
/*             {% endfor %} */
/*         </div>*/
/*     </div>*/
/* </aside>*/
