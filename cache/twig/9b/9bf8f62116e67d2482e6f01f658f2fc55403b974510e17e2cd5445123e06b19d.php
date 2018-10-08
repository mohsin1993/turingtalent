<?php

/* for-engineers.html.twig */
class __TwigTemplate_6649fe7aaa56231608900763acb8a436adb50c61c01fb7575f8dde939e404b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "for-engineers.html.twig", 1);
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/responsive.js", 1 => array("group" => "bottom")), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<section>
  <section class=\"main-header normal-font\">
    <div class=\"columns ml0\">
      <div class=\"col-12 content-padding\">
        <h1 class=\"normal-font\">
          A Happy Home for Engineers
        </h1>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\">
      <h3 class=\"left-border normal-font\">
        Why Turing Talent
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content\">
          <p class=\"normal-font\">
            We help companies ‘build their own remote technical teams in our European hubs. You get the benefits of being a full-time employee of the company you’re working at, as well as being part of a local, high-calibre Turing Talent community.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\">
        More than a Job
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small\">
          <p class=\"small-font\">
            Once you’re part of Turing Talent you’ll have access to a range of benefits and perks that will help you advance your career.
          </p>
        </div>
      </div>
      <div class=\"divided-sects content-padding\">
        <div class=\"columns\">
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 46
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/career.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Career Acceleration
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Soft skills and leadership development program that will help you grow and</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 65
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/balance.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Work Life Balance
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Child care for parents</li>
                    <li>Personalised mentoring programme</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 85
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/community.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Community
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Friends for life. Build a high-calibre network of fellow engineers and data scientists</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 104
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/giveback.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Give Back
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Opportunities to give back</li>
                    <li>Coaching</li>
                    <li>Contributing to open source projects</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\" style=\"margin: 0px\">
        Application Process
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small\">
          <div class=\"small-font\">
            <ol>
              <li>Apply to Turing Talent</li>
              <li>Take the coding challenge which is designed for your specialisation</li>
              <li>An online video call so we get to know you better as a person</li>
              <li>Start getting matched with suitable companies</li>
            </ol>
            We strive to be respectful of your time and effort by providing you feedback early and often.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 45px;\">
      <h3 class=\"left-border normal-font\" style=\"margin: 0px\">
        Open Jobs
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small\">
          <div class=\"small-font\">
            <ul>
              <li>Frontend Engineer at Host Compliance</li>
              <li>Python Engineer with a Data Focus at Host Compliance</li>
              <li>Director of Engineering at Host Compliance</li>
              <li>Data Scientist for Open application</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "for-engineers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 104,  124 => 85,  101 => 65,  79 => 46,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
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
{% do assets.addJs('theme://js/responsive.js', {group:'bottom'}) %}
{% block content %}
<section>
  <section class=\"main-header normal-font\">
    <div class=\"columns ml0\">
      <div class=\"col-12 content-padding\">
        <h1 class=\"normal-font\">
          A Happy Home for Engineers
        </h1>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\">
      <h3 class=\"left-border normal-font\">
        Why Turing Talent
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content\">
          <p class=\"normal-font\">
            We help companies ‘build their own remote technical teams in our European hubs. You get the benefits of being a full-time employee of the company you’re working at, as well as being part of a local, high-calibre Turing Talent community.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\">
        More than a Job
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small\">
          <p class=\"small-font\">
            Once you’re part of Turing Talent you’ll have access to a range of benefits and perks that will help you advance your career.
          </p>
        </div>
      </div>
      <div class=\"divided-sects content-padding\">
        <div class=\"columns\">
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/career.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Career Acceleration
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Soft skills and leadership development program that will help you grow and</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/balance.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Work Life Balance
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Child care for parents</li>
                    <li>Personalised mentoring programme</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/community.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Community
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Friends for life. Build a high-calibre network of fellow engineers and data scientists</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\" style=\"padding-right: 25px;\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/giveback.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Give Back
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Opportunities to give back</li>
                    <li>Coaching</li>
                    <li>Contributing to open source projects</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\" style=\"margin: 0px\">
        Application Process
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small\">
          <div class=\"small-font\">
            <ol>
              <li>Apply to Turing Talent</li>
              <li>Take the coding challenge which is designed for your specialisation</li>
              <li>An online video call so we get to know you better as a person</li>
              <li>Start getting matched with suitable companies</li>
            </ol>
            We strive to be respectful of your time and effort by providing you feedback early and often.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 45px;\">
      <h3 class=\"left-border normal-font\" style=\"margin: 0px\">
        Open Jobs
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small\">
          <div class=\"small-font\">
            <ul>
              <li>Frontend Engineer at Host Compliance</li>
              <li>Python Engineer with a Data Focus at Host Compliance</li>
              <li>Director of Engineering at Host Compliance</li>
              <li>Data Scientist for Open application</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
{% endblock %}
", "for-engineers.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/for-engineers.html.twig");
    }
}
