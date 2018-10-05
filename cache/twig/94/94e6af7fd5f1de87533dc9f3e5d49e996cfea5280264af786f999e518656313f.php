<?php

/* home.html.twig */
class __TwigTemplate_f26e24040b00010fbcb6aaf6bb04e2a36320e6be1d7fad3eff16c37fde8ba92c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        echo "  <section class=\"animated fadeInDown\" style=\"padding-bottom: 37px;\">
    <div class=\"banner-section\">
      ";
        // line 9
        echo "      <div class=\"padded\">
        <h1 class=\"normal-font\">Distributed Teams as a Service</h1>
        <div class=\"columns\">
          <div class=\"column col-8 text-section\">
            <div class=\"content\">
              <p class=\"normal-font\">
                Turing Talent enables you to build world class distributed technical teams, by providing hussle-free talent sourcing, operations, managed offices, learning and development.
              </p>
            </div>
          </div>
          <div class=\"column col-4 text-right image-section\">
            <div class=\"image\">
              <div class=\"oval\">
                <object width=\"173px\" height=\"173px\" type=\"image/svg+xml\" data=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/distributed.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        We’re All About The Talent
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 tt-section-content\">
          <p class=\"normal-font\">
            Our ‘talent first’ philosophy guides our unique community and training, putting all hub members on an accelerated career paths, and helping you build high-functioning and happy teams.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        One Monthly Fee, Many Benefits.
      </h3>
      ";
        // line 55
        echo "      <div class=\"divided-sects content-padding\" style=\"margin-top: 40px;\">
        <div class=\"columns\">
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 60
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/talent.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                Talent
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Hire untapped, high calibre talent</li>
                  <li>Insource Outsource</li>
                  <li>Build teams in weeks, not months</li>
                  <li>Trained to work in remote teams</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 80
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/office.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                Office
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Fully managed office space</li>
                  <li>Purpose equipped for effective remote teams</li>
                  <li>Flexible, no-hassle lease</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 99
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/operations.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                HR & Operations
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Legal</li>
                  <li>Payroll</li>
                  <li>Accounting</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 118
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/community.svg");
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                Community
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Flagship soft skills & leadership development programme</li>
                  <li>Mentoring programme</li>
                  <li>Pay it forward: opportunity to coach under-privileged communities</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 60px;\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        Simple and Transparent Pricing
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 tt-section-content small-font small\">
          We customize our model based on your needs. You can be the direct employer, or choose a simple all-in-one fee that includes salary, operations and office.
        </div>
      </div>
      <div class=\"pricing content-padding\">
        <div class=\"title normal-font\">
          Get an Instant Estimate
        </div>
        <div class=\"content col-9\">
          <div class=\"tabs-list\">
            <ul class=\"tab tab-block\">
              <li class=\"tab-item small-font active\">
                <a href=\"#lang-tab\">Language</a>
              </li>
              <li class=\"tab-item small-font\">
                <a href=\"#exp-tab\">Experience</a>
              </li>
              <li class=\"tab-item small-font\">
                <a href=\"#dev-tab\">Developers</a>
              </li>
              <li class=\"tab-item small-font\">
                <a href=\"#servic-tab\">Services</a>
              </li>
            </ul>
          </div>
          <div class=\"tab-containers\">
            <div class=\"columns\">
              <div class=\"col-8\">
                <div id=\"lang-tab\" class=\"tab-content active animated fadeIn\">
                  <div class=\"headline small-font\">Whats is your required tech stack?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">C/C++</span>
                      <span class=\"option small-font\">C#</span>
                      <span class=\"option small-font\">JavaScript</span>
                      <span class=\"option small-font\">Java</span>
                      <span class=\"option small-font\">PHP</span>
                      <span class=\"option small-font\">Python</span>
                      <span class=\"option small-font\">Ruby</span>
                      <span class=\"option small-font\">Other</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#exp-tab\">Next</button>
                </div>
                <div id=\"dev-tab\" class=\"tab-content animated fadeIn\">
                  <div class=\"headline small-font\">How many remote developers are you looking to hire?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">1-5</span>
                      <span class=\"option small-font\">6-25</span>
                      <span class=\"option small-font\">26-50</span>
                      <span class=\"option small-font\">50+</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#servic-tab\">Next</button>
                </div>
                <div id=\"exp-tab\" class=\"tab-content animated fadeIn\">
                  <div class=\"headline small-font\">How many years of experience do you require?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">1-2</span>
                      <span class=\"option small-font\">2-5</span>
                      <span class=\"option small-font\">5+</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#dev-tab\">Next</button>
                </div>
                <div id=\"servic-tab\" class=\"tab-content animated fadeIn\">
                  <div class=\"headline small-font\">Whats service do you need?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">Service 1</span>
                      <span class=\"option small-font\">Service 2</span>
                      <span class=\"option small-font\">Service 3</span>
                    </div>
                  </div>
                  <button class=\"small-font primary submit\">Estimate Price</button>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"total-price\">
                  <div class=\"rectangle\">
                    <div class=\"price-label small-font\">
                      \$12,500
                    </div>
                    <div class=\"time small-font\">
                      per month
                    </div>
                  </div>
                  <div class=\"est small-font\">
                    Estimate
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section signup\" style=\"margin-top: 60px\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        Sign Up to Get Started
      </h3>
      <form class=\"step1 animated fadeIn\">
        <div class=\"columns content-padding\">
          <div class=\"column col-9 tt-section-content\" style=\"padding-right: 0px !important;\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8\">
                <div class=\"form-group\">
                  <div class=\"alert alert-danger small-font\" style=\"display: none;\" role=\"alert\">
                    Valid email address is required!
                  </div>
                  <label class=\"small-font\">Email</label>
                  <input required class=\"form-control\" name=\"email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div>
                  <button type=\"button\" class=\"small-font next\">
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <form class=\"step2\" style=\"display: none;\">
        <div class=\"columns content-padding\">
          <div class=\"column col-9 tt-section-content\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8\">
                <div class=\"form-group\">
                  <label class=\"small-font\">Email</label>
                  <input class=\"form-control\" name=\"email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Name</label>
                  <input class=\"form-control\" name=\"name\" placeholder=\"Your Name\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Company</label>
                  <input class=\"form-control\" name=\"company\" placeholder=\"Your Company\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Website</label>
                  <input class=\"form-control\" name=\"website\" placeholder=\"Your Website\" type=\"text\">
                </div>
                <div>
                  <button type=\"button\" class=\"primary small-font\">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class=\"step3\" style=\"display: none;\">
        <div class=\"columns content-padding\">
          <div class=\"column col-12 tt-section-content\">
            <div class=\"headline small-font\">
              Want to get started sooner? Schedule a time to talk to us.
            </div>
            <div style=\"margin-top: 20px;\"> 
              ";
        // line 308
        echo "              ";
        // line 309
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 309,  348 => 308,  156 => 118,  134 => 99,  112 => 80,  89 => 60,  82 => 55,  50 => 22,  35 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
  <section class=\"animated fadeInDown\" style=\"padding-bottom: 37px;\">
    <div class=\"banner-section\">
      {# {% set sections = page.collection %}
      {% for section in sections %}
        {{section.content}}
      {% endfor %} #}
      <div class=\"padded\">
        <h1 class=\"normal-font\">Distributed Teams as a Service</h1>
        <div class=\"columns\">
          <div class=\"column col-8 text-section\">
            <div class=\"content\">
              <p class=\"normal-font\">
                Turing Talent enables you to build world class distributed technical teams, by providing hussle-free talent sourcing, operations, managed offices, learning and development.
              </p>
            </div>
          </div>
          <div class=\"column col-4 text-right image-section\">
            <div class=\"image\">
              <div class=\"oval\">
                <object width=\"173px\" height=\"173px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/distributed.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        We’re All About The Talent
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 tt-section-content\">
          <p class=\"normal-font\">
            Our ‘talent first’ philosophy guides our unique community and training, putting all hub members on an accelerated career paths, and helping you build high-functioning and happy teams.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        One Monthly Fee, Many Benefits.
      </h3>
      {# <div class=\"columns content-padding\">
        <div class=\"column col-9 tt-section-content\">
        </div>
      </div> #}
      <div class=\"divided-sects content-padding\" style=\"margin-top: 40px;\">
        <div class=\"columns\">
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/talent.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                Talent
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Hire untapped, high calibre talent</li>
                  <li>Insource Outsource</li>
                  <li>Build teams in weeks, not months</li>
                  <li>Trained to work in remote teams</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/office.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                Office
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Fully managed office space</li>
                  <li>Purpose equipped for effective remote teams</li>
                  <li>Flexible, no-hassle lease</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/operations.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                HR & Operations
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Legal</li>
                  <li>Payroll</li>
                  <li>Accounting</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"column col-3\" style=\"padding-right: 25px;\">
            <div>
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ url('theme://images/community.svg') }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"title normal-font\">
                Community
              </div>
              <div class=\"content small-font\">
                <ul>
                  <li>Flagship soft skills & leadership development programme</li>
                  <li>Mentoring programme</li>
                  <li>Pay it forward: opportunity to coach under-privileged communities</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 60px;\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        Simple and Transparent Pricing
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 tt-section-content small-font small\">
          We customize our model based on your needs. You can be the direct employer, or choose a simple all-in-one fee that includes salary, operations and office.
        </div>
      </div>
      <div class=\"pricing content-padding\">
        <div class=\"title normal-font\">
          Get an Instant Estimate
        </div>
        <div class=\"content col-9\">
          <div class=\"tabs-list\">
            <ul class=\"tab tab-block\">
              <li class=\"tab-item small-font active\">
                <a href=\"#lang-tab\">Language</a>
              </li>
              <li class=\"tab-item small-font\">
                <a href=\"#exp-tab\">Experience</a>
              </li>
              <li class=\"tab-item small-font\">
                <a href=\"#dev-tab\">Developers</a>
              </li>
              <li class=\"tab-item small-font\">
                <a href=\"#servic-tab\">Services</a>
              </li>
            </ul>
          </div>
          <div class=\"tab-containers\">
            <div class=\"columns\">
              <div class=\"col-8\">
                <div id=\"lang-tab\" class=\"tab-content active animated fadeIn\">
                  <div class=\"headline small-font\">Whats is your required tech stack?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">C/C++</span>
                      <span class=\"option small-font\">C#</span>
                      <span class=\"option small-font\">JavaScript</span>
                      <span class=\"option small-font\">Java</span>
                      <span class=\"option small-font\">PHP</span>
                      <span class=\"option small-font\">Python</span>
                      <span class=\"option small-font\">Ruby</span>
                      <span class=\"option small-font\">Other</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#exp-tab\">Next</button>
                </div>
                <div id=\"dev-tab\" class=\"tab-content animated fadeIn\">
                  <div class=\"headline small-font\">How many remote developers are you looking to hire?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">1-5</span>
                      <span class=\"option small-font\">6-25</span>
                      <span class=\"option small-font\">26-50</span>
                      <span class=\"option small-font\">50+</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#servic-tab\">Next</button>
                </div>
                <div id=\"exp-tab\" class=\"tab-content animated fadeIn\">
                  <div class=\"headline small-font\">How many years of experience do you require?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">1-2</span>
                      <span class=\"option small-font\">2-5</span>
                      <span class=\"option small-font\">5+</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#dev-tab\">Next</button>
                </div>
                <div id=\"servic-tab\" class=\"tab-content animated fadeIn\">
                  <div class=\"headline small-font\">Whats service do you need?</div>
                  <div class=\"details\">
                    <div class=\"options\">
                      <span class=\"option small-font\">Service 1</span>
                      <span class=\"option small-font\">Service 2</span>
                      <span class=\"option small-font\">Service 3</span>
                    </div>
                  </div>
                  <button class=\"small-font primary submit\">Estimate Price</button>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"total-price\">
                  <div class=\"rectangle\">
                    <div class=\"price-label small-font\">
                      \$12,500
                    </div>
                    <div class=\"time small-font\">
                      per month
                    </div>
                  </div>
                  <div class=\"est small-font\">
                    Estimate
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section signup\" style=\"margin-top: 60px\">
      <h3 class=\"left-border normal-font\" style=\"padding-left: 40px !important;\">
        Sign Up to Get Started
      </h3>
      <form class=\"step1 animated fadeIn\">
        <div class=\"columns content-padding\">
          <div class=\"column col-9 tt-section-content\" style=\"padding-right: 0px !important;\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8\">
                <div class=\"form-group\">
                  <div class=\"alert alert-danger small-font\" style=\"display: none;\" role=\"alert\">
                    Valid email address is required!
                  </div>
                  <label class=\"small-font\">Email</label>
                  <input required class=\"form-control\" name=\"email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div>
                  <button type=\"button\" class=\"small-font next\">
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <form class=\"step2\" style=\"display: none;\">
        <div class=\"columns content-padding\">
          <div class=\"column col-9 tt-section-content\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8\">
                <div class=\"form-group\">
                  <label class=\"small-font\">Email</label>
                  <input class=\"form-control\" name=\"email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Name</label>
                  <input class=\"form-control\" name=\"name\" placeholder=\"Your Name\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Company</label>
                  <input class=\"form-control\" name=\"company\" placeholder=\"Your Company\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Website</label>
                  <input class=\"form-control\" name=\"website\" placeholder=\"Your Website\" type=\"text\">
                </div>
                <div>
                  <button type=\"button\" class=\"primary small-font\">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class=\"step3\" style=\"display: none;\">
        <div class=\"columns content-padding\">
          <div class=\"column col-12 tt-section-content\">
            <div class=\"headline small-font\">
              Want to get started sooner? Schedule a time to talk to us.
            </div>
            <div style=\"margin-top: 20px;\"> 
              {# <div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/mohsinriaz224/15min\" style=\"min-width:320px;height:380px;\"></div> #}
              {# <script type=\"text/javascript\" src=\"https://assets.calendly.com/assets/external/widget.js\"></script> #}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{% endblock %}
", "home.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/home.html.twig");
    }
}
