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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  <section style=\"min-height: 153px;\" class=\"main-header normal-font content-padding tt-section \">
    <div class=\"columns\">
      <div class=\"col-9 col-md-12 col-xs-12 column\">
        <h1 class=\"normal-font\">
          About
        </h1>
        <p class=\"normal-font tt-section-content mt32 mb0\">
          Talent is everywhere, opportunity is not. We are changing that. 
        </p>
      </div>
    </div>
  </section>
  <section style=\"min-height: 413px;\" class=\"about-sect content-padding tt-section\">
    <h3 class=\"left-border normal-font ml-50\">
      Founders
    </h3>
    <div class=\"columns\">
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/christina.png");
        echo "\" srcset=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/christina@2x.png");
        echo " 2x, ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/christina@3x.png");
        echo " 3x\" />
        <div class=\"title normal-font\">Christina Chen</div>
        <div class=\"desc small-font\">
          <div>Responsible for all things talent facing</div>
          <div>Software-engineer-turned-VC-turned-entrepreneur. 10 years in the tech industry. Geek at heart. </div>
          <div>Previously: Cambridge, Scalized, HgCapital, DN.</div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"";
        // line 30
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/corine.png");
        echo "\" srcset=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/corine@2x.png");
        echo " 2x, ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/corine@3x.png");
        echo " 3x\" />
        <div class=\"title normal-font\">Corinne Sawers</div>
        <div class=\"desc small-font\">
          <div>Responsible for all things companies facing</div>
          <div>8+ years using markets for impact. Co-founder of disruptive political start up More United. Amateur aerial circus artist. </div>
          <div>Previously: McKinsey, Oxford, LSE, INSEAD.</div>
        </div>
      </div>
    </div>
  </section>
  <section min-height=\"548px;\" class=\"about-sect content-padding tt-section\">
    <h3 class=\"left-border normal-font ml-50\">
      Advisors
    </h3>
    <div class=\"columns\">
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" src=\"";
        // line 46
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/daniel.png");
        echo "\" srcset=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/daniel@2x.png");
        echo " 2x, ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/daniel@3x.png");
        echo " 3x\" />
        <div class=\"title normal-font\">Daniel Bernhardt</div>
        <div class=\"desc small-font\">
          <div>Software Engineering Manager at Facebook</div>
          <div>Formerly @Microsft @Google. Daniel brings a wealth of experience in building and nurturing highly effective and collaborative engineering teams. </div>
          <div>He regularly speaks at universities to inspire the next generation about applied technical challenges.</div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" src=\"";
        // line 55
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/jon.png");
        echo "\" srcset=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/jon@2x.png");
        echo " 2x, ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/jon@3x.png");
        echo " 3x\" />
        <div class=\"title normal-font\">Jon Crowcroft</div>
        <div class=\"desc small-font\">
          <div>CS Professor at Cambridge University</div>
          <div>Jon is one of the most respected figure in computer science. He’s a Fellow at The Royal Society, The ACM, The IEEE, The Royal Academy of Engineering, The Institute of Engineering and Technology, The Alan Turing Institute - just to name a few. </div>
          <div>Jon is also one of the masterminds behind the Raspberry Pi - a \$5 computer that changed many lives in underprivileged regions. </div>
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
        return array (  106 => 55,  90 => 46,  67 => 30,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
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
  <section style=\"min-height: 153px;\" class=\"main-header normal-font content-padding tt-section \">
    <div class=\"columns\">
      <div class=\"col-9 col-md-12 col-xs-12 column\">
        <h1 class=\"normal-font\">
          About
        </h1>
        <p class=\"normal-font tt-section-content mt32 mb0\">
          Talent is everywhere, opportunity is not. We are changing that. 
        </p>
      </div>
    </div>
  </section>
  <section style=\"min-height: 413px;\" class=\"about-sect content-padding tt-section\">
    <h3 class=\"left-border normal-font ml-50\">
      Founders
    </h3>
    <div class=\"columns\">
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"{{url('theme://images/christina.png')}}\" srcset=\"{{url('theme://images/christina@2x.png')}} 2x, {{url('theme://images/christina@3x.png')}} 3x\" />
        <div class=\"title normal-font\">Christina Chen</div>
        <div class=\"desc small-font\">
          <div>Responsible for all things talent facing</div>
          <div>Software-engineer-turned-VC-turned-entrepreneur. 10 years in the tech industry. Geek at heart. </div>
          <div>Previously: Cambridge, Scalized, HgCapital, DN.</div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" height=\"160\" width=\"160\" src=\"{{url('theme://images/corine.png')}}\" srcset=\"{{url('theme://images/corine@2x.png')}} 2x, {{url('theme://images/corine@3x.png')}} 3x\" />
        <div class=\"title normal-font\">Corinne Sawers</div>
        <div class=\"desc small-font\">
          <div>Responsible for all things companies facing</div>
          <div>8+ years using markets for impact. Co-founder of disruptive political start up More United. Amateur aerial circus artist. </div>
          <div>Previously: McKinsey, Oxford, LSE, INSEAD.</div>
        </div>
      </div>
    </div>
  </section>
  <section min-height=\"548px;\" class=\"about-sect content-padding tt-section\">
    <h3 class=\"left-border normal-font ml-50\">
      Advisors
    </h3>
    <div class=\"columns\">
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" src=\"{{url('theme://images/daniel.png')}}\" srcset=\"{{url('theme://images/daniel@2x.png')}} 2x, {{url('theme://images/daniel@3x.png')}} 3x\" />
        <div class=\"title normal-font\">Daniel Bernhardt</div>
        <div class=\"desc small-font\">
          <div>Software Engineering Manager at Facebook</div>
          <div>Formerly @Microsft @Google. Daniel brings a wealth of experience in building and nurturing highly effective and collaborative engineering teams. </div>
          <div>He regularly speaks at universities to inspire the next generation about applied technical challenges.</div>
        </div>
      </div>
      <div class=\"col-6 col-md-12 col-xs-12 column people animated fadeInDown\">
        <img class=\"bitmap\" src=\"{{url('theme://images/jon.png')}}\" srcset=\"{{url('theme://images/jon@2x.png')}} 2x, {{url('theme://images/jon@3x.png')}} 3x\" />
        <div class=\"title normal-font\">Jon Crowcroft</div>
        <div class=\"desc small-font\">
          <div>CS Professor at Cambridge University</div>
          <div>Jon is one of the most respected figure in computer science. He’s a Fellow at The Royal Society, The ACM, The IEEE, The Royal Academy of Engineering, The Institute of Engineering and Technology, The Alan Turing Institute - just to name a few. </div>
          <div>Jon is also one of the masterminds behind the Raspberry Pi - a \$5 computer that changed many lives in underprivileged regions. </div>
        </div>
      </div>
    </div>
  </section>
{% endblock %}
", "about.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/about.html.twig");
    }
}
