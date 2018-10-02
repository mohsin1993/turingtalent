<?php

/* partials/base.html.twig */
class __TwigTemplate_9f5cffa9cb04f8773b6a3732a5ed485bd0530baef8183a3ebdc5c1fc5df153f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body id=\"top\" class=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo " site-container\">

";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('bottom', $context, $blocks);
        // line 100
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\" rel=\"stylesheet\" />
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        
    ";
        // line 25
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.3/spectre.min.css", 1 => 99), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lib.css", 1 => 98), "method");
        // line 22
        echo "    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        // line 29
        echo "    ";
    }

    // line 36
    public function block_header($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        // line 50
        echo "    <section style=\"margin: 0px 5%;\">
      <section class=\"top-rectangle\"></section>
      <header class=\"navbar\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 55
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/turing-talent-logo.svg");
        echo "\">
              Your browser does not support SVG
            </object>
            ";
        // line 59
        echo "          </a>
        </section>
        <section class=\"navbar-section\">
          <span class=\"nav-item small-font\">For Engineers</span>
          <span class=\"nav-item small-font\">About</span>
        </section>
      </header>
    </section>
    
";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "    <section id=\"body\" style=\"min-height: 1000px\">
        <div>
        ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "        </div>
    </section>
";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "    <div class=\"footer\">
      <div class=\"navbar\" style=\"padding-top: 30px;\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 83
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/turing-talent-logo.svg");
        echo "\">
              Your browser does not support SVG
            </object>
            ";
        // line 87
        echo "          </a>
        </section>
        <section class=\"navbar-section\">
          <span class=\"nav-item small-font\">For Engineers</span>
          <span class=\"nav-item small-font\">About</span>
        </section>
      </div>
    </div>
";
    }

    // line 97
    public function block_bottom($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
";
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
        return array (  232 => 98,  229 => 97,  217 => 87,  211 => 83,  205 => 79,  202 => 78,  197 => 73,  191 => 74,  189 => 73,  185 => 71,  182 => 70,  169 => 59,  163 => 55,  156 => 50,  154 => 37,  151 => 36,  147 => 29,  145 => 28,  142 => 27,  138 => 22,  135 => 21,  132 => 20,  129 => 19,  127 => 18,  124 => 17,  116 => 30,  114 => 27,  108 => 25,  105 => 23,  103 => 17,  97 => 14,  93 => 13,  90 => 12,  88 => 11,  77 => 7,  74 => 6,  71 => 5,  64 => 100,  62 => 97,  59 => 96,  57 => 78,  54 => 77,  52 => 70,  49 => 69,  47 => 36,  42 => 34,  39 => 33,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\" rel=\"stylesheet\" />
    {% block stylesheets %}
        {# {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %} #}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.3/spectre.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
        {% do assets.addCss('theme://css/lib.css', 98) %}
    {% endblock %}
        
    {# {% endblock %} #}
    {{ assets.css() }}

    {% block javascripts %}
        {# {% do assets.addJs('jquery', 100) %} #}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }} site-container\">

{% block header %}
    {# <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }}
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div> #}
    <section style=\"margin: 0px 5%;\">
      <section class=\"top-rectangle\"></section>
      <header class=\"navbar\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"{{ url('theme://images/turing-talent-logo.svg') }}\">
              Your browser does not support SVG
            </object>
            {# <img src=\"{{ url('theme://images/turing-talent-logo.svg') }}\" class=\"Turing-Talent-Logo\"> #}
          </a>
        </section>
        <section class=\"navbar-section\">
          <span class=\"nav-item small-font\">For Engineers</span>
          <span class=\"nav-item small-font\">About</span>
        </section>
      </header>
    </section>
    
{% endblock %}

{% block body %}
    <section id=\"body\" style=\"min-height: 1000px\">
        <div>
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer\">
      <div class=\"navbar\" style=\"padding-top: 30px;\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"{{ url('theme://images/turing-talent-logo.svg') }}\">
              Your browser does not support SVG
            </object>
            {# <img src=\"{{ url('theme://images/turing-talent-logo.svg') }}\" class=\"Turing-Talent-Logo\"> #}
          </a>
        </section>
        <section class=\"navbar-section\">
          <span class=\"nav-item small-font\">For Engineers</span>
          <span class=\"nav-item small-font\">About</span>
        </section>
      </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/partials/base.html.twig");
    }
}
