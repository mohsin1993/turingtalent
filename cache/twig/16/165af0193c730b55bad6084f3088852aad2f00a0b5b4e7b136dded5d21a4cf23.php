<?php

/* forms/fields/git-wizard/git-wizard.html.twig */
class __TwigTemplate_0a7bd90a4de9d5297499af9168e83939e7e91e56f3a94883df17e9688c945e04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/field.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
    }

    // line 5
    public function block_input($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\">
        GitSync = {
            'first_time': ";
        // line 8
        echo twig_jsonencode_filter($this->getAttribute((isset($context["git_sync"]) ? $context["git_sync"] : null), "first_time", array()));
        echo ",
            'git_installed': ";
        // line 9
        echo twig_jsonencode_filter($this->getAttribute((isset($context["git_sync"]) ? $context["git_sync"] : null), "git_installed", array()));
        echo "
        };
    </script>
    <a href=\"#\" data-gitsync-useraction=\"wizard\" class=\"button button-primary\"><i class=\"fa fa-fw fa-magic\"></i> Wizard</a>
    <a href=\"#\" data-gitsync-useraction=\"sync\" class=\"button button-primary\"><i class=\"fa fa-fw fa-cloud\"></i> Synchronize</a>
    <span class=\"danger button-bar\"><a href=\"#\" data-gitsync-useraction=\"reset\" class=\"button danger\"><i class=\"fa fa-fw fa-history\"></i> Reset Local Copy</a></span>
    ";
        // line 15
        $this->loadTemplate("partials/modal-wizard.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        $this->loadTemplate("partials/modal-reset.html.twig", "forms/fields/git-wizard/git-wizard.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/git-wizard/git-wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  54 => 15,  45 => 9,  41 => 8,  37 => 6,  34 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/default/field.html.twig\" %}

{% block label %}{% endblock %}

{% block input %}
    <script type=\"text/javascript\">
        GitSync = {
            'first_time': {{ git_sync.first_time|json_encode|raw }},
            'git_installed': {{ git_sync.git_installed|json_encode|raw }}
        };
    </script>
    <a href=\"#\" data-gitsync-useraction=\"wizard\" class=\"button button-primary\"><i class=\"fa fa-fw fa-magic\"></i> Wizard</a>
    <a href=\"#\" data-gitsync-useraction=\"sync\" class=\"button button-primary\"><i class=\"fa fa-fw fa-cloud\"></i> Synchronize</a>
    <span class=\"danger button-bar\"><a href=\"#\" data-gitsync-useraction=\"reset\" class=\"button danger\"><i class=\"fa fa-fw fa-history\"></i> Reset Local Copy</a></span>
    {% include 'partials/modal-wizard.html.twig' %}
    {% include 'partials/modal-reset.html.twig' %}
{% endblock %}
", "forms/fields/git-wizard/git-wizard.html.twig", "/Users/mohsanriaz/Sites/grav-admin/user/plugins/git-sync/templates/forms/fields/git-wizard/git-wizard.html.twig");
    }
}
