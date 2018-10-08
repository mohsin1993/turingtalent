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
        // line 36
        echo "</head>
<body id=\"top\" class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo " site-container\">

";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('bottom', $context, $blocks);
        // line 108
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
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <style>
      .fouc{
        opacity: 0
      }
    </style>
    
    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "
";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css", 1 => 99), "method");
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900", 1 => 100), "method");
        // line 23
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lib.css", 1 => 98), "method");
        // line 24
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css", 1 => 101), "method");
        // line 25
        echo "    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "      ";
        // line 33
        echo "    ";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "  <section class=\"content-padding\">
    <section class=\"top-rectangle\"></section>
    <header class=\"navbar\" style=\"position: relative;\">
      <section class=\"navbar-section\">
        <a href=\"/\" class=\"navbar-brand mr-2 nav-item small-font\">
          <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 45
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/turing-talent-logo.svg");
        echo "\">
            Your browser does not support SVG
          </object>
         </a>
      </section>
      <section class=\"dropdown-toggle animated fadeIn show-sm\">
        <a id=\"toggle-menu-icon\" title=\"Menu\">
          <span class=\"line line-1\"></span>
          <span class=\"line line-2\"></span>
          <span class=\"line line-3\"></span>
        </a>
      </section>
      <ul class=\"navbar-section right top \">
        ";
        // line 58
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "      </ul>
    </header>
  </section>
";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "    <section id=\"body\">
        <div>
        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "        </div>
    </section>
";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "    <div class=\"footer\" style=\"padding: 0px 15px;\">
      <div class=\"navbar\" style=\"padding-top: 30px;\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 77
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/turing-talent-logo.svg");
        echo "\">
              Your browser does not support SVG
            </object>
            ";
        // line 81
        echo "          </a>
        </section>
        <ul class=\"navbar-section right\">
          ";
        // line 84
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 84)->display($context);
        // line 85
        echo "        </ul>
      </div>
    </div>
";
    }

    // line 90
    public function block_bottom($context, array $blocks = array())
    {
        // line 91
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
        // line 106
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
        return array (  252 => 106,  235 => 91,  232 => 90,  225 => 85,  223 => 84,  218 => 81,  212 => 77,  206 => 73,  203 => 72,  198 => 67,  192 => 68,  190 => 67,  186 => 65,  183 => 64,  176 => 59,  174 => 58,  158 => 45,  151 => 40,  148 => 39,  144 => 33,  142 => 29,  139 => 28,  135 => 25,  132 => 24,  129 => 23,  126 => 22,  123 => 21,  120 => 20,  115 => 34,  113 => 28,  107 => 26,  105 => 20,  95 => 13,  90 => 12,  88 => 11,  77 => 7,  74 => 6,  71 => 5,  64 => 108,  62 => 90,  59 => 89,  57 => 72,  54 => 71,  52 => 64,  49 => 63,  47 => 39,  42 => 37,  39 => 36,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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
        {% do assets.addCss('https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css', 99) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900', 100) %}
        {% do assets.addCss('theme://css/lib.css', 98) %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', 101) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
      {# {% do assets.addJs('https://code.jquery.com/jquery-3.3.1.min.js', {group: 'bottom'}) %}
      {% do assets.addJs('https://unpkg.com/axios@0.18.0/dist/axios.min.js', {group:'bottom'}) %}
      {% do assets.addJs('theme://js/custom.js', {group:'bottom'}) %}
      {% do assets.addJs('theme://js/responsive.js', {group:'bottom'}) %} #}
    {% endblock %}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }} site-container\">

{% block header %}
  <section class=\"content-padding\">
    <section class=\"top-rectangle\"></section>
    <header class=\"navbar\" style=\"position: relative;\">
      <section class=\"navbar-section\">
        <a href=\"/\" class=\"navbar-brand mr-2 nav-item small-font\">
          <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"{{ url('theme://images/turing-talent-logo.svg') }}\">
            Your browser does not support SVG
          </object>
         </a>
      </section>
      <section class=\"dropdown-toggle animated fadeIn show-sm\">
        <a id=\"toggle-menu-icon\" title=\"Menu\">
          <span class=\"line line-1\"></span>
          <span class=\"line line-2\"></span>
          <span class=\"line line-3\"></span>
        </a>
      </section>
      <ul class=\"navbar-section right top \">
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
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/partials/base.html.twig");
    }
}
