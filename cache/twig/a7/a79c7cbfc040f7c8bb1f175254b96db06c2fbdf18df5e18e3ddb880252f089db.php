<?php

/* partials/analytics.html.twig */
class __TwigTemplate_d38434ef5256fb576284c9caf2b61baa08a4954b8044f184c8866439a13abf05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-115388873-1\"></script>
<script>
  function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag(\"js\",new Date),gtag(\"config\",\"UA-115388873-1\");
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-115388873-1\"></script>
<script>
  function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag(\"js\",new Date),gtag(\"config\",\"UA-115388873-1\");
</script>
", "partials/analytics.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/templates/partials/analytics.html.twig");
    }
}
