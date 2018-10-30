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
        // line 2
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://code.jquery.com/jquery-3.3.1.min.js", 1 => array("group" => "bottom")), "method");
        // line 3
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/custom.min.js", 1 => array("group" => "bottom")), "method");
        // line 4
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/responsive.min.js", 1 => array("group" => "bottom")), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <section class=\"animated fadeInDown\" style=\"padding-bottom: 37px;\">
    <div class=\"banner-section\">
      ";
        // line 12
        echo "      <div class=\"padded\">
        <h1 class=\"normal-font\">Distributed Teams as a Service</h1>
        <div class=\"columns\">
          <div class=\"column col-8 col-md-9 col-sm-12 text-section\">
            <div class=\"content\">
              <p class=\"normal-font\">
                Turing Talent enables you to build world class distributed technical teams, by providing hassle-free talent sourcing, operations, managed offices, learning and development.
              </p>
            </div>
          </div>
          <div class=\"column col-4 col-md-3 col-sm 12 text-right image-section\">
            <div class=\"image\">
              <div class=\"oval\">
                <object type=\"image/svg+xml\" data=\"";
        // line 25
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "distributed.svg", array(), "array"), "url", array());
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
      <h3 class=\"left-border normal-font\">
        We’re All About The Talent
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content\">
          <p class=\"normal-font\">
            Our professional development programme, mentoring and community set all hub members on an accelerated career path, helping you build high functioning and happy teams.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\">
        One Monthly Fee, Many Benefits.
      </h3>
      ";
        // line 58
        echo "      <div class=\"divided-sects content-padding\">
        <div class=\"columns\">
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 63
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "talent.svg", array(), "array"), "url", array());
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Talent
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Hire untapped, high calibre talent</li>
                    <li>Insource <strike>Outsource</strike></li>
                    <li>Build teams in weeks, not months</li>
                    <li>Trained to work in remote teams</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 85
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "office.svg", array(), "array"), "url", array());
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
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
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 106
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "operations.svg", array(), "array"), "url", array());
        echo "\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
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
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"";
        // line 127
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "community.svg", array(), "array"), "url", array());
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
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 60px;\">
      <h3 class=\"left-border normal-font\">
        Simple and Transparent Pricing
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small-font small\">
          Our simple all-in-one fee includes salary, operations and office. We also customize our model based on your needs, either way you’re always the employer.
        </div>
      </div>
      <div class=\"pricing content-padding\">
        <div class=\"title normal-font\">
          Get an Instant Estimate
        </div>
        <div class=\"content col-9 col-md-12\">
          <div class=\"tabs-list\">
            <ul class=\"tab tab-block\">
              <li class=\"tab-item small-font active\">
                <a class=\"nav-link\" href=\"#lang-tab\">Language</a>
              </li>
              <li class=\"tab-item small-font\">
                <a class=\"nav-link\" href=\"#exp-tab\">Experience</a>
              </li>
              <li class=\"tab-item small-font\">
                <a class=\"nav-link\" href=\"#dev-tab\">Developers</a>
              </li>
              ";
        // line 178
        echo "            </ul>
          </div>
          <div class=\"tab-containers\">
            <div id=\"lang-tab\" class=\"tab-content active animated fadeIn\">
              <div class=\"headline small-font\">What is the primary language skill are you hiring for?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Language\">
                      <span data-value=\"C / C++\" class=\"option small-font\">C / C++</span>
                      <span data-value=\"C#\" class=\"option small-font\">C#</span>
                      <span data-value=\"Javascript\" class=\"option small-font\">JavaScript</span>
                      <span data-value=\"Java\" class=\"option small-font\">Java</span>
                      <span data-value=\"PHP\" class=\"option small-font\">PHP</span>
                      <span data-value=\"Python\" class=\"active option small-font\">Python</span>
                      <span data-value=\"Ruby\" class=\"option small-font\">Ruby</span>
                      <span data-value=\"Other\" class=\"option small-font\">Other</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#exp-tab\">Next</button>
                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"dev-tab\" class=\"tab-content animated fadeIn\">
              <div class=\"headline small-font\">How many remote developers are you looking to hire?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Developers\">
                      <span data-value=\"1-10\" class=\"active option small-font\">1-10</span>
                      <span data-value=\"11-50\" class=\"option small-font\">11-50</span>
                      <span data-value=\"50-100\" class=\"option small-font\">50-100</span>
                      <span data-value=\"100+\" class=\"option small-font\">100+</span>
                    </div>
                  </div>
                  <button class=\"small-font primary recal\">Recalculate</button>
                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"exp-tab\" class=\"tab-content animated fadeIn\">
              <div class=\"headline small-font\">How many years of experience do you require?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Experience\">
                      <span data-value=\"1-3 years\" class=\"option small-font\">1-3 years</span>
                      <span data-value=\"3-6 years\" class=\"active option small-font\">3-6 years</span>
                      <span data-value=\"6-9 years\" class=\"option small-font\">6-9 years</span>
                      <span data-value=\"9+ years\" class=\"option small-font\">9+ years</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#dev-tab\">Next</button>
                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"servic-tab\" class=\"tab-content animated fadeIn\">
              <div class=\"headline small-font\">What service(s) do you need?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Services\">
                      <span data-value=\"Talent sourcing & screening\" class=\"option small-font active\">Talent sourcing & screening</span>
                      <span data-value=\"Managed office\" class=\"option small-font\">Managed office</span>
                      <span data-value=\"Payroll & accounting\" class=\"option small-font\">Payroll & accounting</span>
                      <span data-value=\"Community & development\" class=\"option small-font\">Community & development</span>
                    </div>
                  </div>
                  ";
        // line 300
        echo "                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
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
      <h3 class=\"left-border normal-font\">
        Sign Up to Get Started
      </h3>
      <form class=\"step1 animated fadeIn\">
        <div class=\"columns content-padding\">
          <div class=\"column col-9 col-md-12 tt-section-content\" style=\"padding-right: 0px !important;\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8 col-sm-12\">
                <div class=\"form-group\">
                  <div class=\"alert alert-danger small-font\" style=\"display: none;\" role=\"alert\">
                    Valid email address is required!
                  </div>
                  <label class=\"small-font\">Email</label>
                  <input  class=\"form-control\" name=\"Email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div>
                  <button type=\"submit\" class=\"small-font next\">
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
          <div class=\"column col-9 col-md-12 tt-section-content\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8 col-sm-12\">
                <div class=\"form-group\">
                  <label class=\"small-font\">Email</label>
                  <input class=\"form-control\" name=\"Email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Name</label>
                  <input class=\"form-control\" name=\"Name\" placeholder=\"Your Name\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Company</label>
                  <input class=\"form-control\" name=\"Company\" placeholder=\"Your Company\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Website</label>
                  <input class=\"form-control\" name=\"Website\" placeholder=\"Your Website\" type=\"text\">
                </div>
                <div>
                  <button type=\"submit\" class=\"primary small-font\">Submit</button>
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
              <div class=\"calendly-loader\" style=\"min-width:310px;height:380px;margin-left: 42%;margin-top: 15%;\">
                <div class=\"dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
              </div>
              <div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/corinne-sawers/30min\" style=\"min-width:320px;height:380px;display: none;\"></div>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src=\"https://unpkg.com/axios@0.18.0/dist/axios.min.js\" type=\"text/javascript\"></script>
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
        return array (  343 => 300,  220 => 178,  169 => 127,  145 => 106,  121 => 85,  96 => 63,  89 => 58,  57 => 25,  42 => 12,  38 => 6,  35 => 5,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
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
{% do assets.addJs('theme://js/custom.min.js', {group:'bottom'}) %}
{% do assets.addJs('theme://js/responsive.min.js', {group:'bottom'}) %}
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
          <div class=\"column col-8 col-md-9 col-sm-12 text-section\">
            <div class=\"content\">
              <p class=\"normal-font\">
                Turing Talent enables you to build world class distributed technical teams, by providing hassle-free talent sourcing, operations, managed offices, learning and development.
              </p>
            </div>
          </div>
          <div class=\"column col-4 col-md-3 col-sm 12 text-right image-section\">
            <div class=\"image\">
              <div class=\"oval\">
                <object type=\"image/svg+xml\" data=\"{{ page.find('/images').media['distributed.svg'].url }}\">
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
      <h3 class=\"left-border normal-font\">
        We’re All About The Talent
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content\">
          <p class=\"normal-font\">
            Our professional development programme, mentoring and community set all hub members on an accelerated career path, helping you build high functioning and happy teams.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 30px;\">
      <h3 class=\"left-border normal-font\">
        One Monthly Fee, Many Benefits.
      </h3>
      {# <div class=\"columns content-padding\">
        <div class=\"column col-9 tt-section-content\">
        </div>
      </div> #}
      <div class=\"divided-sects content-padding\">
        <div class=\"columns\">
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ page.find('/images').media['talent.svg'].url }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
                <div class=\"title normal-font\">
                  Talent
                </div>
                <div class=\"content small-font\">
                  <ul>
                    <li>Hire untapped, high calibre talent</li>
                    <li>Insource <strike>Outsource</strike></li>
                    <li>Build teams in weeks, not months</li>
                    <li>Trained to work in remote teams</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ page.find('/images').media['office.svg'].url }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
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
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ page.find('/images').media['operations.svg'].url }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
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
          </div>
          <div class=\"column col-3 col-md-6 col-sm-12\">
            <div class=\"divided-sect\">
              <div class=\"image\">
                <object width=\"64px\" height=\"64px\" type=\"image/svg+xml\" data=\"{{ page.find('/images').media['community.svg'].url }}\">
                  Your browser does not support SVG
                </object>
              </div>
              <div class=\"contet-sect\">
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
    </div>
  </section>
  <section class=\"animated fadeInDown\">
    <div class=\"tt-section\" style=\"margin-top: 60px;\">
      <h3 class=\"left-border normal-font\">
        Simple and Transparent Pricing
      </h3>
      <div class=\"columns content-padding\">
        <div class=\"column col-9 col-md-12 tt-section-content small-font small\">
          Our simple all-in-one fee includes salary, operations and office. We also customize our model based on your needs, either way you’re always the employer.
        </div>
      </div>
      <div class=\"pricing content-padding\">
        <div class=\"title normal-font\">
          Get an Instant Estimate
        </div>
        <div class=\"content col-9 col-md-12\">
          <div class=\"tabs-list\">
            <ul class=\"tab tab-block\">
              <li class=\"tab-item small-font active\">
                <a class=\"nav-link\" href=\"#lang-tab\">Language</a>
              </li>
              <li class=\"tab-item small-font\">
                <a class=\"nav-link\" href=\"#exp-tab\">Experience</a>
              </li>
              <li class=\"tab-item small-font\">
                <a class=\"nav-link\" href=\"#dev-tab\">Developers</a>
              </li>
              {# <li class=\"tab-item small-font\">
                <a href=\"#servic-tab\">Services</a>
              </li> #}
            </ul>
          </div>
          <div class=\"tab-containers\">
            <div id=\"lang-tab\" class=\"tab-content active animated fadeIn\">
              <div class=\"headline small-font\">What is the primary language skill are you hiring for?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Language\">
                      <span data-value=\"C / C++\" class=\"option small-font\">C / C++</span>
                      <span data-value=\"C#\" class=\"option small-font\">C#</span>
                      <span data-value=\"Javascript\" class=\"option small-font\">JavaScript</span>
                      <span data-value=\"Java\" class=\"option small-font\">Java</span>
                      <span data-value=\"PHP\" class=\"option small-font\">PHP</span>
                      <span data-value=\"Python\" class=\"active option small-font\">Python</span>
                      <span data-value=\"Ruby\" class=\"option small-font\">Ruby</span>
                      <span data-value=\"Other\" class=\"option small-font\">Other</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#exp-tab\">Next</button>
                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"dev-tab\" class=\"tab-content animated fadeIn\">
              <div class=\"headline small-font\">How many remote developers are you looking to hire?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Developers\">
                      <span data-value=\"1-10\" class=\"active option small-font\">1-10</span>
                      <span data-value=\"11-50\" class=\"option small-font\">11-50</span>
                      <span data-value=\"50-100\" class=\"option small-font\">50-100</span>
                      <span data-value=\"100+\" class=\"option small-font\">100+</span>
                    </div>
                  </div>
                  <button class=\"small-font primary recal\">Recalculate</button>
                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"exp-tab\" class=\"tab-content animated fadeIn\">
              <div class=\"headline small-font\">How many years of experience do you require?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Experience\">
                      <span data-value=\"1-3 years\" class=\"option small-font\">1-3 years</span>
                      <span data-value=\"3-6 years\" class=\"active option small-font\">3-6 years</span>
                      <span data-value=\"6-9 years\" class=\"option small-font\">6-9 years</span>
                      <span data-value=\"9+ years\" class=\"option small-font\">9+ years</span>
                    </div>
                  </div>
                  <button class=\"small-font next\" data-href=\"#dev-tab\">Next</button>
                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"servic-tab\" class=\"tab-content animated fadeIn\">
              <div class=\"headline small-font\">What service(s) do you need?</div>
              <div class=\"columns\">
                <div class=\"col-8 col-sm-12\">
                  <div class=\"details\">
                    <div class=\"options\" data-key=\"Services\">
                      <span data-value=\"Talent sourcing & screening\" class=\"option small-font active\">Talent sourcing & screening</span>
                      <span data-value=\"Managed office\" class=\"option small-font\">Managed office</span>
                      <span data-value=\"Payroll & accounting\" class=\"option small-font\">Payroll & accounting</span>
                      <span data-value=\"Community & development\" class=\"option small-font\">Community & development</span>
                    </div>
                  </div>
                  {# <button class=\"small-font primary submit\">Estimate Price</button> #}
                </div>
                <div class=\"col-4 col-sm-12\">
                  <div class=\"total-price\">
                    <div class=\"rectangle\">
                      <div class=\"price-label small-font\">
                        <div style=\"display: none;\" class=\"loader dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
                        <div class=\"value\">
                          \$12,500
                        </div>
                      </div>
                      <div class=\"time small-font\">
                        All-in-one cost: <b>Salary &amp; Operation</b>
                      </div>
                    </div>
                    <div class=\"est small-font\">
                      Yearly estimate
                    </div>
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
      <h3 class=\"left-border normal-font\">
        Sign Up to Get Started
      </h3>
      <form class=\"step1 animated fadeIn\">
        <div class=\"columns content-padding\">
          <div class=\"column col-9 col-md-12 tt-section-content\" style=\"padding-right: 0px !important;\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8 col-sm-12\">
                <div class=\"form-group\">
                  <div class=\"alert alert-danger small-font\" style=\"display: none;\" role=\"alert\">
                    Valid email address is required!
                  </div>
                  <label class=\"small-font\">Email</label>
                  <input  class=\"form-control\" name=\"Email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div>
                  <button type=\"submit\" class=\"small-font next\">
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
          <div class=\"column col-9 col-md-12 tt-section-content\">
            <div class=\"columns ml0\"> 
              <div class=\"col-8 col-sm-12\">
                <div class=\"form-group\">
                  <label class=\"small-font\">Email</label>
                  <input class=\"form-control\" name=\"Email\" placeholder=\"Your Email\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Name</label>
                  <input class=\"form-control\" name=\"Name\" placeholder=\"Your Name\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Company</label>
                  <input class=\"form-control\" name=\"Company\" placeholder=\"Your Company\" type=\"text\">
                </div>
                <div class=\"form-group\">
                  <label class=\"small-font\">Website</label>
                  <input class=\"form-control\" name=\"Website\" placeholder=\"Your Website\" type=\"text\">
                </div>
                <div>
                  <button type=\"submit\" class=\"primary small-font\">Submit</button>
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
              <div class=\"calendly-loader\" style=\"min-width:310px;height:380px;margin-left: 42%;margin-top: 15%;\">
                <div class=\"dark lds-ellipsis\"><div></div><div></div><div></div><div></div></div>
              </div>
              <div class=\"calendly-inline-widget\" data-url=\"https://calendly.com/corinne-sawers/30min\" style=\"min-width:320px;height:380px;display: none;\"></div>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src=\"https://unpkg.com/axios@0.18.0/dist/axios.min.js\" type=\"text/javascript\"></script>
{% endblock %}", "home.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/home.html.twig");
    }
}
