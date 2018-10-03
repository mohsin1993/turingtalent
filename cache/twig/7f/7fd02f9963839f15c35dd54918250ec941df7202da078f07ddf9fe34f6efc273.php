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
<html class=\"fouc\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
<body id=\"top\" class=\"";
        // line 42
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo " site-container\">

";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('bottom', $context, $blocks);
        // line 109
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
    <style>
      .fouc{
        opacity: 0
      }
    </style>
    
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        
    ";
        // line 33
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    ";
        // line 39
        echo "
";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css", 1 => 99), "method");
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lib.css", 1 => 98), "method");
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css", 1 => 101), "method");
        // line 28
        echo "        ";
        // line 29
        echo "    ";
        // line 30
        echo "    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        // line 37
        echo "    ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "  <section class=\"content-padding\">
    <section class=\"top-rectangle\"></section>
    <header class=\"navbar\">
      <section class=\"navbar-section\">
        <a href=\"/\" class=\"navbar-brand mr-2 nav-item small-font\">
          <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 50
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/turing-talent-logo.svg");
        echo "\">
            Your browser does not support SVG
          </object>
         </a>
      </section>
      <ul class=\"navbar-section right\">
        ";
        // line 56
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "      </ul>
    </header>
  </section>
";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "    <section id=\"body\">
        <div>
        ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "        </div>
    </section>
";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "    <div class=\"footer\" style=\"padding: 0px 15px;\">
      <div class=\"navbar\" style=\"padding-top: 30px;\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 75
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/turing-talent-logo.svg");
        echo "\">
              Your browser does not support SVG
            </object>
            ";
        // line 79
        echo "          </a>
        </section>
        <ul class=\"navbar-section right\">
          ";
        // line 82
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 82)->display($context);
        // line 83
        echo "        </ul>
      </div>
    </div>
";
    }

    // line 88
    public function block_bottom($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        // line 90
        echo "    <script>
      function fadeIn(el, time) {
      el.style.opacity = 0;

      var last = +new Date();
      var tick = function() {
        el.style.opacity = +el.style.opacity + (new Date() - last) / time;
        last = +new Date();

        if (+el.style.opacity < 1) {
          (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
        }
      };

      tick();
    }
    fadeIn(document.querySelector(\".fouc\"), 300);
    </script>
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
        return array (  245 => 90,  243 => 89,  240 => 88,  233 => 83,  231 => 82,  226 => 79,  220 => 75,  214 => 71,  211 => 70,  206 => 65,  200 => 66,  198 => 65,  194 => 63,  191 => 62,  184 => 57,  182 => 56,  173 => 50,  166 => 45,  163 => 44,  159 => 37,  157 => 36,  154 => 35,  150 => 30,  148 => 29,  146 => 28,  143 => 27,  140 => 26,  137 => 25,  135 => 24,  132 => 23,  130 => 22,  127 => 21,  122 => 39,  120 => 38,  118 => 35,  112 => 33,  109 => 31,  107 => 21,  97 => 14,  93 => 13,  90 => 12,  88 => 11,  77 => 7,  74 => 6,  71 => 5,  64 => 109,  62 => 88,  59 => 87,  57 => 70,  54 => 69,  52 => 62,  49 => 61,  47 => 44,  42 => 42,  39 => 41,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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
<html class=\"fouc\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <style>
      .fouc{
        opacity: 0
      }
    </style>
    
    {% block stylesheets %}
        {# {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %} #}
        {% do assets.addCss('https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css', 99) %}
        {# {% do assets.addCss('theme://css/custom.css', 98) %} #}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900', 100) %}
        {% do assets.addCss('theme://css/lib.css', 98) %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', 101) %}
        {# <link href=\"https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900\" rel=\"stylesheet\" /> #}
    {# <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\" rel=\"stylesheet\" /> #}
    {% endblock %}
        
    {# {% endblock %} #}
    {{ assets.css() }}

    {% block javascripts %}
        {# {% do assets.addJs('jquery', 100) %} #}
    {% endblock %}
    {# {{ assets.js() }} #}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }} site-container\">

{% block header %}
  <section class=\"content-padding\">
    <section class=\"top-rectangle\"></section>
    <header class=\"navbar\">
      <section class=\"navbar-section\">
        <a href=\"/\" class=\"navbar-brand mr-2 nav-item small-font\">
          <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"{{ url('theme://images/turing-talent-logo.svg') }}\">
            Your browser does not support SVG
          </object>
         </a>
      </section>
      <ul class=\"navbar-section right\">
        {% include 'partials/navigation.html.twig' %}
      </ul>
    </header>
  </section>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div>
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer\" style=\"padding: 0px 15px;\">
      <div class=\"navbar\" style=\"padding-top: 30px;\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"{{ url('theme://images/turing-talent-logo.svg') }}\">
              Your browser does not support SVG
            </object>
            {# <img src=\"{{ url('theme://images/turing-talent-logo.svg') }}\" class=\"Turing-Talent-Logo\"> #}
          </a>
        </section>
        <ul class=\"navbar-section right\">
          {% include 'partials/navigation.html.twig' %}
        </ul>
      </div>
    </div>
{% endblock %}

{% block bottom %}
    {# {{ assets.js('bottom') }} #}
    <script>
      function fadeIn(el, time) {
      el.style.opacity = 0;

      var last = +new Date();
      var tick = function() {
        el.style.opacity = +el.style.opacity + (new Date() - last) / time;
        last = +new Date();

        if (+el.style.opacity < 1) {
          (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
        }
      };

      tick();
    }
    fadeIn(document.querySelector(\".fouc\"), 300);
    </script>
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/partials/base.html.twig");
    }
}
