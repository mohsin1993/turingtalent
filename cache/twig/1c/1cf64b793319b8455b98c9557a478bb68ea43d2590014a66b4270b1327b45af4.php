<?php

/* job.html.twig */
class __TwigTemplate_012079535e0a36166d65c9412f16c5c608779593487d6c885bcd7627421b628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "job.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  <section class=\"main-header normal-font content-padding\">
    <div class=\"columns ml0\">
      <div class=\"col-12\">
        <h1 class=\"normal-font\">
          Frontend Engineer
        </h1>
        <h3 class=\"normal-font\">
          at Host Compliance
        </h3>
      </div>
    </div>
  </section>
  <section class=\"job\">
    <div>
      <h3>
        About Host Compliance
      </h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat posuere est, ac ultrices tortor hendrerit scelerisque. Nulla quis ligula ut quam elementum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat pretium erat, sed mattis lacus dictum a. Maecenas quis ligula magna, quis accumsan turpis. Nunc pharetra.
      </p>
      <h3>
        About Turing Talent
      </h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat posuere est, ac ultrices tortor hendrerit scelerisque. Nulla quis ligula ut quam elementum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat pretium erat, sed mattis lacus dictum a. Maecenas quis ligula magna, quis accumsan turpis. Nunc pharetra.
      </p>
      <h3>
        Skills & Experience
      </h3>
      <ul>
        <li>AngularJS 1.x (3+ years)</li>
        <li>jQuery (3+ years)</li>
        <li>CSS</li>
        <li>Experience with data visualization.</li>
        <li>UX experience</li>
        <li>A passion for fast-paced development and daily releases</li>
      </ul>
      <h3>
        Key Responsibilities
      </h3>
      <ul>
        <li>Expand and improve our AngularJS codebase</li>
        <li>Produce scalable, well written, testable code</li>
        <li>Make constant, measured improvements to the application’s user experience</li>
        <li>Fix defects and add features to our legacy jQuery and HTML based tools</li>
        <li>Assist with refactoring, adding tests, and otherwise improving existing code</li>
        <li>You should also be a person who thrives in an extremely fast-paced environment. We solve hard problems on tight deadlines and release multiple times per week.</li>
      </ul>
    </div>
    <div>
      <button>Apply</button>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
{% block content %}
  <section class=\"main-header normal-font content-padding\">
    <div class=\"columns ml0\">
      <div class=\"col-12\">
        <h1 class=\"normal-font\">
          Frontend Engineer
        </h1>
        <h3 class=\"normal-font\">
          at Host Compliance
        </h3>
      </div>
    </div>
  </section>
  <section class=\"job\">
    <div>
      <h3>
        About Host Compliance
      </h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat posuere est, ac ultrices tortor hendrerit scelerisque. Nulla quis ligula ut quam elementum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat pretium erat, sed mattis lacus dictum a. Maecenas quis ligula magna, quis accumsan turpis. Nunc pharetra.
      </p>
      <h3>
        About Turing Talent
      </h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat posuere est, ac ultrices tortor hendrerit scelerisque. Nulla quis ligula ut quam elementum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat pretium erat, sed mattis lacus dictum a. Maecenas quis ligula magna, quis accumsan turpis. Nunc pharetra.
      </p>
      <h3>
        Skills & Experience
      </h3>
      <ul>
        <li>AngularJS 1.x (3+ years)</li>
        <li>jQuery (3+ years)</li>
        <li>CSS</li>
        <li>Experience with data visualization.</li>
        <li>UX experience</li>
        <li>A passion for fast-paced development and daily releases</li>
      </ul>
      <h3>
        Key Responsibilities
      </h3>
      <ul>
        <li>Expand and improve our AngularJS codebase</li>
        <li>Produce scalable, well written, testable code</li>
        <li>Make constant, measured improvements to the application’s user experience</li>
        <li>Fix defects and add features to our legacy jQuery and HTML based tools</li>
        <li>Assist with refactoring, adding tests, and otherwise improving existing code</li>
        <li>You should also be a person who thrives in an extremely fast-paced environment. We solve hard problems on tight deadlines and release multiple times per week.</li>
      </ul>
    </div>
    <div>
      <button>Apply</button>
    </div>
  </section>
{% endblock %}
", "job.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/job.html.twig");
    }
}
