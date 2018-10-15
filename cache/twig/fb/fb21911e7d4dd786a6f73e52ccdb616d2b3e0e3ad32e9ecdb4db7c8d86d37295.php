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
<meta property=\"og:description\" content=\"Turing Talent breaks down the barriers between the worlds best talent and 
most exciting companies - reinventing the potential for distributed teams.\"/>
<meta property=\"og:url\" content=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:image\" content=\"";
        // line 13
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "share-large-bg-white.png", array(), "array"), "resize", array(0 => 1200, 1 => 630), "method"), "url", array());
        echo "\"/>
<meta property=\"og:image:width\" content=\"1200\"/>
<meta property=\"og:image:height\" content=\"630\"/>
<meta itemprop=\"name\" content=\"Turing Talent\"/>
<meta itemprop=\"url\" content=\"";
        // line 17
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\"/>
<meta itemprop=\"thumbnailUrl\" content=\"";
        // line 18
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "share-large-bg-white.png", array(), "array"), "resize", array(0 => 1200, 1 => 630), "method"), "url", array());
        echo "\"/>
<link rel=\"image_src\" href=\"";
        // line 19
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "share-large-bg-white.png", array(), "array"), "resize", array(0 => 1200, 1 => 630), "method"), "url", array());
        echo "\" />
<meta itemprop=\"image\" content=\"";
        // line 20
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "share-large-bg-white.png", array(), "array"), "resize", array(0 => 1200, 1 => 630), "method"), "url", array());
        echo "\"/>
<meta name=\"twitter:title\" content=\"Turing Talent\"/>
<meta name=\"twitter:image\" content=\"";
        // line 22
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "share-square.png", array(), "array"), "resize", array(0 => 144, 1 => 144), "method"), "url", array());
        echo "\"/>
<meta name=\"twitter:url\" content=\"";
        // line 23
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
        return array (  103 => 23,  98 => 22,  92 => 20,  87 => 19,  82 => 18,  78 => 17,  70 => 13,  65 => 11,  59 => 7,  56 => 4,  23 => 2,  19 => 1,);
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
<meta property=\"og:description\" content=\"Turing Talent breaks down the barriers between the worlds best talent and 
most exciting companies - reinventing the potential for distributed teams.\"/>
<meta property=\"og:url\" content=\"{{ page.url(true, true) }}\"/>
<meta property=\"og:type\" content=\"website\"/>
<meta property=\"og:image\" content=\"{{base_url_absolute}}{{ page.find('/images').media['share-large-bg-white.png'].resize(1200, 630).url }}\"/>
<meta property=\"og:image:width\" content=\"1200\"/>
<meta property=\"og:image:height\" content=\"630\"/>
<meta itemprop=\"name\" content=\"Turing Talent\"/>
<meta itemprop=\"url\" content=\"{{ page.url(true, true) }}\"/>
<meta itemprop=\"thumbnailUrl\" content=\"{{base_url_absolute}}{{ page.find('/images').media['share-large-bg-white.png'].resize(1200, 630).url }}\"/>
<link rel=\"image_src\" href=\"{{base_url_absolute}}{{ page.find('/images').media['share-large-bg-white.png'].resize(1200, 630).url }}\" />
<meta itemprop=\"image\" content=\"{{base_url_absolute}}{{ page.find('/images').media['share-large-bg-white.png'].resize(1200, 630).url }}\"/>
<meta name=\"twitter:title\" content=\"Turing Talent\"/>
<meta name=\"twitter:image\" content=\"{{base_url_absolute}}{{ page.find('/images').media['share-square.png'].resize(144, 144).url }}\"/>
<meta name=\"twitter:url\" content=\"{{ page.url(true, true) }}\"/>
<meta name=\"twitter:card\" content=\"summary\"/>
<meta name=\"description\" content=\"Turing Talent breaks down the barriers between the worlds best talent and 
most exciting companies - reinventing the potential for distributed teams.\" />", "partials/metadata.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/partials/metadata.html.twig");
    }
}
