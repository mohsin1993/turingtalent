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
        // line 31
        echo "</head>
<body id=\"top\" class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo " site-container\">
";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('bottom', $context, $blocks);
        // line 102
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
        echo "?v=2\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "favicon.png", array(), "array"), "url", array());
        echo "?v=2\"/>
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <style>
      .fouc{
        opacity: 0
      }
    </style>
    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
        // line 28
        $this->loadTemplate("partials/intercom.html.twig", "partials/base.html.twig", 28)->display($context);
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/intercom.min.js", 1 => array("group" => "bottom")), "method");
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/lib.min.css", 1 => 98), "method");
        // line 26
        echo "    ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "  <section class=\"content-padding\">
    <section class=\"top-rectangle\"></section>
    <header class=\"navbar\" style=\"position: relative;\">
      <section class=\"navbar-section\">
        <a href=\"/\" class=\"navbar-brand mr-2 nav-item small-font\">
          <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 39
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
        // line 52
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "      </ul>
    </header>
  </section>
";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "    <section id=\"body\">
        <div>
        ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "        </div>
    </section>
";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "    <div class=\"footer\" style=\"padding: 0px 15px;\">
      <div class=\"navbar\" style=\"padding-top: 30px;\">
        <section class=\"navbar-section\">
          <a href=\"#\" class=\"navbar-brand mr-2 faded-black nav-item small-font\">
            <object width=\"132px\" height=\"20px\" class=\"Turing-Talent-Logo\" type=\"image/svg+xml\" data=\"";
        // line 71
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "turing-talent-logo.svg", array(), "array"), "url", array());
        echo "\">
              Your browser does not support SVG
            </object>
          </a>
        </section>
        <ul class=\"navbar-section right\">
          ";
        // line 77
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "        </ul>
      </div>
    </div>
";
    }

    // line 83
    public function block_bottom($context, array $blocks = array())
    {
        // line 84
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
        // line 99
        $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 99)->display($context);
        // line 100
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
        return array (  239 => 100,  237 => 99,  220 => 84,  217 => 83,  210 => 78,  208 => 77,  199 => 71,  193 => 67,  190 => 66,  185 => 61,  179 => 62,  177 => 61,  173 => 59,  170 => 58,  163 => 53,  161 => 52,  145 => 39,  138 => 34,  135 => 33,  131 => 26,  128 => 25,  125 => 24,  120 => 29,  118 => 28,  113 => 27,  111 => 24,  99 => 15,  95 => 14,  90 => 13,  88 => 12,  76 => 8,  72 => 6,  69 => 5,  62 => 102,  60 => 83,  57 => 82,  55 => 66,  52 => 65,  50 => 58,  47 => 57,  45 => 33,  41 => 32,  38 => 31,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
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
    <link rel=\"shortcut icon\"  type=\"image/x-icon\" href=\"{{ page.find('/images').media['favicon.ico'].url }}?v=2\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ page.find('/images').media['favicon.png'].url }}?v=2\"/>
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css?family=Inconsolata|Nunito+Sans:300,400,600,700,800,900\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"https://unpkg.com/spectre.css@0.5.3/dist/spectre.min.css\" type=\"text/css\" rel=\"stylesheet\" />
    <style>
      .fouc{
        opacity: 0
      }
    </style>
    {% block stylesheets %}
        {% do assets.addCss('theme://css/lib.min.css', 98) %}
    {% endblock %}
    {{ assets.css() }}
    {% include 'partials/intercom.html.twig' %}
    {% do assets.addJs('theme://js/intercom.min.js', {group:'bottom'}) %}
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
    {% include 'partials/analytics.html.twig' %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/partials/base.html.twig");
    }
}
