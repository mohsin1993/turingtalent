<?php

/* about.html.twig */
class __TwigTemplate_577775a8ef57e041d52150f105111eeb833154793abc46bb7d7043c8a9b58115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
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
        echo "  <section style=\"min-height: 153px;\" class=\"main-header normal-font\">
    <div class=\"columns ml0\">
      <div class=\"col-12 content-padding\">
        <h1 class=\"normal-font\">
          About
        </h1>
        <p class=\"normal-font normal-size mt32 mb0 col-9 col-md-12\">
          Talent is everywhere, opportunity is not. We are changing that. 
        </p>
      </div>
    </div>
  </section>
  <section style=\"min-height: 413px;\" class=\"about-sect tt-section\">
    <h3 class=\"left-border normal-font\">
      Founders
    </h3>
    <div class=\"columns content-padding\">
      <div class=\"col-6 col-md-12 col-xs-12 column animated fadeInDown people\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"";
        // line 24
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "christina.png", array(), "array"), "url", array());
        echo "\" srcset=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "christina-2x.png", array(), "array"), "url", array());
        echo " 2x, ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "christina-3x.png", array(), "array"), "url", array());
        echo " 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Christina Chen</div>
          <div class=\"desc small-font\">
            <div>Responsible for all things talent facing</div>
            <div>Software-engineer-turned-VC-turned-entrepreneur. 10 years in the tech industry. Geek at heart. </div>
            <div>Previously: Cambridge, Scalized, HgCapital, DN.</div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "corine.png", array(), "array"), "url", array());
        echo "\" srcset=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "corine-2x.png", array(), "array"), "url", array());
        echo " 2x, ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "corine-3x.png", array(), "array"), "url", array());
        echo " 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Corinne Sawers</div>
          <div class=\"desc small-font\">
            <div>Responsible for all things companies facing</div>
            <div>8+ years using markets for impact. Co-founder of disruptive political start up More United. Amateur aerial circus artist. </div>
            <div>Previously: McKinsey, Oxford, LSE, INSEAD.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section min-height=\"548px;\" class=\"about-sect tt-section\">
    <h3 class=\"left-border normal-font\">
      Advisors
    </h3>
    <div class=\"columns content-padding\">
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"";
        // line 57
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "daniel.png", array(), "array"), "url", array());
        echo "\" srcset=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "daniel-2x.png", array(), "array"), "url", array());
        echo " 2x, ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "daniel-3x.png", array(), "array"), "url", array());
        echo " 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Daniel Bernhardt</div>
          <div class=\"desc small-font\">
            <div>Software Engineering Manager at Facebook</div>
            <div>Formerly @Microsft @Google. Daniel brings a wealth of experience in building and nurturing highly effective and collaborative engineering teams. </div>
            <div>He regularly speaks at universities to inspire the next generation about applied technical challenges.</div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"";
        // line 70
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "jon.png", array(), "array"), "url", array());
        echo "\" srcset=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "jon-2x.png", array(), "array"), "url", array());
        echo " 2x, ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "jon-3x.png", array(), "array"), "url", array());
        echo " 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Jon Crowcroft</div>
          <div class=\"desc small-font\">
            <div>CS Professor at Cambridge University</div>
            <div>Jon is one of the most respected figure in computer science. He’s a Fellow at The Royal Society, The ACM, The IEEE, The Royal Academy of Engineering, The Institute of Engineering and Technology, The Alan Turing Institute - just to name a few. </div>
            <div>Jon is also one of the masterminds behind the Raspberry Pi - a \$5 computer that changed many lives in underprivileged regions. </div>
          </div>
        </div>
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 70,  104 => 57,  77 => 37,  57 => 24,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
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
  <section style=\"min-height: 153px;\" class=\"main-header normal-font\">
    <div class=\"columns ml0\">
      <div class=\"col-12 content-padding\">
        <h1 class=\"normal-font\">
          About
        </h1>
        <p class=\"normal-font normal-size mt32 mb0 col-9 col-md-12\">
          Talent is everywhere, opportunity is not. We are changing that. 
        </p>
      </div>
    </div>
  </section>
  <section style=\"min-height: 413px;\" class=\"about-sect tt-section\">
    <h3 class=\"left-border normal-font\">
      Founders
    </h3>
    <div class=\"columns content-padding\">
      <div class=\"col-6 col-md-12 col-xs-12 column animated fadeInDown people\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"{{page.find('/images').media['christina.png'].url}}\" srcset=\"{{ page.find('/images').media['christina-2x.png'].url}} 2x, {{page.find('/images').media['christina-3x.png'].url}} 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Christina Chen</div>
          <div class=\"desc small-font\">
            <div>Responsible for all things talent facing</div>
            <div>Software-engineer-turned-VC-turned-entrepreneur. 10 years in the tech industry. Geek at heart. </div>
            <div>Previously: Cambridge, Scalized, HgCapital, DN.</div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"{{ page.find('/images').media['corine.png'].url}}\" srcset=\"{{page.find('/images').media['corine-2x.png'].url }} 2x, {{page.find('/images').media['corine-3x.png'].url}} 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Corinne Sawers</div>
          <div class=\"desc small-font\">
            <div>Responsible for all things companies facing</div>
            <div>8+ years using markets for impact. Co-founder of disruptive political start up More United. Amateur aerial circus artist. </div>
            <div>Previously: McKinsey, Oxford, LSE, INSEAD.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section min-height=\"548px;\" class=\"about-sect tt-section\">
    <h3 class=\"left-border normal-font\">
      Advisors
    </h3>
    <div class=\"columns content-padding\">
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"{{ page.find('/images').media['daniel.png'].url}}\" srcset=\"{{page.find('/images').media['daniel-2x.png'].url }} 2x, {{page.find('/images').media['daniel-3x.png'].url}} 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Daniel Bernhardt</div>
          <div class=\"desc small-font\">
            <div>Software Engineering Manager at Facebook</div>
            <div>Formerly @Microsft @Google. Daniel brings a wealth of experience in building and nurturing highly effective and collaborative engineering teams. </div>
            <div>He regularly speaks at universities to inspire the next generation about applied technical challenges.</div>
          </div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <div>
          <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"{{ page.find('/images').media['jon.png'].url}}\" srcset=\"{{page.find('/images').media['jon-2x.png'].url }} 2x, {{page.find('/images').media['jon-3x.png'].url}} 3x\" />
        </div>
        <div class=\"contet-sect\">
          <div class=\"title normal-font\">Jon Crowcroft</div>
          <div class=\"desc small-font\">
            <div>CS Professor at Cambridge University</div>
            <div>Jon is one of the most respected figure in computer science. He’s a Fellow at The Royal Society, The ACM, The IEEE, The Royal Academy of Engineering, The Institute of Engineering and Technology, The Alan Turing Institute - just to name a few. </div>
            <div>Jon is also one of the masterminds behind the Raspberry Pi - a \$5 computer that changed many lives in underprivileged regions. </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{% endblock %}
", "about.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/about.html.twig");
    }
}
