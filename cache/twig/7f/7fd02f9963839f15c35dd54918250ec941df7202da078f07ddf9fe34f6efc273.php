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
        // line 29
        echo "</head>
<body id=\"top\" class=\"";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo " site-container\">
";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('bottom', $context, $blocks);
        // line 99
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
    <title>
      ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "    <link rel=\"shortcut icon\"  type=\"image/x-icon\" href=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "favicon.ico", array(), "array"), "url", array());
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "favicon.png", array(), "array"), "url", array());
        echo "\"/>
    <link rel=\"canonical\" href=\"";
        // line 15
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
        // line 27
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css", 1 => 99), "method");
        // line 23
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900", 1 => 100), "method");
        // line 24
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lib.min.css", 1 => 98), "method");
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css", 1 => 101), "method");
        // line 26
        echo "    ";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "  <section class=\"content-padding\">
    <section class=\"top-rectangle\"></section>
    <header class=\"navbar\" style=\"position: relative;\">
      <section class=\"navbar-section\">
        <a href=\"/\" class=\"navbar-brand mr-2 nav-item small-font\">
          <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "turing-talent-logo.svg", array(), "array"), "url", array());
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
        // line 50
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "      </ul>
    </header>
  </section>
";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "    <section id=\"body\">
        <div>
        ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "        </div>
    </section>
";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "    <div class=\"footer\" style=\"padding: 0px 15px;\">
      <div class=\"navbar\" style=\"padding-top: 30px;\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 69
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "turing-talent-logo.svg", array(), "array"), "url", array());
        echo "\">
              Your browser does not support SVG
            </object>
          </a>
        </section>
        <ul class=\"navbar-section right\">
          ";
        // line 75
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 75)->display($context);
        // line 76
        echo "        </ul>
      </div>
    </div>
";
    }

    // line 81
    public function block_bottom($context, array $blocks = array())
    {
        // line 82
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
        // line 97
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
        return array (  238 => 97,  221 => 82,  218 => 81,  211 => 76,  209 => 75,  200 => 69,  194 => 65,  191 => 64,  186 => 59,  180 => 60,  178 => 59,  174 => 57,  171 => 56,  164 => 51,  162 => 50,  146 => 37,  139 => 32,  136 => 31,  132 => 26,  129 => 25,  126 => 24,  123 => 23,  120 => 22,  117 => 21,  110 => 27,  108 => 21,  99 => 15,  95 => 14,  90 => 13,  88 => 12,  76 => 8,  72 => 6,  69 => 5,  62 => 99,  60 => 81,  57 => 80,  55 => 64,  52 => 63,  50 => 56,  47 => 55,  45 => 31,  41 => 30,  38 => 29,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
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
    <title>
      {% if header.title %}{{ header.title|e('html') }} | {% endif %} {{ site.title|e('html') }}
    </title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}
    <link rel=\"shortcut icon\"  type=\"image/x-icon\" href=\"{{ page.find('/images').media['favicon.ico'].url }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ page.find('/images').media['favicon.png'].url }}\"/>
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <style>
      .fouc{
        opacity: 0
      }
    </style>
    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css', 99) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900', 100) %}
        {% do assets.addCss('theme://css/lib.min.css', 98) %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', 101) %}
    {% endblock %}
    {{ assets.css() }}
{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }} site-container\">
{% block header %}
  <section class=\"content-padding\">
    <section class=\"top-rectangle\"></section>
    <header class=\"navbar\" style=\"position: relative;\">
      <section class=\"navbar-section\">
        <a href=\"/\" class=\"navbar-brand mr-2 nav-item small-font\">
          <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"{{ page.find('/images').media['turing-talent-logo.svg'].url }}\">
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
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"{{ page.find('/images').media['turing-talent-logo.svg'].url }}\">
              Your browser does not support SVG
            </object>
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
