<?php

/* partials/metadata.html.twig */
class __TwigTemplate_ee9bc07ef25a8d3f6e855e47e34348c7b8efddbf8fc88d487aaaa366c38f4afd extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            echo "<meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 7
        echo "<meta property=\"og:site_name\" content=\"Turing Talent\"/>
<meta property=\"og:title\" content=\"Turing Talent\"/>
<meta property=\"og:url\" content=\"";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:image\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<meta property=\"og:image:width\" content=\"1000\"/>
<meta property=\"og:image:height\" content=\"319\"/>
<meta itemprop=\"name\" content=\"Turing Talent\"/>
<meta itemprop=\"url\" content=\"";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
<meta itemprop=\"thumbnailUrl\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<link rel=\"image_src\" href=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\" />
<meta itemprop=\"image\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<meta name=\"twitter:title\" content=\"Turing Talent\"/>
<meta name=\"twitter:image\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<meta name=\"twitter:url\" content=\"";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
<meta name=\"twitter:card\" content=\"summary\"/>
<meta name=\"description\" content=\"Turing Talent breaks down the barriers between the worlds best talent and 
most exciting companies - reinventing the potential for distributed teams.\" />";
    }

    public function getTemplateName()
    {
        return "partials/metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  72 => 15,  63 => 9,  59 => 7,  56 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for meta in page.metadata %}
<meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
{% endfor %}

{# <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"https://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b9ccbdcb8a0455bce26513a/favicon.ico\"/> #}
{# <link rel=\"canonical\" href=\"https://www.turingtalent.io/\"/> #}
<meta property=\"og:site_name\" content=\"Turing Talent\"/>
<meta property=\"og:title\" content=\"Turing Talent\"/>
<meta property=\"og:url\" content=\"{{ page.url(true, true) }}\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:image\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<meta property=\"og:image:width\" content=\"1000\"/>
<meta property=\"og:image:height\" content=\"319\"/>
<meta itemprop=\"name\" content=\"Turing Talent\"/>
<meta itemprop=\"url\" content=\"{{ page.url(true, true) }}\"/>
<meta itemprop=\"thumbnailUrl\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<link rel=\"image_src\" href=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\" />
<meta itemprop=\"image\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<meta name=\"twitter:title\" content=\"Turing Talent\"/>
<meta name=\"twitter:image\" content=\"http://static1.squarespace.com/static/5b7b9c34c258b4185c049141/t/5b7b9f5c6d2a73c4b60afcc9/1534828383730/logo_maincolor.png?format=1000w\"/>
<meta name=\"twitter:url\" content=\"{{ page.url(true, true) }}\"/>
<meta name=\"twitter:card\" content=\"summary\"/>
<meta name=\"description\" content=\"Turing Talent breaks down the barriers between the worlds best talent and 
most exciting companies - reinventing the potential for distributed teams.\" />", "partials/metadata.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/partials/metadata.html.twig");
    }
}
