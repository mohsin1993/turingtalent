<?php

/* error.html.twig */
class __TwigTemplate_159294e6ad995f190ef487e100aa1f9d619bc4090a57c22d1f38d3c6ea53078c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://code.jquery.com/jquery-3.3.1.min.js", 1 => array("group" => "bottom")), "method");
        // line 3
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/responsive.min.js", 1 => array("group" => "bottom")), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"lead text-center\">
        <h1>Error!</h1>
        ";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% do assets.addJs('https://code.jquery.com/jquery-3.3.1.min.js', {group: 'bottom'}) %}
{% do assets.addJs('theme://js/responsive.min.js', {group:'bottom'}) %}
{% block content %}
    <div class=\"lead text-center\">
        <h1>Error!</h1>
        {{ page.content }}
    </div>
{% endblock %}
", "error.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/error.html.twig");
    }
}
