<?php

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_68d7cbfe4b1d26e825ff6993a97f2d95c66a66d5ca602e77ba73c80531190a93 extends Twig_Template
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
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "evaluate", array())) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateFunc($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())))) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set value = (value is null ? (field.evaluate ? evaluate(field.default) : field.default) : value) %}

<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value|join(', ') }}\" />
";
    }
}
